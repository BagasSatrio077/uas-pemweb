Nama    : Bagas Satrio

NIM     : 121140077

Kelas   : Pemrograman Web RB

Bagian 1: Client-side Programming

a.	Manipulasi DOM dan Form Input

•	JavaScript DOM Manipulation:
Pada file index.php, JavaScript digunakan untuk menambahkan baris baru ke tabel saat data pemesanan baru dimasukkan. Fungsi updateBookingTable mengambil data pengguna dan memperbarui tabel dengan menambahkan baris baru.
<img width="795" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/d225f026-bfd9-4bfe-b5dc-1c9d401fb7a7">

•	Form Input:
Pada file halbooking.php, terdapat formulir untuk mengumpulkan data pemesanan, termasuk elemen-elemen input seperti teks, dropdown untuk jenis kelamin, email, jumlah tiket, jenis tiket, dan nomor handphone.
<img width="803" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/22c08ac8-b168-4800-a8c2-2a2e087a6e57">

•	Menampilkan Data dari Server ke Halaman Web:
Data pemesanan dari server ditampilkan dalam tabel pada halaman halbooking.php menggunakan PHP. Data dari database diambil dan ditampilkan dalam elemen tabel HTML.
<img width="795" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/2f11874d-2b19-4268-bb3d-f73f5e0b9702">

b.	Implementasi Event pada Halaman Web
Pada file index.php, terdapat event onclick pada setiap baris tabel yang memanggil fungsi displayDataInForm untuk menampilkan data di formulir saat baris diklik. Tombol "Pesan Tiket" juga memiliki event yang mengarahkan pengguna ke halaman halbooking.php.
<img width="793" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/8dc9de56-5520-4078-bedb-cb56fc7e2d0e">



Bagian 2: Server-side Programming

a.	Variabel Global dan Menampilkan Hasil Pengolahan Data
Pada file halbooking.php, variabel global $_POST digunakan untuk mengambil data dari formulir setelah form submit. Data tersebut kemudian diproses untuk dimasukkan ke dalam database. Hasil dari proses tersebut ditampilkan dengan pesan sukses atau error menggunakan PHP echo.
<img width="803" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/6fbca150-ad59-4b42-ab98-9de1c9c4b43b">

b.	Implementasi Objek PHP Berbasis OOP
Pada file koneksi.php, terdapat sebuah kelas Database yang digunakan untuk mengelola koneksi ke database. Objek dari kelas ini dibuat dan digunakan dalam skenario tertentu, seperti mendapatkan koneksi dan menutup koneksi.
<img width="788" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/65eb1ada-d6a0-47c3-885f-de3842dd95dc">



Bagian 3: Database Management

a.	Tabel pada Database MySQL
Terdapat penjelasan bahwa database MySQL bernama datadewa memiliki tabel tabeldewa dengan enam kolom, yaitu Nama, Jenis Kelamin, Email, Jumlah Tiket, Jenis Tiket, dan Nomor Handphone.
<img width="959" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/22589573-a5c3-4e45-a3ef-85669a0ec86e">

b.	Konfigurasi Koneksi ke Database MySQL
Pada file koneksi.php, konfigurasi koneksi ke database MySQL diimplementasikan menggunakan objek dari kelas Database. Koneksi ini dibuat saat objek dibuat, dan dapat diakses melalui metode getConnection().
<img width="802" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/46a73151-b64c-4bc3-b9ff-557e9cb33481">

c.	Manipulasi Data pada Tabel Database
Pada file halbooking.php, data pemesanan dimasukkan ke dalam tabel database dengan menggunakan query SQL INSERT. Terdapat pula implementasi penghapusan data berdasarkan nama dengan query DELETE.
<img width="792" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/013212ea-75e8-4e50-a5d1-e532195eab43">

Bagian 4: State Management

a.	Pengelolaan State dengan Session
Pada file login.php, session PHP digunakan untuk menyimpan informasi pengguna yang berhasil login. Session $_SESSION['username'] di-set setelah verifikasi password berhasil.
<img width="795" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/ba5df393-67f2-4719-b041-af59cbc6e70a">

b.	Pengelolaan State dengan Cookie dan Browser Storage
Pada file script.js, ada potongan kode yang mengimplementasikan manipulasi data menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript. Namun, perlu lebih banyak informasi atau implementasi konkrit untuk memberikan penjelasan yang lebih rinci.
<img width="783" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/bf0c0ac8-e566-4693-b16e-b24744873fba">



Bonus: Hosting Aplikasi Web
<img width="960" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/eee274de-e04f-442f-b3d7-b290de65c539">


a.	Langkah-langkah Meng-host Aplikasi Web dengan InfiniteFree:
1.	Buat Akun InfiniteFree:
•	Kunjungi situs resmi InfiniteFree dan buat akun pengguna.
•	Pilih rencana hosting yang sesuai dengan kebutuhan aplikasi web Anda.
2.	Persiapkan Aplikasi Web:
Pastikan aplikasi web Anda sudah siap untuk di-hosting. Termasuk semua file, konfigurasi, dan struktur database jika diperlukan.
3.	Upload File ke Server:
•	Gunakan fitur file manager dari InfiniteFree atau sFTP untuk meng-upload file aplikasi web ke server hosting Anda.
4.	Konfigurasi Database:
Jika aplikasi Anda menggunakan database, pastikan untuk mengonfigurasi database pada panel kontrol InfiniteFree dan sesuaikan konfigurasi koneksi di aplikasi web Anda.
5.	Verifikasi Konfigurasi:
Pastikan semua file dan konfigurasi telah diatur dengan benar.
Uji aplikasi web Anda untuk memastikan tidak ada masalah setelah di-hosting.

b.	Pemilihan Penyedia Hosting Web yang Cocok:
Saya akan mempertimbangkan InfiniteFree sebagai penyedia hosting web untuk aplikasi web ini karena:
1.	Gratis: InfiniteFree menawarkan rencana hosting gratis yang dapat mendukung aplikasi web sederhana.
2.	Cukup untuk Proyek Kecil: Cocok untuk proyek kecil atau sebagai lingkungan pengembangan.
3.	Mudah Digunakan: Panel kontrol yang sederhana memudahkan penggunaan, terutama untuk pemula.

c.	Memastikan Keamanan Aplikasi Web:
1.	Update Regular:
Pastikan seluruh komponen (sistem operasi, web server, aplikasi) selalu diperbarui untuk mengatasi kerentanan keamanan yang telah diperbaiki.
2.	Firewall Configuration:
Terapkan konfigurasi firewall untuk membatasi akses yang tidak diinginkan ke server.
3.	Enkripsi Koneksi:
Pastikan koneksi antara pengguna dan server dienkripsi menggunakan protokol HTTPS.
4.	Penanganan Input:
Validasi dan bersihkan semua input pengguna untuk mencegah serangan injeksi.

d.	Konfigurasi Server:
1.	Web Server (e.g., Apache, Nginx):
•	Sesuaikan konfigurasi server web untuk mendukung aplikasi PHP.
•	Atur direktori root server untuk menunjuk ke folder aplikasi.
2.	Database Server (e.g., MySQL):
•	Konfigurasikan server database sesuai dengan kebutuhan aplikasi.
•	Pastikan koneksi aman dan terbatas.
3.	Backup Rutin:
•	Atur rutinitas backup untuk data penting dan konfigurasi aplikasi.
4.	Monitoring:
Terapkan sistem pemantauan untuk memantau kinerja server dan mendeteksi potensi masalah.

LINK WEBSITE : http://bagassatrio121140077.rf.gd 

Tampilan Login
<img width="960" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/c90c654b-a02c-4533-ac7a-56b4387c27de">

Tampilan Registrasi
<img width="960" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/81b401ce-0875-4d59-abab-9e39261845da">

Tampilan Form
<img width="960" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/e27445eb-7b26-4344-af7d-042b6f6c2158">

Tampilan Home
<img width="960" alt="image" src="https://github.com/BagasSatrio077/uas-pemweb/assets/126631952/5806017b-5d14-4125-9798-f9a5e9a32662">


