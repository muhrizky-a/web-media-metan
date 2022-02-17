<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'article_comments';

    protected $guarded = [
        "id"
    ];

    /**
     * Get the article that owns the comment.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
