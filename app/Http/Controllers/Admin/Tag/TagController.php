<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $data = collect([
            [
                'id' => 1,
                'title' => 'Первый тег'
            ],
            [
                'id' => 2,
                'title' => 'Второй тег'
            ]
        ]);
        return view('admin.tags.index', ['tags' => $data]);
    }
}
