<?php

namespace App\Http\Controllers;

use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    public function create(Request $request)
    {
        $article_id = $request->input('article_id');
        $name = $request->input('name');
        $email = $request->input('email');
        $comments = $request->input('comments');
        
        $new_comments = new ArticleComment();
        $new_comments->article_id = $article_id;
        $new_comments->name = $name;
        $new_comments->email = $email;
        $new_comments->comments = $comments;
        
        $new_comments->save();
        return back();
    }

    public function show($article_id) {

    }
}
