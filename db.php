<?php
$host = 'localhost';
$user = 'root'; // Sesuaikan dengan username MySQL
$password = ''; // Sesuaikan dengan password MySQL
$db_name = 'contact_messages'; // Nama database

$conn = new mysqli($host, $user, $password, $db_name);

// Cek koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}
?>
