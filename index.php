<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konser Dewa 19</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(backdewa.jpg);
        }

        header {
            background-color: red;
            color: black;
            text-align: center;
            padding: 1em;
            font-size: 20px;
            border-radius: 10px;
            border: 10px solid black;
        }
        .login-btn {
            display: inline-block;
            margin-left: auto;
            background-color: black;
            color: red;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }


        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: red;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border: 10px solid black;
        }

        h2 {
            color: black;
        }

        p {
            color: black;
        }

        .concert-image {
            display: block;
            margin: 0 auto;
            width: 50%;
            max-height: 400px;
            object-fit: cover;
        }


        .pesan-tiket-btn {
            display: block;
            margin-top: 20px;
            background-color: black;
            color: red;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .pesan-tiket-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function updateBookingTable(nama, email, tiket, jumtiket, number, gender) {
            var table = document.getElementById('dataTable');

            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);

            cell1.innerHTML = nama;
            cell2.innerHTML = gender;
            cell3.innerHTML = email;
            cell4.innerHTML = tiket;
            cell5.innerHTML = jumtiket;
            cell6.innerHTML = number;

            // Menambahkan fungsi untuk menampilkan data di formulir saat baris diklik
            row.onclick = function() {
                displayDataInForm(row);
            };
        }
    </script>
</head>
<body>
    <header>
        <h1>Konser Dewa 19 - Satu Hati</h1>
        <a class="login-btn" href="login.php">Log Out</a>
    </header>

    <section>
        <img class="concert-image" src="DEWA.png" alt="Konser Dewa 19">
        <h2>Detail Konser</h2>
        <p><strong>Tanggal:</strong> 15 Mei 2024</p>
        <p><strong>Tempat:</strong> Lapangan Kalpataru Kemiling</p>
        <p><strong>Jam:</strong> 19.00 WIB</p>

        <h2>Deskripsi</h2>
        <p>
            Saksikan penampilan epik dari Dewa 19 dalam konser "Satu Hati". 
            Sebuah malam yang penuh emosi dan kenangan dengan hits-hits terbaik.
        </p>

        <h2>Tiket</h2>
        <p>
            Tiket tersedia mulai dari Rp 200.000. Dapatkan pengalaman konser 
            tak terlupakan bersama Dewa 19. Beli tiket sekarang!
        </p>

        <h2>Info lebih lanjut</h2>
        <p>
            Hubungi hotline kami di 0812-3456-7890 atau email ke info@dewa19concert.com
        </p>

        <!-- Tombol Pesan Tiket -->
        <a class="pesan-tiket-btn" href="halbooking.php">Pesan Tiket</a>
    </section>
</body>
</html>