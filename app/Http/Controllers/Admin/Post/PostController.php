<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\PostRequest;
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
    public function store(PostRequest $request){
        $data = $request->validated();
        Post::create($data);
        session()->flash('success', "Новый пост добавлен");
        return redirect()->route('admin.post.index');
    }
}
