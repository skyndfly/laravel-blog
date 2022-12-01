<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(Category $category, StoreRequest $request)
    {
        $data = $request->validated();
        $category->update($data);
        session()->flash('success', 'Категория обновлена');
        return view('admin.categories.edit', ['category' => $category]);
    }
}
