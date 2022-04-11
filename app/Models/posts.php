<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_title',
        'post_conten',
        'post_date',
        'post_image',
        'category_id'
    ];
    protected $table = "posts";

}
