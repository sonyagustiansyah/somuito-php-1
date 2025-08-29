<?php
include '../config.php';

// Proses simpan data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand_mobil    = $_POST['brand_mobil'];
    $nama_mobil     = $_POST['nama_mobil'];
    $description    = $_POST['description'];
    $genuine_number = $_POST['genuine_number'];
    $posisi         = $_POST['posisi'];

    $stmt = $conn->prepare("INSERT INTO brake_shoes_premium (brand_mobil, nama_mobil, description, genuine_number, posisi) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $brand_mobil, $nama_mobil, $description, $genuine_number, $posisi);

    if ($stmt->execute()) {
        $success = "Data berhasil ditambahkan!";
    } else {
        $error = "Gagal menambahkan data.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Brake Shoes Premium</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.php">
        <img src="../../assets/gambar/logo.webp" alt="PT. Somuito - Produsen Kampas Rem Berkualitas" loading="lazy" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="../index.php#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.php#about">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.php#product">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="../beli/beli.php">Dapatkan Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.php#news">Berita</a></li>
          <li class="nav-item"><a class="nav-link" href="../hubungi/hubungi.php">Hubungi Kami</a></li>
        </ul>
        <ul class="navbar-nav mb-2 mx-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#contact"><img src="../../assets/gambar/email.webp" alt="Hubungi PT. Somuito via Email" loading="lazy" style="width: 30px; height: 30px;"></a></li>
          <li class="nav-item"><a class="nav-link" href="#contact"><img src="../../assets/gambar/whatsapp.webp" alt="Chat PT. Somuito melalui WhatsApp" loading="lazy" style="width: 30px; height: 30px;"></a></li>
          <li class="nav-item"><a class="nav-link" href="#contact"><img src="../../assets/gambar/instagram.webp" alt="Ikuti Instagram Resmi PT. Somuito" loading="lazy" style="width: 30px; height: 30px;"></a></li>
        </ul>
        <div class="d-flex">
          <select class="form-select" aria-label="Pilih Bahasa" onchange="location = this.value;">
            <option value="add_brake_shoes.php" selected>ID</option>
            <option value="../../en/produk/add_brake_shoes.php">EN</option>
            <option value="../../zh/produk/add_brake_shoes.php">CN</option>
          </select>
        </div>
      </div>
    </div>
  </nav>

  <br><br><br><br><br>

<div class="container mt-5">
  <h2 class="mb-4 text-center">Tambah Brake Shoes Premium</h2>

  <?php if (!empty($success)): ?>
    <div class="alert alert-primary"><?= $success ?></div>
  <?php elseif (!empty($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
  <?php endif; ?>

  <form method="POST">
    <div class="mb-3">
      <label class="form-label">No. OEM</label>
      <input type="text" name="genuine_number" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Brand Mobil</label>
      <input type="text" name="brand_mobil" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Nama Mobil/Model Mobil</label>
      <textarea name="description" class="form-control" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Posisi</label>
      <select name="posisi" class="form-select" required>
        <option value="">-- Pilih Posisi --</option>
        <option value="Front">FRONT</option>
        <option value="Rear">REAR</option>
        <option value="Front & Rear">FRONT & REAR</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="brake_shoes.php" class="btn btn-warning">Lihat Detail</a>
  </form>
</div>

<!-- Footer / Contact -->
  <footer id="contact" class="bg-dark py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-3">
          <img src="../../assets/gambar/logo.webp" alt="Logo PT. Somuito" loading="lazy" style="height: 90px;" />
        </div>
        <div class="col-md-4 mb-3">
          <h5 style="font-size: 24px;">Navigasi</h5>
          <ul class="list-unstyled">
            <li style="font-size: 14px;"><a href="../index.php">Beranda</a></li>
            <li style="font-size: 14px;"><a href="../index.php">Tentang Kami</a></li>
            <li style="font-size: 14px;"><a href="../index.php">Produk</a></li>
            <li style="font-size: 14px;"><a href="../beli/beli.php">Dapatkan Produk</a></li>
            <li style="font-size: 14px;"><a href="../index.php">Berita</a></li>
            <li style="font-size: 14px;"><a href="../hubungi/hubungi.php">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="col-md-5 mb-3">
          <h5 style="font-size: 24px;">Hubungi Kami</h5>
          <p>
            <img src="../../assets/gambar/email.webp" alt="Email Resmi PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=marketing@somuito.com&su=Your Subject&body=Your message here" target="_blank">marketing@somuito.com</a>
          </p>
          <p>
            <img src="../../assets/gambar/whatsapp.webp" alt="Nomor WhatsApp PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://wa.link/otl4e9" target="_blank">0812-1989-4870</a>
          </p>
          <p>
            <img src="../../assets/gambar/instagram.webp" alt="Instagram Resmi PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://www.instagram.com/somuito.official?igsh=MThkZnpwc3JwY3JxbQ==" target="_blank">somuito.official</a>
          </p>
          <p>
            <img src="../../assets/gambar/alamat.webp" alt="Alamat Kantor Pusat PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://maps.app.goo.gl/3qqeSiooQg7oTZY96" target="_blank">Jl Pulo Kambing II, Kav 2-1 No. 20 13930 Jakarta</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <div class="text-center small mt-3">
    <p>&copy; 2025 PT. Somuito. All Rights Reserved.</p>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>