# UAS-PWEB-2526G-107
# UAS Pemrograman Web - Sistem Pendataan Buku

### Data Mahasiswa
- **[span_2](start_span)Nama:** Izul Wafa Abdulloh
- **[span_3](start_span)NIM:** 240631100107
- **[span_4](start_span)Judul Aplikasi:** Sistem Pendataan Buku (PustakaDigital)[span_4](end_span)
- **[span_5](start_span)Deskripsi Singkat:** Aplikasi web berbasis PHP dan MySQL untuk mengelola data koleksi buku

---

### Screenshot Aplikasi
<img width="1920" height="1080" alt="Screenshot 2026-06-28 215121" src="https://github.com/user-attachments/assets/7496a304-1f08-4bfe-8957-801d42cbfde5" />
<img width="1920" height="1080" alt="Screenshot 2026-06-28 215104" src="https://github.com/user-attachments/assets/5d337045-f20c-48a4-bd6c-24839885d1bf" />
<img width="1920" height="1080" alt="Screenshot 2026-06-28 215045" src="https://github.com/user-attachments/assets/c76db86f-2d89-4c5b-a4a6-adeaa91b61a2" />
<img width="1920" height="1080" alt="Screenshot 2026-06-28 215031" src="https://github.com/user-attachments/assets/d26d0bae-3f22-4f2a-8970-f48add8b1367" />




---

### Struktur Database
Aplikasi ini menggunakan database relasional MySQL dengan spesifikasi sebagai berikut:

- **Nama Database:** `pendataan_buku`
- **Nama Tabel:** `buku`

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| `id` | INT | Primary Key, Auto Increment |
| `judul` | VARCHAR(255) | Judul lengkap buku |
| `penulis` | VARCHAR(100) | Nama penulis/pengarang |
| `penerbit` | VARCHAR(100) | Perusahaan penerbit buku |
| `tahun_terbit` | INT(4) | Tahun lokasi publikasi buku |
| `isbn` | VARCHAR(20) | Kode standar internasional buku |

- **Nama Database:** `pendataan_buku`
- **Nama Tabel:** `buku`

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| `id` | INT | Primary Key, Auto Increment |
| `judul` | VARCHAR(255) | Judul lengkap buku |
| `penulis` | VARCHAR(100) | Nama penulis/pengarang |
| `penerbit` | VARCHAR(100) | Perusahaan penerbit buku |
| `tahun_terbit` | INT(4) | Tahun publikasi |
| `isbn` | VARCHAR(20) | Kode standar internasional buku |

---

### Cara Menjalankan Aplikasi
[span_8](start_span)Ikuti langkah-langkah berikut untuk menjalankan aplikasi di lingkungan lokal (localhost):[span_8](end_span)

1. **Unduh & Tempatkan Project:**
   Ekstrak atau tempatkan seluruh folder project ini ke dalam direktori `htdocs` server lokal Anda (misalnya jika menggunakan XAMPP: `C:/xampp/htdocs/UAS-PWEB-NIM/`).
2. **Aktifkan Web Server:**
   Buka aplikasi XAMPP Control Panel dan aktifkan modul **Apache** serta **MySQL**.
3. **Import Database:**
   - Akses halaman `http://localhost/phpmyadmin/` melalui browser Anda.
   - Buat database baru dengan nama `pendataan_buku`.
   - Masuk ke database tersebut, pilih menu **Import**, lalu pilih file `database.sql` yang berada di dalam folder project ini.
   - Klik tombol **Go** atau **Import** untuk mengeksekusi struktur tabel dan data awal.
4. **Akses Web Aplikasi:**
   Buka tab baru pada browser dan ketik tautan berikut:
   `http://localhost/UAS-PWEB-NIM/index.php` (ganti `NIM` sesuai dengan nama folder proyek Anda).

---

### Pernyataan Penggunaan GenAI
[span_9](start_span)Sesuai dengan ketentuan pengerjaan proyek, aplikasi web ini dikembangkan secara kolaboratif bersama dengan Perangkat Kecerdasan Artifisial (GenAI) dalam aspek optimalisasi kode program PHP, pengamanan input dari SQL Injection, penyusunan dokumentasi, serta perancangan desain antarmuka pengguna (UI/UX) berbasis CSS eksternal.[span_9](end_span)
