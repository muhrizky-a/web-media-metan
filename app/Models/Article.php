<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'articles';

    // Berisi nama kolom tabel yang dapat diisi
    protected $guarded = [
        'id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function journalist()
    {
        return $this->belongsTo(Journalist::class);
    }

    /**
     * Get the comments for the article.
     */
    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    public function page_views()
    {
        return $this->hasMany(ArticlePageView::class);
    }

    /*
    public function getRouteKeyName()
    {
        return 'link';
    }
    */
}
