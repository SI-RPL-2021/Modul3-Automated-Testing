# Modul 3 ✨Automated Testing✨

Selamat datang di _repository_ modul 3!

Untuk menjalankannya di komputer lokal Anda :
1. _Clone_
2. Mengganti file `.env.example` menjadi `.env`
3. Buatlah _database_ di komputer Anda dengan nama **praktikum_rpl_m3**
4. Ubah isi file `.env` pada baris ke-5 menjadi `APP_URL=http://127.0.0.1:8000` dan baris ke-12 menjadi `DB_DATABASE=praktikum_rpl_m3`
5. Buka _terminal_ di dalam folder _repository_ ini
6. Ketik `composer install` kemudian tekan tombol Enter pada _keyboard_ Anda
7. Ketik `php artisan key:generate` kemudian tekan tombol Enter pada _keyboard_ Anda
8. Ketik `php artisan migrate` kemudian tekan tombol Enter pada _keyboard_ Anda
9. Ketik `php artisan serve` kemudian tekan tombol Enter pada _keyboard_ Anda
10. ✨Selesai✨

## FAQ
Q: Kak ini ada error : "1) Tests\Browser\ExampleTest::testBasicExample
Facebook\WebDriver\Exception\SessionNotCreatedException: session not created: This version of ChromeDriver only supports Chrome version  70 and 73" solusinya bagaimana ya?
A: Ketik `php artisan dusk:chrome-driver` di Terminal, kemudian Update Google Chrome Anda dengan cara : Klik tiga titik menurun pada Google Chrome (pojok kanan atas), pilih Help (Bantuan) -> pilih About Google Chrome (Tentang Google Chrome) -> Tunggu hingga update selesai -> Relaunch Google Chrome. Dan coba jalankan Testing sesuai dengan modul.
