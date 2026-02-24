<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello()
    {
        return "Hello World";
    }

    public function greeting()
    {
        return view('blog.hello')
            ->with('name', 'Ghazwan')
            ->with('occupation', 'Astronaut');
    }
}
