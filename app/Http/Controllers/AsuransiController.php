<?php

namespace App\Http\Controllers;

use App\Models\Asuransi;
use Illuminate\Http\Request;

class AsuransiController extends Controller
{
    public function index()
    {
        $Asuransis = Asuransi::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Asuransi Berhasil Diambil',
            'data' => $Asuransis
        ], 200);
    }

    public function store(Request $request)
    {
        $data = new Asuransi();
        $data->id_user = $request->input('id_user');
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->invoice = $request->input('invoice');
        $data->no_telp = $request->input('no_telp');
        $data->no_resi = $request->input('no_resi');
        $data->harga = $request->input('harga');
        $data->detail_produk = $request->input('detail_produk');
        $data->kurir = $request->input('kurir');
        $data->metode_bayar = $request->input('metode_bayar');
        $data->tanggal_pesan = $request->input('tanggal_pesan');
        $data->tanggal_bayar = $request->input('tanggal_bayar');
        $data->status_barang = $request->input('status_barang');
        $data->biaya_asuransi = $request->input('biaya_asuransi');
        $data->jenis_pengaduan = $request->input('jenis_pengaduan');

        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Asuransi Berhasil Dimasukkan',
            'data' => $data
        ], 200);
    }

    public function show($id)
    {
        $data = Asuransi::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Data Asuransi Berhasil Ditampilkan',
            'data' => $data
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $data = Asuransi::findOrFail($id);
        // $data->id_user = $request->input('id_user');
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->invoice = $request->input('invoice');
        $data->no_telp = $request->input('no_telp');
        $data->no_resi = $request->input('no_resi');
        $data->harga = $request->input('harga');
        $data->detail_produk = $request->input('detail_produk');
        $data->kurir = $request->input('kurir');
        $data->metode_bayar = $request->input('metode_bayar');
        $data->tanggal_pesan = $request->input('tanggal_pesan');
        $data->tanggal_bayar = $request->input('tanggal_bayar');
        $data->status_barang = $request->input('status_barang');
        $data->biaya_asuransi = $request->input('biaya_asuransi');
        $data->jenis_pengaduan = $request->input('jenis_pengaduan');

        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Asuransi Berhasil Diubah',
            'data' => $data
        ], 200);
    }

    public function destroy($id)
    {
        $data = Asuransi::findOrFail($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Asuransi Berhasil Dihapus',
        ], 200);
    }

    public function patch(Request $request, $id)
    {
        $data = Asuransi::findOrFail($id);
        $data->nama = $request->input('nama', $data->nama);
        $data->alamat = $request->input('alamat', $data->alamat);
        $data->invoice = $request->input('invoice', $data->invoice);
        $data->no_telp = $request->input('no_telp', $data->no_telp);
        $data->no_resi = $request->input('no_resi', $data->no_resi);
        $data->harga = $request->input('harga', $data->harga);
        $data->detail_produk = $request->input('detail_produk', $data->detail_produk);
        $data->kurir = $request->input('kurir', $data->kurir);
        $data->metode_bayar = $request->input('metode_bayar', $data->metode_bayar);
        $data->tanggal_pesan = $request->input('tanggal_pesan', $data->tanggal_pesan);
        $data->tanggal_bayar = $request->input('tanggal_bayar', $data->tanggal_bayar);
        $data->status_barang = $request->input('status_barang', $data->status_barang);
        $data->biaya_asuransi = $request->input('biaya_asuransi', $data->biaya_asuransi);
        $data->jenis_pengaduan = $request->input('jenis_pengaduan', $data->jenis_pengaduan);

        $data->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Asuransi Berhasil Diedit',
            'data' => $data
        ], 200);
    }
}