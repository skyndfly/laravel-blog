<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {

        $category->delete();
        session()->flash('info', 'Категория удалена');
        return redirect()->route('admin.category.index');
    }
}
