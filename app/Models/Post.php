<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    public  $timestamps=false;

    // protected $fillable =[
    //     'title',
    //     'short_desc',
    //     'lond_desc',
    //     'image',
    //     'post_date',
    //     'status',
    //     'post_date'
    // ];
}
