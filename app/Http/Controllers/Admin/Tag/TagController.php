<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $data = Tag::all();
        return view('admin.tags.index', ['tags' => $data]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::create($data);
        session()->flash('success', 'Тег создан');
        return redirect()->route('admin.tag.create');
    }

    public function show(Tag $tag)
    {
        return view('admin.tags.show', ['tag' => $tag]);
    }
}
