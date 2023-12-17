<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    // Mendapatkan data dari formulir
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $gender = mysqli_real_escape_string($koneksi, $_POST['gender']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $jumtiket = mysqli_real_escape_string($koneksi, $_POST['jumtiket']);
    $tiket = mysqli_real_escape_string($koneksi, $_POST['tiket']);
    $number = mysqli_real_escape_string($koneksi, $_POST['number']);

    // Mengecek apakah data sudah ada di database
    $checkQuery = "SELECT * FROM tabeldewa WHERE Nama = '$nama' AND Email = '$email' AND Jenis_Tiket = '$tiket' AND No_Handphone = '$number'";
    $result = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "Data already exists in the database."; // Menampilkan pesan jika data sudah ada
    } else {
        // Menyisipkan data ke dalam database
        $insertQuery = "INSERT INTO tabeldewa (Nama, Jenis_Kelamin, Email, Jumlah_Tiket, Jenis_Tiket, No_Handphone) 
                      VALUES ('$nama', '$gender', '$email', '$jumtiket', '$tiket', '$number')";

        if (mysqli_query($koneksi, $insertQuery)) {
            echo "Data has been successfully inserted into the database."; // Menampilkan pesan sukses
            header("Location: halbooking.php"); // Mengarahkan ke halaman yang sama
            exit();
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi); // Menampilkan pesan error
        }
    }
}
if (isset($_POST['submit_remove'])) {
    // Mendapatkan nama yang akan dihapus dari formulir dan menghindari SQL injection
    $nama_hapus = mysqli_real_escape_string($koneksi, $_POST['remove']);

    // Periksa apakah data dengan nama tersebut ada di database sebelum menghapus
    $checkQuery = "SELECT * FROM tabeldewa WHERE Nama = '$nama_hapus'";
    $result_check = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($result_check) > 0) {
        // Data ditemukan, maka lakukan penghapusan
        $deleteQuery = "DELETE FROM tabeldewa WHERE Nama = '$nama_hapus'";
        
        if (mysqli_query($koneksi, $deleteQuery)) {
            echo "Data has been successfully deleted from the database."; // Menampilkan pesan sukses
            header("Location: halbooking.php"); // Redirect ke halaman yang sama
            exit();
        } else {
            echo "Error: " . $deleteQuery . "<br>" . mysqli_error($koneksi); // Menampilkan pesan error jika ada masalah
        }
    } else {
        echo "Data with the given name does not exist in the database."; // Menampilkan pesan jika data tidak ditemukan
    }
}

// Fungsi untuk mendapatkan data dari database
function getDataFromDatabase($connection) {
    $data = array();

    // Query SQL untuk mendapatkan data
    $query = "SELECT * FROM tabeldewa";
    $result = mysqli_query($connection, $query);

    // Mendapatkan hasil query sebagai array asosiatif
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Panggil fungsi untuk mendapatkan data
$dataFromDatabase = getDataFromDatabase($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan dengan file CSS eksternal -->
    <title>DATA PEMESANAN</title>
</head>
<body>
    <header>
        <h1>Konser Dewa 19 - Satu Hati</h1>
        <a class="home-btn" href="index.php">Home</a>
    </header>

    <!-- Formulir untuk mengumpulkan data pemesanan -->
    <form id="bookingForm" method="post" action="halbooking.php" onsubmit="return validateAndSubmit()">
        <div class="container">
            <h1>Data Pemesanan</h1>
            <!-- Input untuk Nama -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" />
            </div>
            <!-- Dropdown untuk Jenis Kelamin -->
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <!-- Input untuk Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" />
            </div>
            <!-- Input untuk Jumlah Tiket -->
            <div class="form-group">
                <label for="jumtiket">Jumlah Tiket</label>
                <input type="number" class="form-control" id="jumtiket" name="jumtiket" min="1" />
            </div>
            <!-- Dropdown untuk Jenis Tiket -->
            <div class="form-group">
                <label for="tiket">Jenis Tiket</label>
                <select id="tiket" name="tiket" class="form-control" required>
                    <option value="Regular">Regular</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>
            <!-- Input untuk Nomor Handphone -->
            <div class="form-group">
                <label for="number">Nomor Handphone</label>
                <input type="number" class="form-control" id="number" name="number" />
            </div>

            <!-- Tombol untuk menambahkan data -->
            <button type="submit" name="submit" value="add">Tambah Data</button>
        </form>

        <h1>Data Tabel</h1>
        <!-- Tabel untuk menampilkan data pemesanan dari database -->
        <table id="dataTable" border="1">
            <thead>
                <tr>
                    <!-- Kolom-kolom pada tabel -->
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Jumlah Tiket</th>
                    <th>Jenis Tiket</th>
                    <th>No Handphone</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <?php
                // Loop untuk menampilkan data dari array ke dalam baris tabel HTML
                foreach ($dataFromDatabase as $row) {
                    echo "
                    <tr>
                        <td>{$row['Nama']}</td>
                        <td>{$row['Jenis_Kelamin']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Jumlah_Tiket']}</td>
                        <td>{$row['Jenis_Tiket']}</td>
                        <td>{$row['No_Handphone']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Formulir untuk menghapus data berdasarkan nama -->
        <form method="post">
            <label for="remove">Hapus Data (Nama)</label>
            <input type="text" id="remove" name="remove" required>
            <!-- Tombol untuk mengirimkan permintaan penghapusan -->
            <button type="submit" name="submit_remove">Hapus</button>
        </form>
    </div>

    <!-- Menghubungkan dengan file JavaScript eksternal -->
    <script src="script.js"></script>
</body>
</html>
