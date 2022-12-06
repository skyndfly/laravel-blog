<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post::all();
        return view('admin.posts.index', ['posts' => $data]);
    }
    public function create(){
        return view('admin.posts.create');
    }
}
