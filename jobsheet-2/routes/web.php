<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/world', function () {
    return "World";
});

Route::get('/about', function () {
    return "244107020151";
});


Route::get('/user/{name}', function ($name) {
    return "Nama saya $name";
});

Route::get('/posts/{post}/comments/{comment}', function ($postId,$commentsId) {
    return "Pos ke-$postId, Komentar ke-$commentsId";
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID $id";
});

// Route::get('users/{name?}', function ($name=null) {
//     return "Nama Saya $name";
// });

Route::get('users/{name?}', function ($name="John") {
    return "Nama Saya $name";
});
