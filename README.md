# Pemrograman Web Lanjut
Repository Praktikum Mata Kuliah Pemrograman Web Lanjut

---

## 👤 Data Diri

| Field | Keterangan |
|-------|------------|
| **Nama** | Ghazwan Ababil |
| **NIM** | 244107020151 |
| **Kelas** | TI-2F |
| **Mata Kuliah** | Pemrograman Web Lanjut |
| **Program Studi** | Teknik Informatika |

---

## 📖 Daftar Jobsheet

Setiap jobsheet memiliki dokumentasi lengkap di file `README.md` masing-masing:

- [📄 Dokumentasi Jobsheet 1](jobsheet-1/)
- [📄 Dokumentasi Jobsheet 2](jobsheet-2/)
- [📄 Dokumentasi Jobsheet 3](jobsheet-3/)

---

## 📚 Daftar Praktikum

### Jobsheet 1 - Laravel Installation & Welcome View
Praktikum instalasi Laravel dan modifikasi welcome view
- **Direktori:** [`jobsheet-1/`](jobsheet-1/)
- **Materi:**
  - Instalasi Laravel menggunakan Composer
  - Struktur direktori Laravel
  - Modifikasi welcome view dengan Blade template

### Jobsheet 2 - Routing, Controller, dan Views
Praktikum routing, controller, dan views pada Laravel
- **Direktori:** [`jobsheet-2/praktikum`](jobsheet-2/praktikum)
- **Materi:**
  - **Praktikum 1:** Routing (basic, parameter, optional parameter)
  - **Praktikum 2:** Controller (basic, resource, single action)
  - **Praktikum 3:** Views & Blade templating
  - **Soal Praktikum:** POS Application (Point of Sales)

### Jobsheet 2 - POS Application
Aplikasi Point of Sales sebagai studi kasus
- **Direktori:** [`jobsheet-2/POS/`](jobsheet-2/POS/)
- **Fitur:**
  - Halaman Home
  - Halaman Products (4 kategori)
  - Halaman User Profile
  - Halaman Penjualan/Sales

### Jobsheet 3 - Migrasi, Seeder, dan Database (PWL POS)
Praktikum memanipulasi skema dan data database menggunakan Query Builder & Eloquent ORM di Laravel
- **Direktori:** [`jobsheet-3/`](jobsheet-3/)
- **Materi:**
  - **Praktikum 1:** Persiapan Lingkungan dan ENV `.env`
  - **Praktikum 2:** Pembuatan Migrasi Database (dengan relasi `Foreign Key`)
  - **Praktikum 3:** Popolulasi Seeder Dummy
  - **Praktikum 4:** Eksekusi Database menggunakan `DB Facade`
  - **Praktikum 5:** Manajemen Basis Data melalui `Query Builder`
  - **Praktikum 6:** `Eloquent ORM` (Retrieval & Mutasi Rekaman Data)

---

## 🚀 Cara Menjalankan Project

### Prerequisites
- PHP >= 8.x
- Composer
- Node.js & NPM (optional)

### Langkah Instalasi

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd PemrogramanWebLanjut
   ```

2. **Masuk ke direktori jobsheet yang ingin dijalankan**
   ```bash
   # Untuk jobsheet-1
   cd jobsheet-1
   
   # Untuk jobsheet-2
   cd jobsheet-2/praktikum
   
   # Untuk POS App
   cd jobsheet-2/POS
   
   # Untuk Jobsheet 3 (POS)
   cd jobsheet-3
   ```

3. **Install dependencies**
   ```bash
   composer install
   ```

4. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Jalankan development server**
   ```bash
   php artisan serve
   ```

7. **Akses di browser**
   ```
   http://localhost:8000
   ```

---

## 🛠️ Technology Stack

- **Framework:** Laravel 12.x
- **Language:** PHP 8.x
- **Template Engine:** Blade
- **CSS Framework:** Tailwind CSS
- **Package Manager:** Composer

---

## 📝 Catatan

- Setiap jobsheet merupakan project Laravel terpisah
- Pastikan menjalankan `composer install` pada setiap project

---

**© 2026 - Pemrograman Web Lanjut - Teknik Informatika**
