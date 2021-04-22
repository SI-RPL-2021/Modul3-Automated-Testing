# Modul 3 ✨Automated Testing✨

Selamat datang di _repository_ modul 3!

Untuk menjalankannya di komputer lokal Anda :
1. _Clone_
2. Copy file `.env.example` ke _folder_ yang sama lalu _rename_ menjadi `.env`
3. Copy file `.env.example` ke _folder_ yang sama lalu _rename_ menjadi `.env.dusk`
4. Buatlah _database_ di komputer Anda dengan nama **praktikum_rpl_m3**
5. Ubah isi file `.env` dan `.env.dusk` pada baris ke-5 menjadi `APP_URL=http://127.0.0.1:8000` dan baris ke-12 menjadi `DB_DATABASE=praktikum_rpl_m3`
6. Buka _terminal_ di dalam folder _repository_ ini
7. Ketik `composer install` kemudian tekan tombol Enter pada _keyboard_ Anda
8. Ketik `php artisan key:generate` kemudian tekan tombol Enter pada _keyboard_ Anda
9. Ketik `php artisan migrate` kemudian tekan tombol Enter pada _keyboard_ Anda
10. Ketik `php artisan serve` kemudian tekan tombol Enter pada _keyboard_ Anda
11. ✨Selesai✨

## Broswer Support
### Firefox
1. Ketik `php artisan dusk:install-firefox --with-chrome` kemudian tekan tombol Enter pada _keyboard_ Anda
2. Ketik `yes` kemudian tekan tombol Enter pada _keyboard_ Anda
3. Ketik `php artisan dusk` untuk menjalankan _automated testing_ pada browser Firefox

### Chrome
1. Ketik `php artisan dusk:chrome-driver --detect` untuk meng-_install_ driver Chrome
2. Ketik `php artisan dusk:chrome` untuk menjalankan _automated testing_ pada browser Chrome

## FAQ
Q: Kak ini ada error : "1) Tests\Browser\ExampleTest::testBasicExample
Facebook\WebDriver\Exception\SessionNotCreatedException: session not created: This version of ChromeDriver only supports Chrome version  70 and 73" solusinya bagaimana ya?
<br> A: Ketik `php artisan dusk:chrome-driver --detect` di Terminal
