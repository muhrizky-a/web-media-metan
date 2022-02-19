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
        return Category::with(['article'])->get();
    }

    public static function get($category)
    {
        $category->load('article')->paginate(10);

        return $category;
    }

    public function admin_category_list()
    {
        return view('admin.category.list', [
            'categories' => $this->getAll()
        ]);
    }

    public function admin_category_detail(Category $category)
    {
        $categories = $this->get($category);

        foreach ($categories->article as $a) {
            $i = 0;
            $clean_content = "";

            $raw_contents = explode(" ", $a->content); // Memisahkan kata-kata content dalam bentuk array
            foreach ($raw_contents as $raw_content) {

                // Ambil 20 kata pertama dan gabungkan dengan clean_content
                if ($i <= 20) {
                    $clean_content .= " " . $raw_content;
                    $i += 1;
                }
            }
            
            $a->content = $clean_content . " . . ."; 
        }
        
        return view('admin.category.detail', [
            'categories' => $categories,
        ]);
    }

    public function category_insert()
    {
        return view('admin.category.insert');
    }

    public function admin_category_update(Category $category)
    {
        $category_detail = $this->get($category);
        
        return view('admin.category.update', [
            'category_detail' => $category_detail
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $name = $request->input('name');
        

        $category->update([
            'name' => $name
        ]);

        return redirect()->route('admin.category.detail', $category);
    }

    public function delete(Category $category)
    {
        $category->delete();

        echo "<script type='text/javascript'>
            alert('Hapus Data Berhasil');
        </script>";
        return redirect()->route('admin.category.list');
    }
}
