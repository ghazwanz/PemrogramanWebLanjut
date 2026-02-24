<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Nama: Ghazwan Ababil \n NIM: 244107020151";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID $id";
    }
}
