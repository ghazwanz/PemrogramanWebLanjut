# Laporan Praktikum - Jobsheet 1
# Pemrograman Web Lanjut

**Nama:** Ghazwan Ababil
**NIM:** 244107020151  
**Kelas:** TI-2F

---

## Daftar Isi
- [Praktikum 1 - Instalasi Laravel](#praktikum-1---instalasi-laravel)
- [Praktikum 2 - Modifikasi Welcome View](#praktikum-2---modifikasi-welcome-view)

---

## Praktikum 1 - Instalasi Laravel

### Tujuan
Menginstal dan membuat project Laravel baru sebagai foundation untuk pengembangan aplikasi web.

### Langkah-Langkah Praktikum

#### 1. Instalasi Laravel

Laravel dapat diinstal menggunakan Composer dengan perintah:

```bash
laravel new jobsheet-1
```

#### 2. Verifikasi Instalasi

Setelah instalasi selesai, masuk ke direktori project:

```bash
cd jobsheet-1
```

#### 3. Menjalankan Development Server

Laravel menyediakan built-in development server yang dapat dijalankan dengan perintah:

```bash
composer run dev
```

**Output:**
```
Starting Laravel development server: http://127.0.0.1:8000
```

Server akan berjalan di `http://localhost:8000` atau `http://127.0.0.1:8000`

#### 4. Struktur Direktori Laravel

Setelah instalasi berhasil, struktur direktori project Laravel adalah sebagai berikut:

```
PWL_2024/
├── app/                    # Logika aplikasi (Models, Controllers, dll)
│   ├── Http/
│   │   └── Controllers/    # Controller files
│   ├── Models/             # Model files
│   └── Providers/          # Service providers
├── bootstrap/              # Framework bootstrap files
├── config/                 # File konfigurasi
├── database/               # Database migrations, factories, seeders
├── public/                 # Entry point & assets publik
│   └── index.php          # Entry point aplikasi
├── resources/              # Views, CSS, JS
│   ├── css/
│   ├── js/
│   └── views/             # Blade templates
├── routes/                 # Route definitions
│   ├── web.php            # Web routes
│   ├── api.php            # API routes
│   └── console.php        # Console commands
├── storage/                # Compiled views, logs, cache
├── tests/                  # Automated tests
├── vendor/                 # Composer dependencies
├── .env                    # Environment configuration
├── artisan                 # Artisan CLI
└── composer.json          # Composer dependencies
```

**Pengamatan:**
- Laravel menggunakan struktur MVC (Model-View-Controller)
- File routing berada di direktori `routes/`
- Controllers berada di `app/Http/Controllers/`
- Views/templates berada di `resources/views/`
- Konfigurasi environment di file `.env`

---

## Praktikum 2 - Modifikasi Welcome View

### Tujuan
Mempelajari cara memodifikasi view pada Laravel dengan mengubah halaman welcome default.

### Langkah-Langkah Praktikum

#### 1. Memahami Route Default

Laravel memiliki route default yang mengarah ke welcome view. Route ini didefinisikan di `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
```

**Penjelasan:**
- `Route::get('/')` - Mendefinisikan route untuk HTTP GET pada path root `/`
- `return view('welcome')` - Memanggil view bernama `welcome.blade.php`
- View file berada di `resources/views/welcome.blade.php`

#### 2. Lokasi File Welcome View

File welcome view berada di:
```
resources/views/welcome.blade.php
```

#### 3. Modifikasi Welcome View

Edit file `resources/views/welcome.blade.php` dan temukan bagian main content. Ganti dengan nama lengkap Anda:

**Kode Awal (Default Laravel):**
```html
<main>
    <div>
        <!-- Default Laravel welcome content -->
    </div>
</main>
```

**Kode Setelah Modifikasi:**
```html
<main class="flex max-w-[335px] text-white w-full flex-col-reverse justify-center lg:max-w-4xl lg:flex-row">
    <h1 class="text-[3rem] leading-tight">Ghazwan Ababil TI-2F</h1>
</main>
```

#### 4. Menjalankan dan Melihat Hasil

1. Pastikan development server berjalan:
   ```bash
   php artisan serve
   ```

2. Buka browser dan akses:
   ```
   http://localhost:8000
   ```

3. Halaman akan menampilkan nama lengkap yang telah diinput: **"Ghazwan Ababil TI-2F"**

---

## Struktur File yang Dimodifikasi

```
resources/
└── views/
    └── welcome.blade.php  ← File yang dimodifikasi
```
---
