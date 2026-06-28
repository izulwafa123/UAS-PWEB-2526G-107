<?php
require 'koneksi.php';

// Form Processing GET untuk menangkap ID target
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $id = mysqli_real_escape_string($koneksi, $id);

    // Kueri penghapusan data (Delete)
    $query = "DELETE FROM buku WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Buku berhasil dihapus dari sistem.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data.'); window.location='index.php';</script>";
    }
} else {
    header('Location: index.php');
}
?>
