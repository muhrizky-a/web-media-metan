<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function home()
    {
        return view('home');
    }
    public function article()
    {
        return view('article');
    }
    public function category()
    {
        return view('category');
    }
    public function category_list()
    {
        return view('category-list');
    }
    public function search()
    {
        return view('search');
    }

    public function admin()
    {
        return $this->admin_home();
    }
    public function admin_home()
    {
        return view('admin.home');
    }
    public function admin_article_list()
    {
        $data = (new ArticleController)->getAll(5);
        return view('admin.article-list', $data);
    }
    public function article_insert()
    {
        $categories = (new CategoryController)->getAll();
        $journalists = (new JournalistController)->getAll();
        $data = $categories + $journalists;
        return view('admin.article-insert', $data);
    }
    public function admin_category_list()
    {
        $data = (new CategoryController)->getAll();
        return view('admin.category-list', $data);
    }
    public function category_insert()
    {
        return view('admin.category-insert');
    }
    public function admin_journalist_list()
    {
        $data = (new JournalistController)->getAll();
        return view('admin.journalist-list', $data);
    }
    public function journalist_insert()
    {
        return view('admin.journalist-insert');
    }
}
