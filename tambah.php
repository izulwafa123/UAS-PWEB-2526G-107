<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    // Memproses form dengan POST dan memproteksi input menggunakan Function 1
    $judul        = proteksi_input($_POST['judul']);
    $penulis      = proteksi_input($_POST['penulis']);
    $penerbit     = proteksi_input($_POST['penerbit']);
    $tahun_terbit = proteksi_input($_POST['tahun_terbit']);
    $isbn         = proteksi_input($_POST['isbn']);

    // Validasi sederhana (Percabangan)
    if (!empty($judul) && !empty($penulis)) {
        $query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, isbn) 
                  VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit', '$isbn')";
        
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Data buku berhasil ditambahkan!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data.');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">📚 PustakaDigital</a>
        </div>
    </nav>

    <div class="container" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Form Tambah Buku</h4>
            </div>
            <div class="card-body">
                <form action="tambah.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-type form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" required min="1000" max="2026">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" name="isbn" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
