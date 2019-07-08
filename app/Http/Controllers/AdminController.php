<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }

    public function dashboard() {
        return View('admin.dashboard');
    }

    public function posts() {
        return View('admin.posts');
    }

    public function comments() {
        return View('admin.comments');
    }

    public function users() {
        return View('admin.users');
    }
}
