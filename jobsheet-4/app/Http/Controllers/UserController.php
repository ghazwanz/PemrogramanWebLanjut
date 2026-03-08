<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });
        // $user = UserModel::findOr(1, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        // $user = UserModel::firstOrCreate(
        //     ['username' => 'manager22'],
        //     ['nama' => 'Manager Dua Dua', 'password' => Hash::make('12345'), 'level_id' => 2]
        // );

        // $user = UserModel::firstOrCreate(
        //     ['username' => 'manager'],
        //     ['nama' => 'Manager', 'password' => Hash::make('12345'), 'level_id' => 2]
        // );

        // $user = UserModel::firstOrNew(
        //     ['username' => 'manager33'],
        //     ['nama' => 'Manager Tiga Tiga', 'password' => Hash::make('12345'), 'level_id' => 2]
        // );
        // $user->save();
        
        // $user = UserModel::firstOrNew(
        //     ['username' => 'manager'],
        //     ['nama' => 'Manager', 'password' => Hash::make('12345'), 'level_id' => 2]
        // );
        // return view('user', ['data' => $user]);

        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'level_id' => 2,
            'password' => Hash::make('12345'),
        ]);

        $user->username = 'manager12';

        $user->isDirty(); // true
        $user->isDirty('username'); // true
        $user->isDirty('nama'); // false
        $user->isClean(); // false
        $user->isClean('username'); // false
        $user->isClean('nama'); // true

        $user->save();

        $user->isDirty(); // false
        $user->isClean(); // true
        $user->wasChanged(); // true
        $user->wasChanged('username'); // true
        $user->wasChanged(['username', 'level_id']); // true
        $user->wasChanged('nama'); // false
        dd($user->wasChanged(['nama', 'username']));

        return view('user', ['data' => $user]);
    }
}
