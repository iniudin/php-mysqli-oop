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

$alamat = "land of dawn";
$murid = $mysqli->prepare('SELECT nama, alamat FROM murid WHERE alamat=?');
$murid->bind_param('s', $alamat);
$murid->execute();

$murid->bind_result($result_nama, $result_alamat);

while ($murid->fetch()) {
    echo $result_nama . " " . $result_alamat . "</br>";
}

// menutup koneksi database
$mysqli->close();

?>
