<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsrAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        "csr_id",
        "path",
        "filename",
        "type",
        "size",
    ];
}
