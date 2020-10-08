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

$query = "UPDATE murid SET nama='Kilua', alamat='HunterXHunter' WHERE id=2";

if ($mysqli->query($query) === TRUE) {
    echo "data berhasil diupdate";
}else {
    echo "data gagal diupdate";
}

// menutup koneksi database
$mysqli->close();

?>
