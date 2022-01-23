<?php

namespace App\Http\Controllers;

use App\Models\AktaKematian;
use App\Models\AnggotaKeluarga;
use App\Models\KartuKeluarga;
use App\Models\Kepindahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerpindahanController extends Controller
{
    public function viewByUser()
    {
        $user = Auth::user();
        $kk = KartuKeluarga::where('no_kk', '=', $user->nomor_kk)->first();
        $datas = AnggotaKeluarga::where('no_kk', '=', $user->nomor_kk)->get();
        return view('perpindahan.user_index')->with(
            compact(
                'kk',
                'datas',
            )
        );
    }

    public function store(Request $request)
    {
        if (Kepindahan::create($request->all())) {
            return back()->with(["success" => "Data Berhasil Diajukan"]);
        } else {
            return back()->with(["error" => "Data Gagal Diajukan"]);
        }
    }
}
