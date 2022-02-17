<?php

namespace App\Http\Controllers;

use App\Models\ArticlePageView;
use Illuminate\Http\Request;

class ArticlePageViewController extends Controller
{
    public static function create($articleId)
    {
        $page_read = new ArticlePageView();
        $page_read->article_id = $articleId;
        $page_read->save();
    }

    public static function getAll()
    {
        $pageViewCount = ArticlePageView::count();
        return $pageViewCount;
    }

    public static function get($articleId)
    {
        $pageViewCount = ArticlePageView::where('article_id', $articleId)->count();
        return $pageViewCount;
    }
}
