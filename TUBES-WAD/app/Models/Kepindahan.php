<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepindahan extends Model
{
    use HasFactory;
    protected $fillable = [
        "anggota_id",
        "status",
        "nomor_pindah",
        "created_at",
        "updated_at"
    ];
}
