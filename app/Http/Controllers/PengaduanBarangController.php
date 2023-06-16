<?php

namespace App\Http\Controllers;

use App\Models\Asuransi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanBarangController extends Controller
{
    public function asuransi()
    {
        $asuransi = Asuransi::all();

        return view('pengaduan_barang', compact('asuransi'));
    }

    public function search(Request $request)
    
    {
    $search = $request->input('search');
    $data = DB::table('asuransi')
            ->where(function ($query) use ($search) {
                $query->where('nama', 'like', '%'.$search.'%')
                      ->orWhere('alamat', 'like', '%'.$search.'%')
                      ->orWhere('invoice', 'like', '%'.$search.'%')
                      ->orWhere('no_telp', 'like', '%'.$search.'%')
                      ->orWhere('no_resi', 'like', '%'.$search.'%')
                      ->orWhere('harga', 'like', '%'.$search.'%')
                      ->orWhere('detail_produk', 'like', '%'.$search.'%')
                      ->orWhere('kurir', 'like', '%'.$search.'%')
                      ->orWhere('metode_bayar', 'like', '%'.$search.'%')
                      ->orWhere('tanggal_pesan', 'like', '%'.$search.'%')
                      ->orWhere('tanggal_bayar', 'like', '%'.$search.'%')
                      ->orWhere('status_barang', 'like', '%'.$search.'%')
                      ->orWhere('biaya_asuransi', 'like', '%'.$search.'%')
                      ->orWhere('jenis_pengaduan', 'like', '%'.$search.'%');
            })
            ->orderBy('tanggal_bayar', 'desc')
            ->get();

            if ($data->isNotEmpty()) {
                return view('pengaduan_barang', ['asuransi' => $data]);
            }
            else {
                return view('pengaduan_barang')->with('message', 'Data tidak ditemukan.');
            }
    }
}