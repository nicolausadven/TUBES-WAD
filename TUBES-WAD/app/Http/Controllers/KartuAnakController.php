<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use App\Models\KartuIdentitasAnak;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KartuAnakController extends Controller
{
    public function viewByUser()
    {
        $user = Auth::user();
        $kk = KartuKeluarga::where('no_kk', '=', $user->nomor_kk)->first();
        $datas = KartuIdentitasAnak::where('no_kk', '=', $user->nomor_kk)->get();
        return view('kartuanak.user_index')->with(
            compact(
                'kk',
                'datas'
            )
        );
    }

    public function add(Request $request)
    {
        if (KartuIdentitasAnak::create($request->all())) {
            return back()->with(["success" => "Kartu Keluarga Berhasil Disimpan"]);
        } else {
            return back()->with(["error" => "Kartu Keluarga Gagal Disimpan"]);
        }
    }


}
