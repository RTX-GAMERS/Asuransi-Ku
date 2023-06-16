<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asuransi-Ku</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  
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

  <section id="home">
    <div class="banner">
      <h1>Selamat Datang di Asuransi-Ku</h1>
      <p>Memberikan perlindungan terbaik untuk masa depan Anda</p>
      <a href="https://www.ojk.go.id/id/kanal/iknb/pages/asuransi.aspx" class="btn">Pelajari Lebih Lanjut</a>
    </div>

    <div class="features">
      <div class="feature-item">
        <img src="{{ asset('produk.png') }}" alt="Icon 1">
        <h2>Produk Terpercaya</h2>
        <p>Kami menawarkan berbagai produk asuransi terpercaya dan sesuai kebutuhan Anda.</p>
      </div>
      <div class="feature-item">
        <img src="{{ asset('pelayanan.png') }}" alt="Icon 2">
        <h2>Pelayanan 24/7</h2>
        <p>Kami siap membantu Anda kapan pun Anda membutuhkan bantuan.</p>
      </div>
      <div class="feature-item">
        <img src="{{ asset('claim.png') }}" alt="Icon 3">
        <h2>Klaim Mudah</h2>
        <p>Kami memproses klaim dengan cepat dan mudah agar Anda mendapatkan manfaat asuransi sesuai janji.</p>
      </div>
    </div>
  </section>

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