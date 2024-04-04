<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Laravel\Prompts\table;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'sluge' , 'description' , 'image' , 'is_showing ' , 'is_popular'
    , ' meta_title' , 'meta_description ' , 'meta_keywords'];

}

