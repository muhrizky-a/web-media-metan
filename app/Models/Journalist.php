<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'journalists';

    protected $fillable = [
        "name","status"
    ];
}
