# KampusKu

**KampusKu** adalah sistem manajemen kampus berbasis web yang dibangun menggunakan PHP Native. Sistem ini dirancang untuk membantu dalam pengelolaan data kampus, termasuk data dosen, mahasiswa, mata kuliah, nilai, dan kelas.

## Fitur Utama

1. **Manajemen Data Dosen**  
   - Tambah, ubah, hapus, dan lihat data dosen.
2. **Manajemen Data Mahasiswa**  
   - Tambah, ubah, hapus, dan lihat data mahasiswa.
3. **Manajemen Data Mata Kuliah**  
   - Tambah, ubah, hapus, dan lihat data mata kuliah.
4. **Manajemen Data Nilai**  
   - Input nilai mahasiswa berdasarkan mata kuliah.
5. **Manajemen Data Kelas**  
   - Kelola kelas dan daftar mahasiswa dalam kelas tertentu.

## Teknologi yang Digunakan

- **Bahasa Pemrograman:** PHP Native
- **Database:** MySQL/MariaDB
- **Frontend:** HTML, CSS, JavaScript
- **Framework CSS:** Bootstrap (opsional, jika digunakan)
- **Server:** Apache (disarankan menggunakan XAMPP untuk local development)

## Instalasi

1. **Clone atau Download Repository**  
   ```bash
   git clone https://github.com/wahyu2021/kampusku.git
   ```

2. **Pindahkan ke Direktori Server**  
   Pindahkan folder proyek ke direktori server lokal Anda, misalnya:  
   ```
   C:/xampp/htdocs/kampusku
   ```

3. **Buat Database**  
   - Buka phpMyAdmin.
   - Buat database dengan nama `kampusku`.
   - Import file database yang ada di folder `database/kampusku.sql` ke database tersebut.

4. **Konfigurasi Database**  
   - Buka file `config/database.php` atau file konfigurasi yang digunakan.
   - Pastikan pengaturan database seperti berikut:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $dbname = 'kampusku';
     ```

5. **Jalankan Aplikasi**  
   - Akses aplikasi melalui browser dengan URL:  
     ```
     http://localhost/kampusku
     ```

## Struktur Direktori

```
kampusku/
├── config/           # File konfigurasi aplikasi
├── database/         # File SQL untuk database
├── assets/           # Folder untuk file CSS, JavaScript, dan gambar
├── views/            # File tampilan (HTML)
├── controllers/      # Logika aplikasi
├── models/           # Interaksi dengan database
├── index.php         # Beranda aplikasi
└── README.md         # Dokumentasi proyek
```

## Kontribusi

Kami sangat menghargai kontribusi dari siapa saja. Jika Anda ingin berkontribusi, silakan fork repository ini dan ajukan pull request.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

**Dibuat oleh:** Wahyu Wahid Nugroho  
D4 Manajemen Informatika - Politeknik Negeri Sriwijaya
