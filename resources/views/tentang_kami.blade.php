<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Asuransi-Ku</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  
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
      <h1>Tentang Kami</h1>
      <p>Kami adalah perusahaan asuransi terkemuka yang berkomitmen untuk memberikan perlindungan dan keamanan bagi klien kami.</p>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('1.jpg') }}" class="d-block mx-auto hw" alt="Foto 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('2.jpg') }}" class="d-block mx-auto hw" alt="Foto 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('3.jpg') }}" class="d-block mx-auto hw" alt="Foto 3">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('4.jpg') }}" class="d-block mx-auto hw" alt="Foto 4">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('5.jpg') }}" class="d-block mx-auto hw" alt="Foto 5">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>

    <div class="about-us">
      <h2>Siapa Kami?</h2>
      <p>Asuransi-Ku adalah perusahaan asuransi yang berfokus pada penyediaan layanan perlindungan dan keamanan finansial. Kami memiliki tim yang berpengalaman dan profesional yang selalu siap memberikan solusi terbaik untuk kebutuhan asuransi Anda.</p>
      <p>Dengan berbagai produk asuransi yang kami tawarkan, kami berkomitmen untuk memberikan perlindungan yang komprehensif dan pelayanan yang berkualitas kepada klien kami.</p>

      <h2>Visi Kami</h2>
      <p>Visi kami adalah menjadi mitra terpercaya bagi klien dalam melindungi kehidupan dan aset mereka. Kami berusaha untuk menjadi pemimpin dalam industri asuransi dengan memberikan solusi yang inovatif dan tepat guna.</p>

      <h2>Misi Kami</h2>
      <ul>
        <li>Memberikan produk asuransi yang berkualitas dan sesuai dengan kebutuhan klien.</li>
        <li>Memberikan pelayanan pelanggan yang prima dan responsif.</li>
        <li>Mengembangkan hubungan jangka panjang dengan klien dan mitra bisnis kami.</li>
        <li>Melakukan inovasi terus-menerus dalam produk dan layanan kami.</li>
      </ul>
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
      <div class="footer-section links">
       <h3>Tautan Cepat</h3>
      </div>
    </div>
    <div class="footer-bottom">
  <p>Hak Cipta &copy; 2023 Asuransi-Ku. All rights reserved.</p>
</div>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        var carousel = document.querySelector('#carouselExampleIndicators');
        var bsCarousel = new bootstrap.Carousel(carousel, {
            interval: 3000
        });
    </script>
</body>
</html>