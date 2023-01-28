<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Csr extends Model
{
    use HasFactory;

    protected $table = "csr";

    public function attachment()
    {
        return $this->hasOne(CsrAttachment::class, "csr_id"); 
    }

    public function content()
    {
        return $this->hasOne(CsrContent::class, "csr_id");
    }
}
