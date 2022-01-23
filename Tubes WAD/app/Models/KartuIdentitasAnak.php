<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuIdentitasAnak extends Model
{
    use HasFactory;

    protected $fillable = [
        "no_kk",
        "nama",
        "jk",
        "tempat_lahir",
        "tanggal_lahir",
        "status_hubungan_keluarga",
        "ket",
        "status",
        "created_at",
        "updated_at"
    ];
}
