<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaKeluarga extends Model
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
        "created_at",
        "updated_at"
    ];

}
