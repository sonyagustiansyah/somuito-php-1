<?php
// beli.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dapatkan Produk - PT. Somuito</title>
  <meta name="description" content="Dapatkan produk kampas rem Somuito dengan standar OEM. Tersedia melalui dealer resmi di 9 kota besar dan official marketplace Tokopedia, Shopee, Lazada.">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="/id/index.html">
            <img src="../../assets/gambar/logo.webp" alt="Logo PT. Somuito" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="../index.php#home">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php#about">Tentang Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php#product">Produk</a></li>
            <li class="nav-item"><a class="nav-link active" href="beli.php">Dapatkan Produk</a></li>
            <li class="nav-item"><a class="nav-link" href="../index.php#news">Berita</a></li>
            <li class="nav-item"><a class="nav-link" href="../hubungi/hubungi.php">Hubungi Kami</a></li>
            </ul>
            <ul class="navbar-nav mb-2 mx-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#contact"><img src="../../assets/gambar/email.webp" alt="Ikon Email PT. Somuito" loading="lazy" style="width: 30px; height: 30px;"></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><img src="../../assets/gambar/whatsapp.webp" alt="Ikon WhatsApp PT. Somuito" loading="lazy" style="width: 30px; height: 30px;"></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact"><img src="../../assets/gambar/instagram.webp" alt="Ikon Instagram PT. Somuito" loading="lazy" style="width: 30px; height: 30px;"></a></li>
            </ul>
            <div class="d-flex">
            <select class="form-select" aria-label="Pilih Bahasa" onchange="location = this.value;">
                <option value="beli.php" selected>ID</option>
                <option value="../../en/beli/beli.php">EN</option>
                <option value="../../zh/beli/beli.php">CN</option>
            </select>
            </div>
        </div>
        </div>
    </nav>

    <br><br><br><br>

  <!-- Header -->
  <header class="pt-5 text-center py-5">
    <div class="container">
      <h1 class="fw-bold">Dapatkan Produk</h1>
      <p>Ingin beli Brake Pad dan Brake Shoe untuk berbagai jenis dan model mobil? Produk Somuito dapat Anda pesan dengan mudah melalui WhatsApp Marketing, Dealer Somuito, ataupun Official Marketplace.</p>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card h-100">
                        <img src="../../assets/gambar/distribusi.webp" class="card-img-top" alt="Ilustrasi distribusi produk Somuito" loading="lazy">
                        <div class="card-body">
                        <h5 class="card-title">Jangkauan Luas</h5>
                        <p class="card-text">Produk Somuito sudah tersedia dan terdistribusi ke berbagai kota besar di seluruh Indonesia.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card h-100">
                        <img src="../../assets/gambar/standard.webp" class="card-img-top" alt="Ilustrasi kualitas OEM Somuito" loading="lazy">
                        <div class="card-body">
                        <h5 class="card-title">Standar OEM</h5>
                        <p class="card-text">Setiap produk Somuito diproduksi di pabrik dengan standar dan sertifikasi OEM, sehingga kualitasnya terjamin.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card h-100">
                        <img src="../../assets/gambar/hemat.webp" class="card-img-top" alt="Ilustrasi produk hemat dari Somuito" loading="lazy">
                        <div class="card-body">
                        <h5 class="card-title">Harga Kompetitif</h5>
                        <p class="card-text">Somuito menawarkan produk dengan harga yang kompetitif dan ramah di kantong tanpa mengurangi kualitas.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="card h-100">
                        <img src="../../assets/gambar/kualitas.webp" class="card-img-top" alt="Ilustrasi kualitas terbaik produk Somuito" loading="lazy" style="height: 194px;">
                        <div class="card-body">
                        <h5 class="card-title">Kualitas Unggulan</h5>
                        <p class="card-text">Somuito berkomitmen menghadirkan produk Kampas Rem mobil dengan mutu terbaik untuk kenyamanan dan keamanan berkendara.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

      <h2>Tersebar Di 9 Kota Besar</h2>
      <p>Somuito memiliki 9 dealer resmi yang tersebar di 9 kota besar, yaitu: Jakarta, Jawa Barat, Jawa Tengah, Sulawesi, Kalimantan Tengah dan Kalimantan Selatan.</p>
      <img src="../../assets/gambar/area.webp" alt="Peta dealer resmi Somuito di 6 kota besar Indonesia" loading="lazy" class="img-fluid" style="max-width: 700px; height: auto;">
      
      <h2 class="text-start">Dealer Somuito</h2>
      <p class="text-start">Lihat daftar Dealer di bawah ini:</p>
      <div class="row row-cols-2 row-cols-md-5 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Jakarta</span>
              <h5 class="card-title">PT. Immmanuel Global Santosa</h5>
              <p class="card-text">Alamat: JL. Kelapa Gading Boulevard Blok RA-11 No.14 RT.007 RW.015 Kel.Pegangsaan Dua Kec.Kelapa</p>
              <p class="card-text">Telp: 087877266089</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Jawa Barat</span>
              <h5 class="card-title">PT. Anugerah Jabar Prima</h5>
              <p class="card-text">Alamat: Perum Bumi Asri Sukapura Jl. Kiara Asri VI No.6, Kel.Sukapura Kec. Kiaracondong Bandung - 40285</p>
              <p class="card-text">Telp: 08118881996</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Jawa Tengah</span>
              <h5 class="card-title">PT. Anugerah Internusa Prima</h5>
              <p class="card-text">Alamat: JL. Kawasan Komersial Puri Diamond Anjasmoro KAV.3 Tawang Sari Semarang Barat Semarang, Jawa Tengah</p>
              <p class="card-text">Telp: 08118881996</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Kalimantan Selatan</span>
              <h5 class="card-title">PT. Anugerah Champion Prima</h5>
              <p class="card-text">Alamat: JL. A. Yani KM.14,200 RT 017 RW.006 Gambut, Gambut Kab. Banjar, Banjarmasin</p>
              <p class="card-text">Telp: 0511-7247070</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Sulawesi</span>
              <h5 class="card-title">PT. Anugerah Jasa Automotive</h5>
              <p class="card-text">Alamat: JL. Mesjid Raya No.154 Tompo Balang, Bontoala Makassar</p>
              <p class="card-text">Telp: 0411-859013</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Kalimantan Barat</span>
              <h5 class="card-title">PT. Anugerah Indoputra Panca Persada</h5>
              <p class="card-text">Alamat: JL. Sei Raya Dalam Komp.Permata Khatusitiwa NO.1.A RT.003 RW.001 Sungai Raya Pontianak, Kalimantan Barat</p>
              <p class="card-text">Telp: 0561-6783423</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Bangka Belitung</span>
              <h5 class="card-title">CV. Galaxy Mandiri</h5>
              <p class="card-text">Alamat: Jalan Mentok Gang Depanas I RT.004 RW.002 Kace Timur Mendo Barat Kab. Bangka Belitung</p>
              <p class="card-text">Telp: 0812-7174-725</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Sumatera Selatan</span>
              <h5 class="card-title">PT. Anugerah Sumsel Prima</h5>
              <p class="card-text">Alamat: JL. Sei Rambang Ruko NO.831C RT.01 RW.04 KEL. Siring Agung KEC. Ilir Barat 1, Palembang</p>
              <p class="card-text">Telp: 081377964517</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <span class="badge text-bg-warning">Bandar Lampung</span>
              <h5 class="card-title">Home ACCU</h5>
              <p class="card-text">Alamat: JL. Pulau Legundi No.318 Sukarame, Kec. Sukarame Bandar Lampung</p>
              <p class="card-text">Telp: 085379238828</p>
            </div>
          </div>
        </div>
      </div>

      <br><br>

      <h2 class="text-start">Marketplace Somuito</h2>
      <p class="text-start">Anda juga bisa beli langsung produk Somuito melalui Official Marketplace Somuito berikut:</p>
      <div class="row row-cols-2 row-cols-md-5 g-4">
        <div class="col">
          <div class="card h-100">
            <a href="#" target="_blank">
              <img src="../../assets/gambar/tokopedia.webp" class="card-img-top" alt="Beli produk Somuito di Tokopedia" loading="lazy">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="#" target="_blank">
              <img src="../../assets/gambar/shopee.webp" class="card-img-top" alt="Beli produk Somuito di Shopee" loading="lazy">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="#" target="_blank">
              <img src="../../assets/gambar/lazada.webp" class="card-img-top" alt="Beli produk Somuito di Lazada" loading="lazy">
            </a>
          </div>
        </div>
      </div>

      <br>

      <a href="../index.php" class="btn btn-primary mt-3">
        Kembali
      </a>
    </div>
  </header>

  <!-- Footer / Contact -->
  <footer id="contact" class="bg-dark py-5">
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
            <li style="font-size: 14px;"><a href="beli.php">Dapatkan Produk</a></li>
            <li style="font-size: 14px;"><a href="../index.php">Berita</a></li>
            <li style="font-size: 14px;"><a href="../hubungi/hubungi.php">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="col-md-5 mb-3">
          <h5 style="font-size: 24px;">Hubungi Kami</h5>
          <p>
            <img src="../../assets/gambar/email.webp" alt="Ikon Email PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=marketing@somuito.com&su=Your Subject&body=Your message here" target="_blank">marketing@somuito.com</a>
          </p>
          <p>
            <img src="../../assets/gambar/whatsapp.webp" alt="Ikon WhatsApp PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://wa.link/otl4e9" target="_blank">0812-1989-4870</a>
          </p>
          <p>
            <img src="../../assets/gambar/instagram.webp" alt="Ikon Instagram PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://www.instagram.com/somuito.official?igsh=MThkZnpwc3JwY3JxbQ==" target="_blank">somuito.official</a>
          </p>
          <p>
            <img src="../../assets/gambar/alamat.webp" alt="Ikon Alamat Kantor PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://maps.app.goo.gl/3qqeSiooQg7oTZY96" target="_blank">Jl Pulo Kambing II, Kav 2-1 No. 20 13930 Jakarta</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>