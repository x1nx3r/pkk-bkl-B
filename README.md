## Panduan Instalasi

### Persyaratan
- PHP 8.1 atau lebih tinggi
- Composer
- MySQL atau database kompatibel
- Node.js dan NPM (untuk aset frontend)

### Langkah Instalasi

1. Clone repositori
```bash
git clone https://github.com/x1nx3r/pkk-bkl-B.git
cd pkk-bkl-B
```

2. Pasang dependensi
```bash
composer install
npm install
```

3. Konfigurasi environment
```bash
cp .env.example .env
php artisan key:generate
```
Edit file `.env` sesuai konfigurasi lokal (database, mail, dll).

Contoh konfigurasi database di `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=user_database
DB_PASSWORD=password_database
```
Untuk deployment ke server ubah juga environment ini:
```
APP_URL=https://domain.com
APP_ENV=production
TURNSTILE_SITEKEY=your_site_key_here
TURNSTILE_SECRET=your_secret_key_here
```
Untuk konfigurasi key turnstile, (captcha cloudflare) buat key di https://dash.cloudflare.com dengan pengaturan nama domain sesuai dengan domain yang akan dihosting agar captcha tidak error

4. Jalankan migrasi dan seeder
```bash
php artisan migrate
php artisan db:seed
```

5. Buat symlink storage (agar file di storage/app/public dapat diakses)
```bash
php artisan storage:link
```

6. Bangun aset frontend (dev / produksi)
- Untuk pengembangan:
```bash
npm run dev
```
- Untuk produksi:
```bash
npm run build
```

7. Jalankan server pengembangan
- Dengan artisan:
```bash
php artisan serve
```
- Atau gunakan cara lain sesuai workflow (Valet, Sail, dsb).

8. Akses aplikasi
- Buka `http://localhost:8000` di browser

9. Buat akun admin
- Setelah aplikasi dapat berjalan buat akun admin dengan menjalankan:
```
php artisan make:filament-user
```

---

## Menambahkan Cloudflare Turnstile (captcha) — memasukkan kunci ke `.env`

Cloudflare Turnstile adalah alternatif CAPTCHA tanpa banyak interaksi pengguna. Berikut cara menambahkan kuncinya ke proyek dan contoh penggunaan minimal.

1. Daftar dan buat site di Cloudflare Turnstile: https://dash.cloudflare.com -> Turnstile
   - Setelah membuat site, Anda akan mendapatkan `SITE KEY` dan `SECRET KEY`.

2. Tambahkan kunci ke file `.env`
```env
TURNSTILE_SITEKEY=your_site_key_here
TURNSTILE_SECRET=your_secret_key_here
```
```

---

## Tips & Troubleshooting singkat
- Pastikan `php artisan storage:link` sudah dijalankan agar file di `storage/app/public` dapat diakses via `/storage/...`.
- Jika gambar tidak muncul, periksa path di database dan pastikan file ada di `storage/app/public/<path>`; akses via `http://localhost:8000/storage/<path>`.
- Setelah ubah konfigurasi, jalankan `php artisan config:clear` dan `php artisan view:clear` bila perlu.

