<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Метод на получение всех пользователей
    public function index() {
        // Получение всех пользователей из модели
        $users = User::all();
        // Возвращение представления (Страницы) вместе с массивом пользователей
        return view('users.index', compact('users'));
    }
}
