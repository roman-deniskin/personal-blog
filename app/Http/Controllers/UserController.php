<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\View\View;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('checkRole:user');
    }*/
    // TODO: Добавить проверку, что пользователь авторизован (через закомментированный мидлваре)

    /**
     * @return View
     */
    public function dashboard() {
        return View('user.dashboard');
    }

    /**
     * @return View
     */
    public function comments() {
        return View('user.comments');
    }

    /**
     * @return View
     */
    public function profile() {
        return View('user.profile');
    }

    public function profilePost(UserUpdate $request) {
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back();
    }
}
