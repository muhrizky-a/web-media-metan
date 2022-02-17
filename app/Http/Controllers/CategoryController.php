<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Functions;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->input('name');

        $new_category = new Category();
        $new_category->name = $name;
        $new_category->link = (new Functions)->createLink($name);

        $new_category->save();


        return redirect()->route('admin.category.list');
    }

    public static function getAll()
    {
        return Category::all();
    }

    public static function get($category)
    {
        $category->load('article')->paginate(2);
        return $category;
    }

    public function admin_category_list()
    {
        return view('admin.category.list', [
            'categories' => $this->getAll()
        ]);
    }

    public function category_insert()
    {
        return view('admin.category.insert');
    }
}
