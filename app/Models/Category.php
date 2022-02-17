<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'categories';

    protected $fillable = [
        "name","link"
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
