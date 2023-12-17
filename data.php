<?php
// Memasukkan file koneksi.php yang berisi informasi koneksi ke database
include "koneksi.php";

// Membuat instance dari kelas Database untuk mendapatkan koneksi
$db = new Database();
$connection = $db->getConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <!-- Membuat tabel untuk menampilkan data -->
    <table id="dataTable" border="1">
        <tr>
            <!-- Header kolom-kolom tabel -->
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Jumlah Tiket</th>
            <th>Jenis Tiket</th>
            <th>No Handphone</th>
        </tr>

        <?php
        // Inisialisasi nomor urut
        $no = 1;

        // Mengambil data dari tabeldewa menggunakan mysqli_query
        $get = mysqli_query($connection, 'SELECT * FROM tabeldewa');

        // Loop untuk menampilkan setiap baris data
        while ($tampil = mysqli_fetch_array($get)) {
            // Menampilkan data dalam bentuk baris tabel HTML
            echo "
            <tr>
                <td>$tampil[Nama]</td>
                <td>$tampil[Jenis_Kelamin]</td>
                <td>$tampil[Email]</td>
                <td>$tampil[Jumlah_Tiket]</td>
                <td>$tampil[Jenis_Tiket]</td>
                <td>$tampil[No_Handphone]</td>
            </tr>";
            $no += 1;
        }
        ?>
    </table>

    <!-- Formulir untuk kembali ke halaman index.php -->
    <form method="post" action="index.php">
        <button>Kembali</button>
    </form>
</body>
</html>
