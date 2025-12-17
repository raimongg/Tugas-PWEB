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
```

## Tampilan Web

<img width="1919" height="943" alt="image" src="https://github.com/user-attachments/assets/5a576ac0-2c37-40dd-8322-fd30d04f7f6b" />

<img width="1919" height="875" alt="image" src="https://github.com/user-attachments/assets/9ec766cb-390c-4d7a-afbf-c063f9384f51" />

<img width="1919" height="880" alt="image" src="https://github.com/user-attachments/assets/6b80cc1c-175f-4f82-81d9-4055062a9275" />



