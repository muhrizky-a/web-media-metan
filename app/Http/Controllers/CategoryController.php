<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Functions;

class CategoryController extends Controller
{
    public function create(Request $request){
        $name = $request->input('name');

        $new_category = new Category();
        $new_category->name = $name;
        $new_category->link = (new Functions)->createLink($name);

        $new_category->save();

    
        return redirect()->route('admin.category.list');
    }

    public function getAll(){
        //Pagination yang menampilkan 10 artikel dalam 1 page
        $categories = Category::all();
        $data = array(
            'category_list' => $categories
        );
        return $data;
    }

    private function get($id){
        //Cari artikel dengan id = $id
        $detail = Category::find($id);
        if ($detail == NULL) {
            return;   
        }
        return $detail;
    }
}
