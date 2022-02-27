<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterPage extends Model
{
    protected $primaryKey = 'id';
    protected $tables = 'footer_pages';

    // Berisi nama kolom tabel yang dapat diisi
    protected $guarded = [
        'id'
    ];
}
