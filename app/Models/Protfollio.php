<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protfollio extends Model
{
    use HasFactory;
    protected $fillable= [
        "title",
        "subtitle",
        "big_image",
        "small_image",
        "description",
        "client",
        "catagory",

];
}