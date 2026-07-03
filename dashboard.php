<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM pesanan");
?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Dashboard Laundry</h2>

        <div>

            <a href="tambah.php" class="btn btn-primary">
                + Tambah Pesanan
            </a>

            <a href="logout.php" class="btn btn-danger">
                Logout
            </a>

        </div>

    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-primary">

            <tr>

                <th>No</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Jenis</th>
                <th>Berat</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        <?php
        $no = 1;

        while ($row = mysqli_fetch_assoc($data)) {
        ?>

            <tr>

                <td><?= $no++; ?></td>

                <td><?= $row['nama']; ?></td>

                <td><?= $row['no_hp']; ?></td>

                <td><?= $row['jenis']; ?></td>

                <td><?= $row['berat']; ?> Kg</td>

                <td>Rp <?= number_format($row['harga']); ?></td>

                <td><?= $row['status']; ?></td>

                <td><?= $row['tanggal']; ?></td>

                <td>

                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="hapus.php?id=<?= $row['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data?')">
                        Hapus
                    </a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>