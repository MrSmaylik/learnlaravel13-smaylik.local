<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

#Передача параметра
Route::get('/posts/{id}/{userid}', function ($id, $userid) {
   return 'post ' . $id . ' by ' . $userid;
});

#Передача необязательного параметра
Route::get('/posts/page/{page?}', function ($page = 1) {
    return 'page number ' . $page;
});

#https://learnlaravel13-smaylik.local/posts/page - 1
#https://learnlaravel13-smaylik.local/posts/page/12 - 12

#Маршрут на получение из бд всех пользователей
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
