<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\FooterPage;

class HomeController extends Controller
{


    public function test()
    {
        $data = Article::with(['category'])->get()->sortByDesc('created_at')->take(3);

        return $data;
    }

    public function home()
    {
        $article_groups = Category::with(['article'])->get();
        $newest_articles = Article::with(['category', 'journalist', 'comments', 'page_views'])->get()->sortByDesc('created_at')->take(3);

        return view('home.home', [
            'article_groups' => $article_groups,
            'newest_articles' => $newest_articles
        ]);
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
        $articles = ArticleController::searchArticle($q);

        return view('home.search', [
            'search' => $q,
            'articles' => $articles
        ]);
    }

    public function about()
    {
        return view('home.about');
    }

    public function footer(FooterPage $page)
    {
        return view('home.other-page-in-footer', [
            'page' => $page,
        ]);
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function redaksi()
    {
        return view('home.redaksi');
    }

    public function admin()
    {
        return $this->admin_home();
    }

    public function admin_login()
    {
        return view('admin.login');
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


    public function admin_logout()
    {
        return $this->admin_home();
    }
}
