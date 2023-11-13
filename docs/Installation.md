# Installation

On this page we describe the detail steps to install the system for both in the production and development environments. Before intalling the system, make sure to comply with the required software mentioned in the [Software Requirements](Software-Requirements.md).

## Production Environment

### PHP ^8.2.11 runtime
Untuk menginstal PHP versi ^8.2.11 runtime di Windows, Anda dapat mengikuti langkah-langkah berikut:
1. Unduh PHP: Kunjungi situs resmi PHP (https://windows.php.net/download/) untuk mengunduh versi PHP yang sesuai dengan kebutuhan Anda. Pastikan Anda memilih versi yang sesuai dengan arsitektur sistem Anda (x86 untuk 32-bit, x64 untuk 64-bit).
2. Ekstrak Berkas ZIP: Setelah mengunduh, ekstrak berkas ZIP PHP ke direktori di mana Anda ingin menginstal PHP. Anda dapat menggunakan alat ekstraksi berkas seperti 7-Zip atau WinRAR untuk melakukan ini.
3. Konfigurasi PHP: Buka direktori hasil ekstraksi dan buat salinan berkas php.ini-development dengan nama php.ini. Anda dapat menggunakan teks editor seperti Notepad untuk mengeditnya.
cd path\to\php
copy php.ini-development php.ini
4. Edit php.ini: Buka berkas php.ini yang baru dibuat dan sesuaikan konfigurasi PHP sesuai dengan kebutuhan Anda. Anda mungkin perlu mengatur extension_dir untuk menunjukkan direktori ekstensi PHP yang benar.
5. Tambahkan PHP ke PATH: Untuk menjalankan perintah PHP dari baris perintah tanpa harus selalu berada di direktori PHP, tambahkan direktori PHP ke variabel lingkungan PATH. Anda dapat melakukannya dengan mengikuti langkah-langkah ini:
a. Buka "System Properties" dengan cara:
- Klik kanan "This PC" atau "My Computer."
- Pilih "Properties."
- Klik "Advanced system settings" di panel samping kiri.
b. Di tab "Advanced," klik tombol "Environment Variables."
c. Pilih variabel "Path" di bagian "System variables," kemudian klik tombol "Edit."
d. Tambahkan jalur ke direktori PHP (contoh: C:\path\to\php) ke daftar variabel PATH. Pastikan untuk memisahkan jalur yang ada dengan titik koma(;).
5. Tes Instalasi: Buka Command Prompt dan ketik php -v untuk memastikan PHP telah terinstal dengan benar. Anda seharusnya melihat versi PHP yang baru diinstal.
6. Selesai: PHP ^8.2.11 sekarang seharusnya telah berhasil diinstal di Windows Anda.

### Composer PHP package manager ^2.6.4.
Untuk menginstal Composer PHP package manager versi ^2.6.4 di Windows, Anda dapat mengikuti langkah-langkah berikut:
1. Persiapkan Lingkungan: Pastikan Anda telah menginstal PHP di komputer Windows Anda. Jika belum, Anda dapat mengunduh PHP dari https://windows.php.net/download/ dan mengikuti instruksi instalasi.
2. Unduh Composer: Kunjungi situs web resmi Composer di https://getcomposer.org/download/ untuk mengunduh installer Composer. Unduh versi Windows Installer (.exe) dan pilih versi terbaru (misalnya, Composer-Setup.exe).
3. Jalankan Installer: Jalankan installer yang telah Anda unduh. Selama proses instalasi, Anda akan ditanyai mengenai lokasi instalasi Composer dan lokasi PHP pada sistem Anda. Pastikan untuk mengarahkan installer ke direktori PHP yang telah diinstal sebelumnya.
4. Verifikasi Instalasi: Setelah instalasi selesai, buka Command Prompt dan ketik perintah berikut untuk memastikan Composer terinstal dengan benar:
composer --version

## Development Environment
Proses instalasi yang Anda sebutkan melibatkan instalasi beberapa komponen penting yang diperlukan untuk mengembangkan aplikasi web menggunakan Laravel, sebuah framework PHP yang populer. Berikut adalah penjelasan langkah demi langkah untuk menginstal komponen-komponen tersebut:

1. **Instalasi PHP**:
   PHP adalah bahasa pemrograman yang digunakan oleh Laravel. Untuk menginstal PHP, Anda dapat mengikuti langkah-langkah berikut (berdasarkan sistem operasi Anda):

   - **Windows**:
     Anda dapat menggunakan XAMPP atau aplikasi serupa yang menggabungkan Apache, MySQL, dan PHP. Unduh dan instal XAMPP dari situs resmi mereka. Setelah menginstal XAMPP, Anda dapat memeriksa apakah PHP terinstal dengan membuka command prompt atau terminal dan menjalankan perintah `php -v`.

   - **Linux (Ubuntu)**:
     Di Ubuntu, Anda dapat menginstal PHP dengan perintah berikut di terminal:
     ```
     sudo apt update
     sudo apt install php
     ```

   - **macOS**:
     Di macOS, Anda dapat menggunakan Homebrew untuk menginstal PHP:
     ```
     brew install php
     ```

2. **Instalasi Composer**:
   Composer adalah manajer dependensi untuk PHP yang akan membantu Anda mengelola dependensi proyek Laravel. Untuk menginstal Composer, ikuti langkah-langkah berikut:

   - **Windows**:
     Unduh dan instal Composer dari situs resmi mereka.

   - **Linux dan macOS**:
     Buka terminal dan jalankan perintah berikut:
     ```
     php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
     php composer-setup.php
     php -r "unlink('composer-setup.php');"
     sudo mv composer.phar /usr/local/bin/composer
     ```

3. **Instalasi XAMPP**:
   XAMPP adalah paket pengembangan web yang mencakup Apache (web server), MySQL (sistem manajemen basis data), PHP, dan Perl. Untuk menginstal XAMPP, ikuti langkah-langkah berikut:

   - Unduh XAMPP dari situs resmi mereka dan instal sesuai instruksi yang disediakan untuk sistem operasi Anda.

4. **Instalasi Laravel**:
   Setelah Anda memiliki PHP, Composer, dan XAMPP terinstal, Anda dapat menginstal Laravel menggunakan Composer. Buka terminal atau command prompt dan jalankan perintah berikut:
   ```
   composer global require laravel/installer
   ```
   Ini akan menginstal Laravel secara global di sistem Anda, sehingga Anda dapat membuat proyek Laravel baru di mana saja.

Setelah semua komponen ini terinstal, Anda siap untuk memulai pengembangan aplikasi web menggunakan Laravel. Anda dapat membuat proyek baru dengan menjalankan perintah `laravel new nama_proyek`. Kemudian, Anda dapat menjalankan server pengembangan Laravel dengan perintah `php artisan serve` dan mulai mengembangkan aplikasi Anda.

Pastikan untuk membaca dokumentasi resmi dari masing-masing komponen (PHP, Composer, XAMPP, dan Laravel) untuk memahami cara menggunakannya dan memecahkan masalah yang mungkin muncul selama proses instalasi dan pengembangan.


## Related


+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).