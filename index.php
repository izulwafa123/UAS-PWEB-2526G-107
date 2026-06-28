<?php
// Menggunakan require untuk menyertakan koneksi database
require 'koneksi.php'; // Mengisi syarat include/require

// Mengambil data buku (Read)
$query = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">📚 PustakaDigital</a>
        </div>
    </nav>

    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h2>Daftar Koleksi Buku</h2>
                <p class="text-muted">Total buku terdata saat ini: <strong><?php echo hitung_total_buku(); ?></strong> buku.</p>
            </div>
            <div class="col text-end align-self-center">
                <a href="tambah.php" class="btn btn-primary">+ Tambah Buku Baru</a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>ISBN</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        // Perulangan untuk menampilkan data dari database
                        while($row = mysqli_fetch_assoc($query)) { 
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($row['judul']); ?></td>
                            <td><?php echo htmlspecialchars($row['penulis']); ?></td>
                            <td><?php echo htmlspecialchars($row['penerbit']); ?></td>
                            <td><?php echo $row['tahun_terbit']; ?></td>
                            <td><?php echo htmlspecialchars($row['isbn']); ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        } 
                        // Percabangan jika database kosong
                        if (hitung_total_buku() == 0) {
                            echo "<tr><td colspan='7' class='text-center py-4'>Belum ada data buku.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
