<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="token_value">
  <title>Asuransi-Ku</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
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
  
    <div class="aduan">
      <h1>Aduan Barang Untuk Klaim Asuransi</h1>
      <p>Proses di mana konsumen mengajukan keluhan atau permintaan ganti rugi terhadap barang yang rusak, hilang, atau mengalami kerusakan selama periode yang ditanggung oleh polis asuransi. Jika Anda memiliki daftar pengaduan barang untuk klaim asuransi, silakan mengisi form di bawah ini.</p>
    </div>

    <div class="input-aduan">
        <div class="container-fluid">
            <div class="row align-items-center">
                    <div class="form-input-aduan m-auto ps-5">
                        <h3 class="fw-bold mb-4 mt-4">Form Input Daftar Pengaduan Asuransi</h3>
                        <form action="/simpan_data" method="POST">
                        @csrf
                          
                        <!-- Nama input -->
                        <div class="form-outline mb-4">
                          <label class="form-label fw-bold" for="nama">Nama</label>
                          <span class="required">*</span>
                          <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                        </div>

                        <!-- Alamat -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="detail_produk">Alamat</label>
                          <span class="required">*</span>
                          <textarea style="height: 200px" id="alamat" class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                        </div>

                        <!-- Invoice input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="invoice">Invoice</label>
                          <span class="required">*</span>
                          <input type="text" id="invoice" class="form-control" name="invoice" placeholder="Masukkan Invoice" required>
                        </div>

                        <!-- No. Telepon input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="no_telp">Nomor Telepon</label>
                          <span class="required">*</span>
                          <input type="text" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telepon" required>
                        </div>

                        <!-- No. Resi input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="no_resi">Nomor Resi</label>
                          <span class="required">*</span>
                          <input type="text" id="no_resi" class="form-control" name="no_resi" placeholder="Masukkan Nomor Resi" required>
                        </div>

                        <!-- Harga input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="harga">Harga Barang</label>
                          <span class="required">*</span>
                          <input type="text" id="harga" class="form-control" name="harga" placeholder="Masukkan Harga Barang" required>
                        </div>

                        <!-- Detail Produk input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="detail_produk">Detail Produk</label>
                          <span class="required">*</span>
                          <textarea style="height: 200px" id="detail_produk" class="form-control" name="detail_produk" placeholder="Masukkan Detail Produk" required></textarea>
                        </div>

                        <!-- Kurir input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="kurir">Kurir</label>
                          <span class="required">*</span>
                          <select id="kurir" class="form-select" name="kurir" required>
                            <option value="" disabled selected>Pilih Kurir</option>
                            <option value="JNE">JNE</option>
                            <option value="JNE OKE">JNE OKE</option>
                            <option value="JNT">JNT</option>
                            <option value="Sicepat">Sicepat</option>
                            <option value="Wahana">Wahana</option>
                            <option value="Ninja Xpress">Ninja Xpress</option>
                            <option value="Anteraja">Anteraja</option>
                            <option value="POS Indonesia">POS Indonesia</option>
                            <option value="TIKI">TIKI</option>
                            <option value="Lion Parcel">Lion Parcel</option>
                          </select>
                        </div>

                        <!-- Metode Pembayaran input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="metode_bayar">Metode Pembayaran</label>
                          <span class="required">*</span>
                          <select id="metode_bayar" class="form-select" name="metode_bayar" required>
                            <option value="" disabled selected>Pilih Metode Pembayaran</option>
                            <option value="BCA Virtual Account">BCA Virtual Account</option>
                            <option value="BRI Virtual Account">BRI Virtual Account</option>
                            <option value="BNI Virtual Account">BNI Virtual Account</option>
                            <option value="Mandiri Virtual Account">Mandiri Virtual Account</option>
                            <option value="Gopay">Gopay</option>
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="OVO">OVO</option>
                            <option value="DANA">DANA</option>
                            <option value="LinkAja">LinkAja</option>
                          </select>
                        </div>

                        <!-- Tanggal Pesan input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="tanggal_pesan">Tanggal Pesan</label>
                          <span class="required">*</span>
                          <input type="datetime-local" id="tanggal_pesan" class="form-control" name="tanggal_pesan" required>
                        </div>

                        <!-- Tanggal Bayar input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="tanggal_bayar">Tanggal Bayar</label>
                          <span class="required">*</span>
                          <input type="datetime-local" id="tanggal_bayar" class="form-control" name="tanggal_bayar" required>
                        </div>

                        <!-- Status Barang input -->
                        <input type="hidden" id="status_barang" name="status_barang" value="SAMPAI">

                        <!-- Biaya Asuransi input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="biaya_asuransi">Biaya Asuransi</label>
                          <span class="required">*</span>
                          <input type="text" id="biaya_asuransi" class="form-control" name="biaya_asuransi" placeholder="Masukkan Biaya Asuransi" required>
                        </div>

                        <!-- Jenis Pengaduan input -->
                        <div class="mb-3 position-relative">
                          <label class="form-label fw-bold" for="jenis_pengaduan">Jenis Pengaduan</label>
                          <span class="required">*</span>
                          <textarea style="height: 200px" id="jenis_pengaduan" class="form-control" name="jenis_pengaduan" placeholder="Masukkan Jenis Pengaduan" required></textarea>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" name="kirim" class="btn btn-success" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Kirim">
                            <p class="small fw-bold mt-2 pt-1 mb-0">Lihat daftar pengaduan barang <a href="{{ url('pengaduan_barang') }}" class="link-danger">Daftar Pengaduan Barang</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>