<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'title',
        'type',
        'short_description',
        'description',
        'img',
        'author'
    ];
}
