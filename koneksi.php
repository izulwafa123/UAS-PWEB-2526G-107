<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pendataan_buku";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// FUNCTION 1: Mengamankan input data dari karakter berbahaya (Sanitasi)
function proteksi_input($data) {
    global $koneksi;
    return mysqli_real_escape_string($koneksi, trim($data));
}

// FUNCTION 2: Menghitung total buku yang terdaftar di sistem
function hitung_total_buku() {
    global $koneksi;
    $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM buku");
    $data = mysqli_fetch_assoc($query);
    return $data['total'];
}
?>
