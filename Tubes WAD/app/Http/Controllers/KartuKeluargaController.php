<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KartuKeluargaController extends Controller
{
    public function viewKK()
    {
        $user = Auth::user();
        $kk = KartuKeluarga::where('no_kk', '=', $user->nomor_kk)->first();
        $anggota = AnggotaKeluarga::where('no_kk', '=', $user->nomor_kk)->get();
        return view('kk.user_index')->with(
            compact(
                'kk',
                'anggota',
            )
        );
    }

    public function addAnggota(Request $request)
    {
        if (AnggotaKeluarga::create($request->all())) {
            return back()->with(["success" => "Kartu Keluarga Berhasil Disimpan"]);
        } else {
            return back()->with(["error" => "Kartu Keluarga Gagal Disimpan"]);
        }
    }


    public function store(Request $request)
    {
        $data = new KartuKeluarga();
        $data->kepala_keluarga = $request->kepala_keluarga;
        $data->rtrw = $request->rtrw;
        $data->no_kk = $request->nokk;
        $data->kelurahan = $request->kelurahan;
        $data->kecamatan = $request->kecamatan;

        if ($data->save()) {
            return back()->with(["success" => "Kartu Keluarga Berhasil Disimpan"]);
        } else {
            return back()->with(["error" => "Kartu Keluarga Gagal Disimpan"]);
        }
    }
}
