<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('dashboard.index');
    }

    public function task ()
    {
        $post = Post::orderBy('created_at', 'DESC')->get();
        return view('dashboard.task',[
            'post' => $post
        ]);
    }
}
