// Fungsi untuk memperbarui tabel pemesanan dengan data baru
function updateBookingTable(nama, email, tiket, jumtiket, number, gender) {
    // Mengambil elemen body tabel berdasarkan ID 'tableBody'
    var tableBody = document.getElementById('tableBody');

    // Menambahkan baris baru ke tabel pada posisi terakhir
    var newRow = tableBody.insertRow(tableBody.rows.length);

    // Menambahkan sel-sel baru ke dalam baris
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);

    // Mengisi nilai sel-sel dengan data yang diberikan
    cell1.innerHTML = nama;
    cell2.innerHTML = gender;
    cell3.innerHTML = email;
    cell4.innerHTML = tiket;
    cell5.innerHTML = jumtiket;
    cell6.innerHTML = number;
}
