Kelompok 8 (EAI SI-44-05)
Anggota Kelompok:
1.	Michael Crhistensen Bonar Kasparov	(1202194130) - Project Manager
2.	Julio Thirty Nasrullah Akbar 		(1202202310) - Database Administrator
3.	Muhammad Naufal 			(1202200367) - Business System Analyst
4.	Muhammad Luthfi 			(1202184331) - Back-End Developer
5.	Alshifa Firas Al-Ghaffar Nugraha 	(1202194273) - Front-End Developer

Sentiment analysis

HTTP Method	: GET
URL		: https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan 
Description	: API untuk mengambil seluruh data daftar pengaduan barang dari data API pengaduan barang

Request Form Data:
| Key  | Description|
|-------|------|
| - | - |
| - | - |

JSON Parameters: 
```json
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_transaksi": 111,
                "nama_pelanggan": "Ilham Syarief Roem Mohamad",
                "jenis_pengaduan": "Barangnya Pecah",
                "tanggal_pesanan": "2023-02-03",
                "created_at": "2023-06-09T11:54:41.000000Z",
                "updated_at": "2023-06-09T11:54:41.000000Z"
            },
            {
                "id": 2,
                "id_transaksi": 222,
                "nama_pelanggan": "Alif Fajar",
                "jenis_pengaduan": "Barangnya Hilang",
                "tanggal_pesanan": "2023-02-05",
                "created_at": "2023-06-09T11:55:00.000000Z",
                "updated_at": "2023-06-09T11:55:00.000000Z"
            },
            {
                "id": 3,
                "id_transaksi": 333,
                "nama_pelanggan": "Nadra Meisha Putri",
                "jenis_pengaduan": "Barangnya tidak sesuai",
                "tanggal_pesanan": "2023-03-05",
                "created_at": "2023-06-09T11:55:26.000000Z",
                "updated_at": "2023-06-09T11:55:26.000000Z"
            },
            {
                "id": 4,
                "id_transaksi": 444,
                "nama_pelanggan": "Putri Alivona",
                "jenis_pengaduan": "Barangnya tidak sesuai",
                "tanggal_pesanan": "2023-03-06",
                "created_at": "2023-06-09T11:55:48.000000Z",
                "updated_at": "2023-06-09T11:55:48.000000Z"
            },
            {
                "id": 5,
                "id_transaksi": 555,
                "nama_pelanggan": "Vanya Syalmah",
                "jenis_pengaduan": "Barangnya tidak sesuai",
                "tanggal_pesanan": "2023-03-07",
                "created_at": "2023-06-09T11:56:14.000000Z",
                "updated_at": "2023-06-09T11:56:14.000000Z"
            }
        ],
        "first_page_url": "https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan",
        "per_page": 10,
        "prev_page_url": null,
        "to": 5,
        "total": 5
    }
}


HTTP Method	: POST
URL		: https://apipengaduanbarangkelompok5.000webhostapp.com/api/ppengaduan?id_transaksi&nama_pelanggan&jenis_pengaduan&tanggal_pesanan&created_at&updated_at 
Description	: API yang digunakan untuk melakukan post data pengaduan barang 

Request Form Data:
| Key              | Description                                                 |
|------------------|-------------------------------------------------------------|
| id_transaksi     | ID dari pengguna yang melakukan transaksi                    |
| nama_pelanggan   | Nama pelanggan yang melakukan transaksi                      |
| jenis_pengaduan  | Jenis pengaduan yang dialami oleh pengguna terkait dengan barang |
| tanggal_pesanan  | Tanggal dibuatnya pesanan barang                             |
| created_at       | Tanggal data dibuat                                          |
| updated_at       | Tanggal data dilakukan pembaruan                             |

JSON Parameters: 
{
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "id_transaksi": 111,
                "nama_pelanggan": "Ilham Syarief Roem Mohamad",
                "jenis_pengaduan": "Barangnya Pecah",
                "tanggal_pesanan": "2023-02-03",
                "created_at": "2023-06-09T11:54:41.000000Z",
                "updated_at": "2023-06-09T11:54:41.000000Z"
            },
            {
                "id": 2,
                "id_transaksi": 222,
                "nama_pelanggan": "Alif Fajar",
                "jenis_pengaduan": "Barangnya Hilang",
                "tanggal_pesanan": "2023-02-05",
                "created_at": "2023-06-09T11:55:00.000000Z",
                "updated_at": "2023-06-09T11:55:00.000000Z"
            },
            {
                "id": 3,
                "id_transaksi": 333,
                "nama_pelanggan": "Nadra Meisha Putri",
                "jenis_pengaduan": "Barangnya tidak sesuai",
                "tanggal_pesanan": "2023-03-05",
                "created_at": "2023-06-09T11:55:26.000000Z",
                "updated_at": "2023-06-09T11:55:26.000000Z"
            },
            {
                "id": 4,
                "id_transaksi": 444,
                "nama_pelanggan": "Putri Alivona",
                "jenis_pengaduan": "Barangnya tidak sesuai",
                "tanggal_pesanan": "2023-03-06",
                "created_at": "2023-06-09T11:55:48.000000Z",
                "updated_at": "2023-06-09T11:55:48.000000Z"
            },
            {
                "id": 5,
                "id_transaksi": 555,
                "nama_pelanggan": "Vanya Syalmah",
                "jenis_pengaduan": "Barangnya tidak sesuai",
                "tanggal_pesanan": "2023-03-07",
                "created_at": "2023-06-09T11:56:14.000000Z",
                "updated_at": "2023-06-09T11:56:14.000000Z"
            }
}

HTTP Method	: GET
URL		: https://asuransi-ku05.000webhostapp.com/api/asuransi/ 
Description	: API untuk mengambil semua data asuransi

Request Form Data: 
| Key  | Description|
|-------|------|
| - | - |
| - | - |

JSON Parameters: 
{
    "success": true,
    "message": "Data Asuransi Berhasil Diambil",
    "data": [
        {
            "id_user": 1,
            "nama": "Doni Salmanan",
            "alamat": "BANDUNG, DAYUEHKOLOT KOS SEJAHTERA No 24, 45211",
            "invoice": "INV/20221106/MPL/2798158090",
            "no_telp": "62821321112321",
            "no_resi": "JT321321331",
            "harga": 499000,
            "detail_produk": "Polo Shirt Giordono Original Size S",
            "kurir": "JNT",
            "metode_bayar": "BCA Virtual Account",
            "tanggal_pesan": "2023-03-08 02:30:13",
            "tanggal_bayar": "2023-03-09 15:00:42",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 10978,
            "jenis_pengaduan": "Barang rusak"
        },
        {
            "id_user": 2,
            "nama": "Asep",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-04-06 23:37:09",
            "tanggal_bayar": "2023-04-07 00:42:27",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barang rusak"
        },
        {
            "id_user": 6,
            "nama": "Bayu",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-05-06 23:37:09",
            "tanggal_bayar": "2023-05-07 00:42:27",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barang pecah"
        },
        {
            "id_user": 8,
            "nama": "Bayu Reza",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-02-03 23:37:09",
            "tanggal_bayar": "2023-02-03 00:32:00",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barang hancur berantakan"
        },
        {
            "id_user": 9,
            "nama": "Ilham Syarief Roem Mohamad",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-02-03 23:37:09",
            "tanggal_bayar": "2023-02-03 00:32:00",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barangnya pecah"
        },
        {
            "id_user": 10,
            "nama": "Alif Fajar",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-02-05 23:37:09",
            "tanggal_bayar": "2023-02-07 00:42:27",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barangnya hilang"
        },
        {
            "id_user": 11,
            "nama": "Nadra Meisha Putri",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-03-05 23:37:09",
            "tanggal_bayar": "2023-03-07 00:42:27",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barangnya tidak sesuai"
        },
        {
            "id_user": 13,
            "nama": "Putri Alivona",
            "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
            "invoice": "INV/212331106/MPL/234132133",
            "no_telp": "62932013213433",
            "no_resi": "JN2312131232",
            "harga": 130000,
            "detail_produk": "Bracket Monitor North Bayou NB F80",
            "kurir": "JNE",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-03-06 23:37:09",
            "tanggal_bayar": "2023-03-07 00:42:27",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 2321,
            "jenis_pengaduan": "Barangnya tidak sesuai"
        },
        {
            "id_user": 23,
            "nama": "Michael Christian",
            "alamat": "Jalan Taman Kopo Indah 1 Blok M-68",
            "invoice": "INV/20221106/MPL/2798158092",
            "no_telp": "082113476708",
            "no_resi": "JT321321335",
            "harga": 15000,
            "detail_produk": "Asus ROG Strix",
            "kurir": "Anteraja",
            "metode_bayar": "BCA Virtual Account",
            "tanggal_pesan": "2023-06-11 20:33:00",
            "tanggal_bayar": "2023-06-12 20:33:00",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 20000,
            "jenis_pengaduan": "Barang Hancur Gak Karuan :("
        },
        {
            "id_user": 24,
            "nama": "Naufal",
            "alamat": "Jalan Sukabirus 123",
            "invoice": "INV/20221106/MPL/2798158093",
            "no_telp": "082113476704",
            "no_resi": "JT321321334",
            "harga": 15000,
            "detail_produk": "Acer Predator",
            "kurir": "Ninja Xpress",
            "metode_bayar": "BRI Virtual Account",
            "tanggal_pesan": "2023-06-11 21:32:00",
            "tanggal_bayar": "2023-06-12 21:32:00",
            "status_barang": "SAMPAI",
            "biaya_asuransi": 10000,
            "jenis_pengaduan": "Layar Pecah"
        }
    ]
}

HTTP Method	: POST
URL		: https://asuransi-ku05.000webhostapp.com/api/asuransi/?nama=&alamat=&invoice=&no_telp=&no_resi=&harga=&detail_produk=&kurir=&metode_bayar=&tanggal_pesan=&tanggal_bayar=&status_barang=&biaya_asuransi=&jenis_pengaduan 
Description	: API yang digunakan untuk melakukan post data asuransi

Request Form Data:
| Key             | Description                                                 |
|-----------------|-------------------------------------------------------------|
| nama            | Nama pengguna yang membuat klaim asuransi                    |
| alamat          | Alamat pengguna yang membuat klaim asuransi                  |
| invoice         | Nomor tagihan barang yang dibeli pengguna                   |
| no_telp         | Nomor telepon pengguna yang membuat klaim asuransi           |
| no_resi         | Nomor yang diberikan oleh jasa ekspedisi atas paket barang yang dikirimkan |
| harga           | Harga barang yang dibeli oleh pengguna                       |
| detail_produk   | Detail barang yang dibeli oleh pengguna                      |
| kurir           | Jasa ekspedisi yang mengirimkan barang ke pengguna           |
| metode_bayar    | Metode yang dipilih pengguna untuk melakukan pembayaran      |
| tanggal_pesan   | Tanggal pesanan dibuat                                      |
| tanggal_bayar   | Tanggal pesanan dibayar                                     |
| status_barang   | Status barang yang dibeli oleh pengguna                      |
| biaya_asuransi  | Biaya yang perlu dibayarkan seputar polis asuransi           |
| jenis_pengaduan | Jenis pengaduan yang dialami oleh pengguna terkait dengan barang |

JSON Parameters: 
{
    "success": true,
    "message": "Data Asuransi Berhasil Dimasukkan",
    "data": {
        "id_user": 24,
        "nama": "Naufal",
        "alamat": "Jalan Sukabirus 123",
        "invoice": "INV/20221106/MPL/2798158093",
        "no_telp": "082113476704",
        "no_resi": "JT321321334",
        "harga": 15000,
        "detail_produk": "Acer Predator",
        "kurir": "Ninja Xpress",
        "metode_bayar": "BRI Virtual Account",
        "tanggal_pesan": "2023-06-11 21:32:00",
        "tanggal_bayar": "2023-06-12 21:32:00",
        "status_barang": "SAMPAI",
        "biaya_asuransi": 10000,
        "jenis_pengaduan": "Layar Pecah"
    }
}

HTTP Method	: PUT
URL		: https://asuransi-ku05.000webhostapp.com/api/asuransi/3?nama=&alamat=&invoice=&no_telp=&no_resi=&harga=&detail_produk=&kurir=&metode_bayar=&tanggal_pesan=&tanggal_bayar=&status_barang=&biaya_asuransi=&jenis_pengaduan 
Description	: API digunakan untuk mengubah salah satu data pada data asuransi berdasarkan id dengan menggunakan semua key

Request Form Data:
| Key            | Description                                                 |
|----------------|-------------------------------------------------------------|
| nama           | Nama pengguna yang membuat klaim asuransi                    |
| alamat         | Alamat pengguna yang membuat klaim asuransi                  |
| invoice        | Nomor tagihan barang yang dibeli pengguna                   |
| no_telp        | Nomor telepon pengguna yang membuat klaim asuransi           |
| no_resi        | Nomor yang diberikan oleh jasa ekspedisi atas paket barang yang dikirimkan |
| harga          | Harga barang yang dibeli oleh pengguna                       |
| detail_produk  | Detail barang yang dibeli oleh pengguna                      |
| kurir          | Jasa ekspedisi yang mengirimkan barang ke pengguna           |
| metode_bayar   | Metode yang dipilih pengguna untuk melakukan pembayaran      |
| tanggal_pesan  | Tanggal pesanan dibuat                                      |
| tanggal_bayar  | Tanggal pesanan dibayar                                     |
| status_barang  | Status barang yang dibeli oleh pengguna                      |
| biaya_asuransi | Biaya yang perlu dibayarkan seputar polis asuransi           |
| jenis_pengaduan | Jenis pengaduan yang dialami oleh pengguna terkait dengan barang |

JSON Parameters: 
{
    "success": true,
    "message": "Data Asuransi Berhasil Diubah",
    "data": {
        "id_user": 6,
        "nama": "Vanya Syalmah",
        "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
        "invoice": "INV/212331106/MPL/234132133",
        "no_telp": "62932013213433",
        "no_resi": "JN2312131232",
        "harga": "130000",
        "detail_produk": "Bracket Monitor North Bayou NB F80",
        "kurir": "JNE",
        "metode_bayar": "BRI Virtual Account",
        "tanggal_pesan": "2023-03-07 23:37:09",
        "tanggal_bayar": "2023-11-07 00:42:27",
        "status_barang": "SAMPAI",
        "biaya_asuransi": "2321",
        "jenis_pengaduan": "Barangnya tidak sesuai"
    }    
}

HTTP Method	: PATCH
URL		: https://asuransi-ku05.000webhostapp.com/api/asuransi/{id}?nama=&no_resi=&harga=&detail_produk=&biaya_asuransi=&jenis_pengaduan= 
Description	: API digunakan untuk mengubah secara spesifik salah satu data pada data asuransi berdasarkan id hanya menggunakan beberapa key 

Request Form Data:
| Key             | Description                                                 |
|-----------------|-------------------------------------------------------------|
| nama            | Nama pengguna yang membuat klaim asuransi                    |
| no_resi         | Nomor yang diberikan oleh jasa ekspedisi atas paket barang yang dikirimkan |
| harga           | Harga barang yang dibeli oleh pengguna                       |
| detail_produk   | Detail barang yang dibeli oleh pengguna                      |
| biaya_asuransi  | Biaya yang perlu dibayarkan seputar polis asuransi           |
| jenis_pengaduan | Jenis pengaduan yang dialami oleh pengguna terkait dengan barang |

JSON Parameters: 
{
    "success": true,
    "message": "Data Asuransi Berhasil Diedit",
    "data": {
        "id_user": 2,
        "nama": "Fadil Jaidi",
        "alamat": "CIREBON, TUPPAREV JALAN SUKARNO No 51,42122",
        "invoice": "INV/212331106/MPL/234132133",
        "no_telp": "62932013213433",
        "no_resi": "JT5305143974",
        "harga": "4635000",
        "detail_produk": "Xiaomi Mi 12 Lite 5G 8/256GB Official Waranty",
        "kurir": "JNE",
        "metode_bayar": "BRI Virtual Account",
        "tanggal_pesan": "2023-04-06 23:37:09",
        "tanggal_bayar": "2023-04-07 00:42:27",
        "status_barang": "SAMPAI",
        "biaya_asuransi": "65210",
        "jenis_pengaduan": "Barangnya cacat produksi"
    }    
}

HTTP Method	: DELETE
URL		: https://asuransi-ku05.000webhostapp.com/api/asuransi/{id} 
Description	: API digunakan untuk menghapus data berdasarkan id dari data asuransi

Request Form Data:
| Key  | Description|
|-------|------|
| - | - |
| - | - |

JSON Parameters: 
{
    "success": true,
    "message": "Data Asuransi Berhasil Dihapus"
}

