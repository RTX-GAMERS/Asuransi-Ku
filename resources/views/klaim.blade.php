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
      <h1>Klaim Asuransi</h1>
      <p>Laporkan klaim Anda dan dapatkan bantuan segera</p>
    </div>

    <div class="claim-process">
      <h2>Proses Klaim Asuransi</h2>
      <div class="step">
        <img src="{{ asset('step1.png') }}" alt="Step 1" height="100px" width="100px">
        <h3>1. Laporkan Klaim</h3>
        <p>Isi formulir klaim secara online atau hubungi tim kami untuk melaporkan klaim Anda.</p>
      </div>
      <div class="step">
        <img src="{{ asset('step2.png') }}" alt="Step 2" height="100px" width="100px">
        <h3>2. Verifikasi Dokumen</h3>
        <p>Kirimkan dokumen-dokumen yang diperlukan untuk verifikasi klaim Anda.</p>
      </div>
      <div class="step">
        <img src="{{ asset('step3.png') }}" alt="Step 3" height="100px" width="100px">
        <h3>3. Peninjauan Klaim</h3>
        <p>Tim kami akan melakukan peninjauan klaim dan memprosesnya sesuai dengan ketentuan polis.</p>
      </div>
      <div class="step">
        <img src="{{ asset('step4.png') }}" alt="Step 4" height="100px" width="100px">
        <h3>4. Pembayaran Klaim</h3>
        <p>Jika klaim Anda disetujui, kami akan melakukan pembayaran sesuai dengan ketentuan polis.</p>
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