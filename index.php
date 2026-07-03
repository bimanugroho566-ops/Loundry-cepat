<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LaundryPro</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
🧺 LaundryPro
</a>

<button class="navbar-toggler" type="button"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link active" href="#home">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#layanan">Layanan</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#harga">Harga</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#kontak">Kontak</a>
</li>

</ul>

<a href="login.php" class="btn btn-light rounded-pill px-4 ms-3">

<i class="bi bi-person-circle"></i>

Login Admin

</a>

</div>

</div>

</nav>

<section class="hero" id="home">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<span class="badge bg-primary mb-3">

Laundry Modern 2026

</span>

<h1 class="display-3 fw-bold">

Laundry Lebih Cepat,
Lebih Bersih,
Lebih Modern.

</h1>

<p class="lead">

Kelola pesanan pelanggan, transaksi, dan laporan laundry dalam satu aplikasi profesional.

</p>

<div class="mt-4">

<a href="login.php" class="btn btn-primary btn-lg rounded-pill">

<i class="bi bi-box-arrow-in-right"></i>

Masuk Admin

</a>

<a href="#layanan" class="btn btn-outline-primary btn-lg rounded-pill ms-2">

Lihat Layanan

</a>

</div>

</div>

<div class="col-lg-6 text-center">

<img src="https://cdn-icons-png.flaticon.com/512/3082/3082037.png"
class="img-fluid hero-image">

</div>

</div>

</div>

</section>

<section id="layanan" class="container py-5">

<h2 class="text-center mb-5">

Layanan Kami

</h2>

<div class="row">

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>Cuci Kering</h4>

<p>Pakaian bersih dan wangi.</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>Cuci Setrika</h4>

<p>Pakaian rapi siap dipakai.</p>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>Express</h4>

<p>Selesai dalam hitungan jam.</p>

</div>

</div>

</div>

</div>

</section>

<section id="harga" class="container py-5">

<h2 class="text-center mb-4">

Harga Laundry

</h2>

<table class="table table-bordered text-center">

<tr>

<th>Layanan</th>

<th>Harga</th>

</tr>

<tr>

<td>Cuci Kering</td>

<td>Rp7.000/Kg</td>

</tr>

<tr>

<td>Cuci Setrika</td>

<td>Rp9.000/Kg</td>

</tr>

<tr>

<td>Express</td>

<td>Rp15.000/Kg</td>

</tr>

</table>

</section>

<section id="kontak" class="bg-dark text-white text-center py-5">

<h2>Kontak</h2>

<p>0812-3456-7890</p>

<p>laundrypro@gmail.com</p>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>