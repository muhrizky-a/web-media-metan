<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;


class HomeController extends Controller
{


    public function home()
    {
        return view('home.home');
    }

    public function category(Category $category)
    {
        $articles = ArticleController::getWithCategory($category)->get();

        // Array baru untuk thumbnail 2 artikel terbaru
        $article_thubnails = array();

        $article_paginate = ArticleController::getWithCategory($category)->paginate(3);

        if (count($articles) > 2) {
            foreach ($articles as $key => $row) {
                if ($key <= 1) {
                    array_push($article_thubnails, $row);
                    // if($row->id == $article_paginate[$key]["id"])
                    //     unset($article_paginate[$key]);
                } else {
                    break;
                }
            }
        }

        return view('home.category', [
            'article_thubnails' => $article_thubnails,
            'articles' => $article_paginate,
            'category' => $category
        ]);
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $articles = Article::with(['category'])
            ->where(
                function ($query) use ($q) {
                    $query->where('title', 'Like', "%$q%")
                        ->orWhere('content', 'Like', "%$q%");
                }
            )
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('home.search', [
            'search' => $q,
            'articles' => $articles
        ]);
    }

    public function admin()
    {
        return $this->admin_home();
    }
    public function admin_home()
    {
        $articles = ArticleController::getAll()->count();
        $categories = CategoryController::getAll()->count();
        $journalists = JournalistController::getAll()->count();
        $pageViews = ArticlePageViewController::getAll();
        return view('admin.home', [
            'articles' => $articles,
            'categories' => $categories,
            'journalists' => $journalists,
            'pageViews' => $pageViews
        ]);
    }
}
