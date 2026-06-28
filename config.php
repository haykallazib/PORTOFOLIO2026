<?php
$host = 'localhost';
$user = 'root';          // sesuaikan dengan user MySQL Anda
$password = '';          // sesuaikan dengan password MySQL Anda
$dbname = 'portfolio_db';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>