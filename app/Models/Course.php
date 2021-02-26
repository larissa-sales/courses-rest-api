<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model 
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'body', 'price'];
    /*
    | protected $guarded = ['name', 'description', 'body', 'price'];
    |
    | contrario do fillable
    */
}