<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('checkRole:user');
    }*/
    // TODO: Добавить проверку, что пользователь авторизован (через закомментированный мидлваре)

    public function dashboard() {
        return View('user.dashboard');
    }

    public function comments() {
        return View('user.comments');
    }
}
