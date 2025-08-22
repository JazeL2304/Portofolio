<?php
// config.php - Konfigurasi database untuk XAMPP
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'root';
$password = '';  // XAMPP default password kosong
$port = 3306;    // Port default MySQL

try {
    // Tambahkan port dan charset
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // HAPUS ATAU COMMENT BARIS INI:
    // echo "Koneksi database berhasil!";
    
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>