<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class TodoRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if ($this->method() === Request::METHOD_POST) {
            return true;
        }

        $todo = $this->route('todo');

        return $todo && auth()->id() === $todo->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'todo' => 'required|string|max:255',
            'label' => 'nullable|string',
            'done' => 'nullable|boolean',
        ];
    }
}
