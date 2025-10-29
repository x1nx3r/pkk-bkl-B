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

3. (Opsional tapi direkomendasikan) Tambahkan konfigurasi ke `config/services.php` agar mudah diakses:
```php
'turnstile' => [
   'sitekey' => env('TURNSTILE_SITEKEY'),
   'secret'  => env('TURNSTILE_SECRET'),
],
```

4. Menyisipkan widget Turnstile di form Blade (contoh):
```blade
<!-- muat skrip Turnstile sekali di head atau sebelum form -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- di dalam form Anda -->
<form method="POST" action="{{ route('some.submit') }}">
   @csrf

   <!-- input form lain -->

   <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.sitekey') }}"></div>

   <button type="submit">Kirim</button>
</form>
```

5. Verifikasi token Turnstile di server (contoh controller menggunakan Http facade):
```php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

public function submitForm(Request $request)
{
   $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
      'secret'   => config('services.turnstile.secret'),
      'response' => $request->input('cf-turnstile-response'), // token default
      'remoteip' => $request->ip(),
   ]);

   $body = $response->json();

   if (! ($body['success'] ?? false)) {
      return back()->withErrors(['turnstile' => 'Validasi Turnstile gagal. Silakan coba lagi.']);
   }

   // lanjutkan proses form jika berhasil
}
```

Catatan: widget Turnstile menyuntikkan input bernama `cf-turnstile-response` ke dalam form secara otomatis ketika pengguna menyelesaikan tantangan (atau secara transparan jika tidak diperlukan interaksi).

---

## Tips & Troubleshooting singkat
- Pastikan `php artisan storage:link` sudah dijalankan agar file di `storage/app/public` dapat diakses via `/storage/...`.
- Untuk upload file di Filament, pastikan `->disk('public')` diatur di field `FileUpload` sehingga berkas disimpan di `storage/app/public`.
- Jika gambar tidak muncul, periksa path di database dan pastikan file ada di `storage/app/public/<path>`; akses via `http://localhost:8000/storage/<path>`.
- Setelah ubah konfigurasi, jalankan `php artisan config:clear` dan `php artisan view:clear` bila perlu.

Jika ingin, saya bisa juga menambahkan contoh implementasi Turnstile ke form spesifik di proyek ini (sebutkan file Blade atau route yang ingin diamankan).
