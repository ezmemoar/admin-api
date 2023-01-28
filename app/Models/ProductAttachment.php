<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        "products_id",
        "path",
        "filename",
        "type",
        "size",
    ];
}
