# LAPORAN PERTEMUAN 11 PEMROGRAMAN WEB
## SISTEM INFORMASI MANAJEMEN LAUNDRY (LAUNDRYCRAFT)

---

**Nama** : Raihan Rasyid Ramadhan
**NRP** : 5025241224
**Mata Kuliah**: Pemrograman Web

---

## PERANCANGAN SISTEM & DATABASE

### 2.1 Teknologi yang Digunakan
* **Bahasa Pemrograman**: PHP (Native)
* **Database**: MySQL / MariaDB (via XAMPP)
* **Frontend Framework**: Bootstrap 5 (Responsive Design)


### 2.2 Skema Database
Web ini menggunakan database bernama `LaundryCraft` dengan 3 tabel utama yang saling berelasi:

1. **Tabel `pelanggan`** (Menyimpan data identitas)
   - `id_pelanggan` (INT, PK, Auto Increment)
   - `nama` (VARCHAR)
   - `alamat` (TEXT)
   - `no_hp` (VARCHAR)

2. **Tabel `layanan`** (Menyimpan jenis paket dan harga)
   - `id_layanan` (INT, PK, Auto Increment)
   - `nama_layanan` (VARCHAR)
   - `harga_per_kg` (DECIMAL)

3. **Tabel `transaksi`** (Menyimpan riwayat pesanan)
   - `id_transaksi` (INT, PK, Auto Increment)
   - `id_pelanggan` (FK -> pelanggan)
   - `id_layanan` (FK -> layanan)
   - `berat`, `total_harga`, `status`
   - `tanggal_masuk`, `tanggal_selesai`

## BAB 3: IMPLEMENTASI KODE

### Struktur Folder 
Aplikasi ini menerapkan pemisahan struktur folder untuk kerapian kode dan keamanan:

```text
htdocs/LaundryCraft/
├── config.php            # Konfigurasi Database
├── public/               # Folder Tampilan (View)
│   ├── index.php         # Dashboard Utama
│   ├── transaksi.php     # Halaman Transaksi
│   ├── pelanggan.php     # Halaman Pelanggan
│   └── packages.php      # Halaman Layanan
└── controller/           # Folder Logika (Process)
    ├── tambah_transaksi.php
    ├── status.php
    ├── hapus_pelanggan.php
    └── ... (file logika lainnya)
