<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getData()
    {
        $client = new Client();
        $response = $client->get('https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan/');
        $data = json_decode($response->getBody(), true);

        return view('data', compact('data'));
    }

    public function search(Request $request)
{
    $search = $request->input('search');
    $client = new Client();
    $response = $client->get('https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan/');
    $responseData = json_decode($response->getBody(), true);

    $data = collect($responseData)
        ->filter(function ($item) use ($search) {
            return array_key_exists('id_transaksi', $item) && stripos($item['id_transaksi'], $search) !== false
                || array_key_exists('nama_pelanggan', $item) && stripos($item['nama_pelanggan'], $search) !== false
                || array_key_exists('jenis_pengaduan', $item) && stripos($item['jenis_pengaduan'], $search) !== false
                || array_key_exists('tanggal_pesanan', $item) && stripos($item['tanggal_pesanan'], $search) !== false
                || array_key_exists('created_at', $item) && stripos($item['created_at'], $search) !== false
                || array_key_exists('updated_at', $item) && stripos($item['updated_at'], $search) !== false;
        })
            ->values();

        if ($data->isNotEmpty()) {
            return view('data', ['data' => $data]);
        } else {
            return view('data')->with('message', 'Dataaaaaaaaa tidak ditemukan.');
        }
    }
}