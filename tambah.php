<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama     = $_POST['nama'];
    $no_hp    = $_POST['no_hp'];
    $jenis    = $_POST['jenis'];
    $berat    = $_POST['berat'];
    $harga    = $_POST['harga'];
    $status   = $_POST['status'];
    $tanggal  = $_POST['tanggal'];

    mysqli_query($koneksi,"INSERT INTO pesanan
    VALUES(
    '',
    '$nama',
    '$no_hp',
    '$jenis',
    '$berat',
    '$harga',
    '$status',
    '$tanggal'
    )");

    echo "
    <script>
    alert('Data Berhasil Ditambahkan');
    window.location='dashboard.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<title>Tambah Pesanan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h3>Tambah Pesanan Laundry</h3>

</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>No HP</label>
<input type="text" name="no_hp" class="form-control" required>
</div>

<div class="mb-3">
<label>Jenis Laundry</label>
<select name="jenis" class="form-control">

<option>Cuci Kering</option>
<option>Cuci Setrika</option>
<option>Setrika</option>
<option>Express</option>

</select>
</div>

<div class="mb-3">
<label>Berat (Kg)</label>
<input type="number" name="berat" class="form-control" required>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" required>
</div>

<div class="mb-3">
<label>Status</label>

<select name="status" class="form-control">

<option>Diproses</option>
<option>Dicuci</option>
<option>Disetrika</option>
<option>Selesai</option>

</select>

</div>

<div class="mb-3">
<label>Tanggal</label>
<input type="date" name="tanggal" class="form-control" required>
</div>

<button class="btn btn-success" name="simpan">

Simpan

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