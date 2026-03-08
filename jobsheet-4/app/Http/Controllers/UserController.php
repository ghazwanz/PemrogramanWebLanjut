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
        
        $user = UserModel::firstOrNew(
            ['username' => 'manager'],
            ['nama' => 'Manager', 'password' => Hash::make('12345'), 'level_id' => 2]
        );
        return view('user', ['data' => $user]);
    }
}
