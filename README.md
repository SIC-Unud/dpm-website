# Website DPM PM UNUD
## Development Setup
1. Copy file `.env.example`, lalu buat file baru yang bernama `.env` di folder ini.
2. Ubah nilai `DB_DATABASE` menjadi `dpm_website` (namanya bebas)
3. Jalankan perintah `composer update` di terminal.
4. Jalankan perintah `php artisan key:generate`.
5. Buka xampp atau laragon, jalankan service **mysql**
6. Buat database baru bernama `dpm_website` (sesuai pada step 2)
7. Jalankan perintah `php artisan migrate --seed`
8. Jalankan aplikasi dengan `php artisan serve`