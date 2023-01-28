<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionToRole extends Model
{
    use HasFactory;

    protected $table = "permissions_to_roles";

    protected $fillable = [
        "roles_id",
        "permissions_id",
    ];
}
