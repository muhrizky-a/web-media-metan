<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticlePageView extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'article_page_views';

    protected $guarded = [
        'id'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
