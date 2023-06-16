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
      <h1>Daftar Pengaduan Barang</h1>
      <p>Daftar yang mencatat aduan-aduan yang diajukan oleh konsumen terkait kerusakan, kehilangan, atau masalah lain yang terkait dengan barang yang dibeli.</p>
      <p>Berikut merupakan data pengaduan barang oleh konsumen:</p>
    </div>

  <div class='fitur-cari'>
    <form action="{{ route('data') }}" method="GET">
      <input type="text" name="search" placeholder="Search...">
      <button type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>

<div class='zebra-table'>

  <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Nama</th>
                <th>Jenis Pengaduan</th>
                <th>Tanggal Pesanan</th>
                <th>Tanggal Pembuatan Aduan</th>
                <th>Tanggal Update Aduan</th>
            </tr>
        </thead>
        <tbody>

          @if (!empty($data['data']['data']))
            @foreach ($data['data']['data'] as $item)
            <tr>
                <td>{{ $item['id_transaksi'] }}</td>
                <td>{{ $item['nama_pelanggan'] }}</td>
                <td>{{ $item['jenis_pengaduan'] }}</td>
                <td>{{ $item['tanggal_pesanan'] }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td>{{ $item['updated_at'] }}</td>
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