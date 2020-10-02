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
// $sql = "INSERT INTO murid (nama, alamat) VALUES ('udin', 'pacet');";
// $sql .= "INSERT INTO murid (nama, alamat) VALUES ('apep', 'gondang')";

// $mysqli->query($sql)
// $mysqli->multi_query($sql)

// prepare statement
$stmt_insert = $mysqli->prepare('INSERT INTO murid (nama, alamat) VALUES (?, ?)');
$stmt_insert->bind_param('ss', $nama, $alamat);

// mengisi nilai parameter dan menjalankannya
$nama = "brody";
$alamat = "land of dawn";

$stmt_insert->execute();

// menutup koneksi database
$mysqli->close();

?>
