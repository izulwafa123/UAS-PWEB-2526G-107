<?php
require 'koneksi.php';

// Mendapatkan ID buku dari parameter URL (Form Processing GET)
$id = $_GET['id'];

// Proteksi ID
$id = mysqli_real_escape_string($koneksi, $id);

// Ambil data buku saat ini berdasarkan ID
$query_pilih = mysqli_query($koneksi, "SELECT * FROM buku WHERE id = '$id'");
$data = mysqli_fetch_assoc($query_pilih);

// Jika ID tidak ditemukan, kembalikan ke index.php
if (mysqli_num_rows($query_pilih) < 1) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['update'])) {
    $judul        = proteksi_input($_POST['judul']);
    $penulis      = proteksi_input($_POST['penulis']);
    $penerbit     = proteksi_input($_POST['penerbit']);
    $tahun_terbit = proteksi_input($_POST['tahun_terbit']);
    $isbn         = proteksi_input($_POST['isbn']);

    // Proses Perubahan Data (Update)
    $query_update = "UPDATE buku SET 
                        judul='$judul', 
                        penulis='$penulis', 
                        penerbit='$penerbit', 
                        tahun_terbit='$tahun_terbit', 
                        isbn='$isbn' 
                     WHERE id='$id'";

    if (mysqli_query($koneksi, $query_update)) {
        echo "<script>alert('Data buku sukses diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
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
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Form Edit Buku</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control" value="<?php echo htmlspecialchars($data['judul']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="<?php echo htmlspecialchars($data['penulis']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="<?php echo htmlspecialchars($data['penerbit']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" required min="1000" max="2026">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" name="isbn" class="form-control" value="<?php echo htmlspecialchars($data['isbn']); ?>" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="update" class="btn btn-warning">Perbarui Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
