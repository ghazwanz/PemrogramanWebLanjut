<?php

namespace Tests\Feature;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RestApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register_login_and_logout_with_token(): void
    {
        $register = $this->postJson('/api/register', [
            'name' => 'API User',
            'email' => 'api@example.com',
            'password' => 'password123',
        ]);

        $register
            ->assertOk()
            ->assertJsonPath('data.token_type', 'Bearer')
            ->assertJsonPath('data.user.email', 'api@example.com');

        $login = $this->postJson('/api/login', [
            'email' => 'api@example.com',
            'password' => 'password123',
        ]);

        $token = $login->json('data.token');

        $login
            ->assertOk()
            ->assertJsonPath('data.token_type', 'Bearer');

        $this->withHeader('Authorization', "Bearer {$token}")
            ->postJson('/api/logout')
            ->assertOk()
            ->assertJsonPath('data', 'Tokens revoked');
    }

    public function test_authenticated_user_can_manage_own_todos(): void
    {
        $user = User::factory()->create();
        $token = $user->createToken('auth_token')->plainTextToken;

        $create = $this->withHeader('Authorization', "Bearer {$token}")
            ->postJson('/api/todos', [
                'todo' => 'Menguji REST API Todo',
                'label' => 'praktikum',
                'done' => false,
            ]);

        $todoId = $create->json('data.id');

        $create
            ->assertOk()
            ->assertJsonPath('data.todo', 'Menguji REST API Todo')
            ->assertJsonPath('data.user.email', $user->email);

        $this->withHeader('Authorization', "Bearer {$token}")
            ->getJson('/api/todos')
            ->assertOk()
            ->assertJsonCount(1, 'data');

        $this->withHeader('Authorization', "Bearer {$token}")
            ->putJson("/api/todos/{$todoId}", [
                'todo' => 'Todo berhasil diperbarui',
                'label' => 'api',
                'done' => true,
            ])
            ->assertOk()
            ->assertJsonPath('data.todo', 'Todo berhasil diperbarui')
            ->assertJsonPath('data.done', true);

        $this->withHeader('Authorization', "Bearer {$token}")
            ->deleteJson("/api/todos/{$todoId}")
            ->assertOk();

        $this->assertDatabaseMissing('todos', [
            'id' => $todoId,
        ]);
    }

    public function test_user_cannot_access_another_users_todo(): void
    {
        $owner = User::factory()->create();
        $otherUser = User::factory()->create();
        $token = $otherUser->createToken('auth_token')->plainTextToken;

        $todo = Todo::create([
            'user_id' => $owner->id,
            'todo' => 'Todo milik user lain',
            'label' => 'private',
            'done' => false,
        ]);

        $this->withHeader('Authorization', "Bearer {$token}")
            ->getJson("/api/todos/{$todo->id}")
            ->assertUnauthorized();
    }
}
