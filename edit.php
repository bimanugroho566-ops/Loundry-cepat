<?php
include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $jenis = $_POST['jenis'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $tanggal = $_POST['tanggal'];

    mysqli_query($koneksi,"UPDATE pesanan SET
        nama='$nama',
        no_hp='$no_hp',
        jenis='$jenis',
        berat='$berat',
        harga='$harga',
        status='$status',
        tanggal='$tanggal'
        WHERE id='$id'");

    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<title>Edit Pesanan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card">

<div class="card-header">

<h3>Edit Pesanan</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>" required>
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control" value="<?= $row['no_hp']; ?>" required>
</div>

<div class="mb-3">
<label>Jenis</label>
<input type="text" name="jenis" class="form-control" value="<?= $row['jenis']; ?>" required>
</div>

<div class="mb-3">
<label>Berat</label>
<input type="number" name="berat" class="form-control" value="<?= $row['berat']; ?>" required>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>
</div>

<div class="mb-3">
<label>Status</label>
<input type="text" name="status" class="form-control" value="<?= $row['status']; ?>" required>
</div>

<div class="mb-3">
<label>Tanggal</label>
<input type="date" name="tanggal" class="form-control" value="<?= $row['tanggal']; ?>" required>
</div>

<button type="submit" name="update" class="btn btn-primary">
Simpan Perubahan
</button>

<a href="dashboard.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

</body>
</html>