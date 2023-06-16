<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asuransi-Ku</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
<header>
    <div class="logo">
      <img src="{{ asset('logo.png') }}" alt="Asuransi-Ku">
    </div>
    <nav>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('tentang_kami') }}">Tentang Kami</a></li>
        <li><a href="{{ url('klaim') }}">Klaim</a></li>
        <li><a href="{{ url('input_aduan') }}">Input Aduan</a></li>
        <li><a href="{{ url('data') }}">Pengaduan Barang</a></li>
        <li><a href="{{ url('pengaduan_barang') }}">Asuransi Barang</a></li>
      </ul>
    </nav>
  </header>
  
    <div class="daftar">
      <h1>Asuransi Pengaduan Barang</h1>
      <p>Pengaduan barang yang telah disetujui asuransi sebagai bentuk perlindungan yang penting bagi pemilik barang.</p>
      <p>Berikut detail data pengaduan barang yang telah diasuransikan:</p>
    </div>

  <div class='fitur-cari'>
    <form action="{{ route('pengaduan_barang') }}" method="GET">
      <input type="text" name="search" placeholder="Search...">
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>

<div class='zebra-table'>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Invoice</th>
                <th>Nomor Telepon</th>
                <th>Nomor Resi</th>
                <th>Harga</th>
                <th>Detail Produk</th>
                <th>Kurir</th>
                <th>Metode pembayaran</th>
                <th>Tanggal Pemesanan</th>
                <th>Tanggal Pembayaran</th>
                <th>Status Barang</th>
                <th>Biaya Asuransi</th>
                <th>Jenis Pengaduan</th>
            </tr>
        </thead>
        <tbody>

        @if (isset($asuransi) && $asuransi->isNotEmpty())
          @foreach ($asuransi->sortByDesc('tanggal_bayar') as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->invoice }}</td>
                        <td>{{ $data->no_telp }}</td>
                        <td>{{ $data->no_resi }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->detail_produk }}</td>
                        <td>{{ $data->kurir }}</td>
                        <td>{{ $data->metode_bayar }}</td>
                        <td>{{ $data->tanggal_pesan }}</td>
                        <td>{{ $data->tanggal_bayar }}</td>
                        <td>{{ $data->status_barang }}</td>
                        <td>{{ $data->biaya_asuransi }}</td>
                        <td>{{ $data->jenis_pengaduan }}</td>
                    </tr>
          @endforeach
      @else
        <tr>
            <td colspan="14">Data tidak ditemukan.</td>
        </tr>
      @endif
</tbody>
    </table>
</div>

  <footer>
    <div class="footer-content">
      <div class="footer-section about">
        <h3>Tentang Kami</h3>
        <p>Kami adalah perusahaan asuransi yang berkomitmen untuk memberikan perlindungan dan keamanan bagi klien kami.</p>
      </div>
      <div class="footer-section contact">
        <h3>Hubungi Kami</h3>
        <p>Jl. Deposito No. 123, Kota Bandung, Negara Indonesia</p>
        <p>+62 82113476705</p>
        <p>info@asuransi-ku.com</p>
      </div>
      <div class="footer-section links">
        <h3>Tautan Cepat</h3>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Hak Cipta &copy; 2023 Asuransi-Ku. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>