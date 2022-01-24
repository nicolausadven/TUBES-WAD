<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {
        if (Pengajuan::create($request->all())) {
            return back()->with(["success" => "Pengajuan Berhasil Diajukan"]);
        } else {
            return back()->with(["error" => "Pengajuan Gagal Diajukan"]);
        }
    }

}
