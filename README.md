# Rei Cosrent

Website penyewaan kostum cosplay dengan katalog kostum, pengecekan ketersediaan, kalender pemesanan, formulir penyewaan, pembayaran, ulasan, dan panel administrasi.

## Teknologi

- PHP `^8.2`
- Laravel `^12.0`
- Laravel Vite Plugin
- Vite `^7.0.7`
- Tailwind CSS `^4.0.0`
- Bootstrap 5 dan Bootstrap Icons melalui layout Blade
- PHPUnit untuk pengujian
- RajaOngkir untuk estimasi ongkos kirim

## Fitur Utama

### Pengunjung dan pengguna

- Melihat katalog kostum aktif.
- Mencari dan memfilter katalog berdasarkan kategori.
- Mengurutkan katalog berdasarkan nama.
- Melihat detail kostum dan ketersediaannya.
- Melihat kalender tanggal pemesanan.
- Mengisi formulir penyewaan kostum.
- Mengelola profil pengguna.
- Melihat pesanan, pengembalian, dan denda.
- Mengunggah bukti pembayaran.
- Memberikan ulasan dan gambar ulasan.
- Login, registrasi, dan reset password.

### Administrator

- Dashboard statistik.
- Mengelola data katalog.
- Mengelola data kostum dan gambar kostum.
- Mengelola tanggal pemesanan.
- Mengelola pesanan, pembayaran, pengembalian, dan denda.
- Mengelola data pengguna.
- Mengelola aturan penyewaan.
- Mengelola ulasan dan membalas ulasan.
- Mengelola profil pengurus, foto, dan data pembayaran.

## Persyaratan Lokal

Pastikan perangkat sudah memiliki:

- PHP 8.2 atau lebih baru.
- Composer.
- Node.js dan npm.
- MySQL/MariaDB atau SQLite.
- Web server lokal seperti Laragon untuk Windows.

## Instalasi

### 1. Masuk ke direktori proyek

```powershell
cd C:\laragon\www\rc3
```

### 2. Instal dependensi PHP

```powershell
composer install
```

### 3. Siapkan environment

```powershell
Copy-Item .env.example .env
php artisan key:generate
```

Pada Command Prompt, gunakan:

```bat
copy .env.example .env
php artisan key:generate
```

### 4. Konfigurasi database

Konfigurasi default menggunakan SQLite. Buat file database jika belum tersedia:

```powershell
New-Item database\database.sqlite -ItemType File
```

Kemudian jalankan migrasi:

```powershell
php artisan migrate
```

Untuk MySQL/MariaDB, ubah nilai berikut pada `.env` sesuai database lokal:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rc3
DB_USERNAME=root
DB_PASSWORD=
```

Lalu jalankan:

```powershell
php artisan migrate
```

### 5. Instal dependensi frontend

```powershell
npm install
```

### 6. Siapkan storage publik

```powershell
php artisan storage:link
```

### 7. Isi data awal

Jika seeder tersedia dan ingin menggunakannya:

```powershell
php artisan db:seed
```

Atau jalankan migrasi sekaligus seeder:

```powershell
php artisan migrate --seed
```

## Menjalankan Aplikasi

### Mode pengembangan terpisah

Terminal pertama:

```powershell
php artisan serve
```

Terminal kedua:

```powershell
npm run dev
```

Buka alamat berikut di browser:

```text
http://127.0.0.1:8000
```

Jika menggunakan Laragon, proyek dapat diakses melalui virtual host Laragon sesuai konfigurasi lokal.

### Mode pengembangan terpadu

Composer menyediakan script untuk menjalankan server Laravel, queue listener, log viewer, dan Vite secara bersamaan:

```powershell
composer run dev
```

### Build frontend untuk produksi

```powershell
npm run build
```

## Konfigurasi Tambahan

### RajaOngkir

Atur konfigurasi berikut pada `.env` untuk fitur ongkos kirim:

```dotenv
RAJAONGKIR_API_KEY=your_actual_api_key_here
RAJAONGKIR_BASE_URL=https://api.rajaongkir.com/starter
RAJAONGKIR_COURIERS=jne,pos,tiki
RAJAONGKIR_PACKAGE_WEIGHT_GRAMS=1000
```

Jangan commit API key atau kredensial lain ke repository.

### Mail

Konfigurasi default mailer pada `.env.example` menggunakan `log`, sehingga email ditulis ke log aplikasi. Sesuaikan konfigurasi SMTP jika aplikasi perlu mengirim email sungguhan.

## Pengujian

Jalankan seluruh test:

```powershell
php artisan test
```

Atau gunakan script Composer:

```powershell
composer run test
```

Test tertentu dapat dijalankan menggunakan filter PHPUnit:

```powershell
php artisan test --filter NamaTest
```

## Struktur Direktori Penting

```text
app/
  Http/Controllers/    Controller halaman publik, pengguna, admin, pembayaran, dan API proxy
  Models/              Model Eloquent aplikasi
  Services/            Service eksternal seperti RajaOngkir
  Helpers/             Helper aplikasi

database/
  migrations/          Struktur tabel database
  seeders/             Data awal aplikasi

resources/views/       Template Blade publik, pengguna, admin, dan layout
routes/web.php         Route web aplikasi
public/assets/         Asset gambar dan file publik
storage/app/public/    File upload yang diakses melalui storage link
tests/                 Feature test dan unit test
```

## Route Utama

- `/home` - halaman utama dan katalog.
- `/katalog_kostum` - daftar/detail kostum berdasarkan katalog.
- `/tanggal-pemesanan` - kalender pemesanan.
- `/login` - login pengguna dan administrator.
- `/register` - registrasi pengguna.
- `/user/profil` - profil pengguna.
- `/pesanan-saya` - daftar pesanan pengguna.
- `/admin` - dashboard administrator.
- `/admin/data-katalog` - pengelolaan katalog.
- `/admin/data-kostum` - pengelolaan kostum.
- `/admin/data-pesanan` - pengelolaan pesanan.

Daftar route lengkap dapat dilihat dengan:

```powershell
php artisan route:list
```

## Perintah Pemeliharaan

Membersihkan cache aplikasi:

```powershell
php artisan optimize:clear
```

Mengompilasi view Blade:

```powershell
php artisan view:cache
```

Memeriksa status migrasi:

```powershell
php artisan migrate:status
```

## Catatan Keamanan

- Jangan commit file `.env`.
- Jangan menyimpan API key, password, atau OAuth secret di source code.
- Pastikan `APP_DEBUG=false` pada deployment produksi.
- Gunakan HTTPS pada deployment publik.
- Batasi akses halaman administrator melalui autentikasi dan session aplikasi.
