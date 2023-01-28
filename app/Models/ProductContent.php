<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductContent extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_id",
        "languages_id",
        "title",
        "content",
    ];
}
