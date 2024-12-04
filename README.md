
# AstraZenith framework
AstraZenith framework adalah sistem manajemen siswa berbasis web sederhana yang dibangun menggunakan framework PHP minimalis buatan sendiri bernama astrazenith. Proyek ini dirancang untuk mengelola data siswa, laporan, dan absensi secara efektif.

## 🚀 Fitur Utama

- **Manajemen Data Siswa**: Tambah, lihat, dan kelola data siswa.
- **Laporan Siswa**: Kelola laporan berdasarkan kelas dan siswa.
- **Absensi Siswa**: Kelola kehadiran siswa.
- **Framework Custom**: Dibangun menggunakan framework PHP minimalis.
- **Responsif**: Desain responsif menggunakan Bootstrap 5.

---

## 🛠️ Teknologi yang Digunakan

- **PHP** (>=7.4)
- **MySQL** untuk database.
- **Bootstrap 5** untuk desain responsif.
- **jQuery** untuk interaktivitas front-end.
- **Composer** untuk pengelolaan dependensi (opsional).
- **PDO** untuk koneksi database.

---

## 📂 Struktur Direktori

```
.
├── app
│   ├── Controllers       # Controller untuk logika aplikasi
│   ├── Models            # Model untuk akses data
│   ├── Views             # View untuk tampilan front-end
├── public
│   ├── index.php         # File utama untuk routing
│   ├── assets            # File statis (CSS, JS, dll.)
├── config
│   └── database.php      # Konfigurasi database
├── storage
│   └── logs              # Log aplikasi
├── vendor                # Dependensi Composer (jika digunakan)
└── README.md             # Dokumentasi proyek
```

---

## 🔧 Instalasi

### **1. Clone Repository**
```bash
git clone https://github.com/username/astrazenith.git
cd astrazenith
```

### **2. Konfigurasi Database**
1. Buat database baru dengan nama `astrazenith`.
2. Import file `database.sql` yang disediakan di proyek ini:
   ```bash
   mysql -u root -p astrazenith < database.sql
   ```

### **3. Konfigurasi Aplikasi**
Edit file konfigurasi database di `config/database.php`:
```php
return [
    'host' => 'localhost',
    'db_name' => 'astrazenith',
    'username' => 'root',
    'password' => '',
];
```

### **4. Jalankan Server**
Jika menggunakan PHP built-in server:
```bash
php -S localhost:8000 -t public
```

---

## 📖 Panduan Penggunaan

### **Endpoint Utama**

| Endpoint              | HTTP Method | Fungsi                           |
|-----------------------|-------------|----------------------------------|
| `/students`           | GET         | Menampilkan daftar siswa         |
| `/students/{id}`      | GET         | Menampilkan detail siswa         |
| `/students/create`    | GET         | Form untuk menambah siswa        |
| `/students/store`     | POST        | Menyimpan data siswa baru        |
| `/reports`            | GET         | Menampilkan laporan siswa        |
| `/attendances`        | GET         | Menampilkan absensi siswa        |

---

## 💻 Demo Tampilan

### Daftar Siswa
<img src="https://via.placeholder.com/800x400?text=Daftar+Siswa" alt="Daftar Siswa">

### Detail Siswa
<img src="https://via.placeholder.com/800x400?text=Detail+Siswa" alt="Detail Siswa">

---

## 🤝 Kontribusi

Kontribusi sangat diterima! Silakan ikuti langkah berikut:

1. Fork proyek ini.
2. Buat branch fitur baru (`git checkout -b fitur-anda`).
3. Commit perubahan Anda (`git commit -m 'Tambahkan fitur X'`).
4. Push branch Anda (`git push origin fitur-anda`).
5. Buat Pull Request.

---

## 🛡️ Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

## 📧 Kontak

Jika Anda memiliki pertanyaan atau saran, hubungi saya di:
- **Email**: mfurqanhakim139@unama.ac.id
- **LinkedIn**: [Profil LinkedIn Anda](https://linkedin.com/in/mfurqanhakim)
- **GitHub**: [Username GitHub Anda](https://github.com/furiscom)

---

## 🌟 Dukungan

Jika Anda menemukan proyek ini bermanfaat, beri bintang di GitHub ⭐!
