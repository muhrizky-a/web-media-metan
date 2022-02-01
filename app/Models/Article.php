<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'articles';

    // Berisi nama kolom tabel yang dapat diisi
    protected $fillable = [
        "title", "content", "category_id", "image_url","link", "created_at", "updated_at"
    ];
}
