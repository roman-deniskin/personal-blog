<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:author');
    }

    public function dashboard() {
        return View('author.dashboard');
    }

    public function posts() {
        return View('author.posts');
    }

    public function comments() {
        return View('author.comments');
    }
}
