<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktaKematian extends Model
{
    use HasFactory;

    protected $fillable = [
        "anggota_id",
        "created_at",
        "updated_at"
    ];
}
