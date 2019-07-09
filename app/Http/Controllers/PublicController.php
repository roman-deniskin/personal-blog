<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;


class PublicController extends Controller
{
    /**
     * @return View
     */
    public function index() {
        $posts = Post::all();

        return view('welcome', ['posts' => $posts]);
    }

    /**
     * @param  Post $post
     * @return View
     */
    public function singlePost(Post $post) {
        return view('singlePost', ['post' => $post]);
    }

    /**
     * @return View
     */
    public function about() {
        return view('about');
    }

    /**
     * @return View
     */
    public function contact() {
        return view('contact');
    }

    /**
     * @return View
     */
    public function contactPost() {
        return view('contact');
    }
}
