<?php

// Config
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name  = 'sekolahdb';

// Inisialisasi database
$mysqli = new mysqli($hostname, $username, $password, $db_name);

// Mengecek apakah berhasil membuat koneksi ke database?
if ($mysqli->connect_errno) {
    // jika gagal tampilkan error
    echo "Gagal membuat koneksi ke Database" . $mysqli->connect_error;
}

// Menambahkan data ke database
// query untuk menambahkan data murid
$sql = "INSERT INTO murid (nama, alamat) VALUES ('ucup', 'pacet')";

// menjalankan query
if ( $mysqli->query($sql) === TRUE ) {
    echo "Berhasil menambahkan data";
} else {
    echo "Gagal menambahkan data";
}

// menutup koneksi database
$mysqli->close();

?>
