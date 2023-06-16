<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asuransi extends Model
{
    protected $table = 'asuransi';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    // Define atribut-atribut yang dapat diisi
    protected $fillable = [
        'id_user',
        'nama',
        'alamat',
        'invoice',
        'no_telp',
        'no_resi',
        'harga',
        'detail_produk',
        'kurir',
        'metode_bayar',
        'tanggal_pesan',
        'tanggal_bayar',
        'status_barang',
        'biaya_asuransi',
        'jenis_pengaduan',
    ];
}
