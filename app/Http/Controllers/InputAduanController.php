<?php

namespace App\Http\Controllers;

use App\Models\Asuransi;
use Illuminate\Http\Request;

class InputAduanController extends Controller
{
    public function index()
    {
        return view('input_aduan');
    }

    public function simpanData(Request $request)
    {
        Asuransi::create($request->except(['_token', 'kirim']));

        return redirect('/pengaduan_barang')->with('success', 'Data berhasil disimpan');
    }
}
