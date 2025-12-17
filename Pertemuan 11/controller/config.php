<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "LaundryCraft"; // Pastikan huruf besar/kecil sesuai database
$port = 4306; // Port sesuai XAMPP kamu

// Tambahkan $port sebagai parameter ke-5
$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>