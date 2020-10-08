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

$query = "DELETE FROM murid WHERE id=5";

if ($mysqli->query($query) === TRUE) {
    echo "data berhasil dihapus";
}else {
    echo "data gagal dihapus";
}

// menutup koneksi database
$mysqli->close();

?>
