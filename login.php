<?php
// Mulai sesi PHP untuk pengelolaan data sesi
session_start();

// Memasukkan file koneksi.php yang berisi informasi koneksi ke database
include "koneksi.php";

// Memeriksa apakah metode permintaan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengamankan input username dari SQL injection menggunakan mysqli_real_escape_string
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];

    // Query untuk mendapatkan data pengguna berdasarkan username
    $query = "SELECT * FROM tabeluser WHERE Username = '$username'";
    $result = mysqli_query($koneksi, $query);

    // Memeriksa apakah ada hasil dari query
    if (mysqli_num_rows($result) > 0) {
        // Mengambil baris data pengguna dari hasil query
        $row = mysqli_fetch_assoc($result);
        
        // Memeriksa kecocokan password menggunakan password_verify
        if (password_verify($password, $row['Password'])) {
            // Jika password cocok, set session username dan redirect ke halaman index.php
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            // Jika password tidak cocok, tampilkan pesan
            echo "Password salah.";
        }
    } else {
        // Jika username tidak ditemukan, tampilkan pesan
        echo "Username tidak ditemukan.";
    }
}

// Menutup koneksi database setelah penggunaan
mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            background-image: url(backdewa2.webp);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: #ffffff;
            margin: 200px;
            padding: 0;
        }
        header,h2 {
            max-width: 500px;
            background-color: red;
            color: rgb(255, 255, 255);
            text-align: center;
            padding: 1em;
            margin: 20px auto;
            font-size: 20px;
            border-radius: 10px;
            border: 10px black;
            border: 10px solid black;
        }
        form {
            font-weight: bolder;
            max-width: 500px;
            margin: 20px auto;
            padding: 1em;
            background-color: #ff0000;
            border-radius: 8px;
            border: 10px solid black;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: white;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            background-color: #333;
            color: #fff;
            border: 1px solid #000000;
            border-radius: 4px;
        }
        button{
            display: inline-block;
            margin-left: auto;
            background-color: black;
            color: red;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bolder;
        }

        button:hover {
            background-color: #0056b3;
        }

        p{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            padding: 10px;
        }
    </style>
    <!-- Tambahkan link CSS sesuai kebutuhan -->
</head>
<body>
    <!-- Elemen Header -->
    <h2>Login</h2>

    <!-- Formulir untuk login -->
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <!-- Tombol untuk submit form -->
        <button type="submit">Login</button>

        <!-- Tautan untuk pendaftaran -->
        <p>Belum punya akun?<br>
            <a href="register.php"> Daftar disini</a></p>
    </form>
</body>
</html>