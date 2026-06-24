<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BLOG extends Model
{
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'img',
        'desc',
    ];
}
