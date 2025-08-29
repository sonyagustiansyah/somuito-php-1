<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PT. Somuito - Kampas Rem & Komponen Rem Berkualitas</title>
  <meta name="description" content="PT. Somuito adalah produsen kampas rem dan komponen rem kendaraan dengan teknologi Jepang dan bahan baku impor. Kualitas OEM dan ramah lingkungan.">
  <meta name="keywords" content="Somuito, kampas rem, brake pads, brake shoes, komponen rem, rem kendaraan, teknologi Jepang">
  <meta name="author" content="PT. Somuito">
  <link rel="canonical" hreflang="id" href="https://www.somuito.co.id/id/">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="../assets/gambar/logo.webp" alt="PT. Somuito - Produsen Kampas Rem Berkualitas" loading="lazy" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="#product">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#buy">Dapatkan Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#news">Berita</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
        </ul>
        <ul class="navbar-nav mb-2 mx-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#contact"><img src="../assets/gambar/email.webp" alt="Hubungi PT. Somuito via Email" loading="lazy" style="width: 30px; height: 30px;"></a></li>
          <li class="nav-item"><a class="nav-link" href="#contact"><img src="../assets/gambar/whatsapp.webp" alt="Chat PT. Somuito melalui WhatsApp" loading="lazy" style="width: 30px; height: 30px;"></a></li>
          <li class="nav-item"><a class="nav-link" href="#contact"><img src="../assets/gambar/instagram.webp" alt="Ikuti Instagram Resmi PT. Somuito" loading="lazy" style="width: 30px; height: 30px;"></a></li>
        </ul>
        <div class="d-flex">
          <select class="form-select" aria-label="Pilih Bahasa" onchange="location = this.value;">
            <option value="index.php" selected>ID</option>
            <option value="../en/index.php">EN</option>
            <option value="../zh/index.php">CN</option>
          </select>
        </div>
      </div>
    </div>
  </nav>

  <!-- Home / Slider -->
  <section id="home" class="pt-5 mt-5">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/gambar/poster1.webp" class="d-block w-100 img-fluid" alt="Produk Brake Pads Somuito - Kualitas OEM" loading="lazy" />
        </div>
        <div class="carousel-item">
          <img src="../assets/gambar/poster2.webp" class="d-block w-100 img-fluid" alt="Produk Brake Shoes Somuito - Ramah Lingkungan" loading="lazy" />
        </div>
        <div class="carousel-item">
          <img src="../assets/gambar/poster3.webp" class="d-block w-100 img-fluid" alt="Kampas Rem Mobil Somuito dengan Teknologi Jepang" loading="lazy" />
        </div>
        <div class="carousel-item">
          <img src="../assets/gambar/poster4.webp" class="d-block w-100 img-fluid" alt="Sertifikat Kualitas Internasional PT. Somuito" loading="lazy" />
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Berikutnya</span>
      </button>
    </div>
  </section>

  <!-- About Us -->
  <section id="about" class="container py-5">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1>Tentang Kami</h1>
        <p>SOMUITO hadir sebagai pelopor inovasi kampas rem mobil premium di Indonesia dengan komitmen memberikan performa pengereman terbaik untuk setiap perjalanan Anda. Dengan tagline "Brake Your Limit", kami menghadirkan solusi kampas rem berkualitas tinggi yang menggabungkan teknologi terdepan dari berbagai negara. Produk unggulan kami meliputi kampas rem Premium Low Metallic dan Ultimate Ceramic yang diformulasikan dengan 4 material premium: Japanese Ceramic Fiber untuk ketahanan maksimal, Korean Glue untuk daya rekat superior, Japanese Resin untuk stabilitas suhu tinggi, dan USA Graphite untuk performa pengereman yang halus dan responsif.</p>
        <p>Kepercayaan pelanggan adalah prioritas utama SOMUITO, oleh karena itu kami beroperasi dengan standar Workshop OE Factory yang dilengkapi Modern Lab berteknologi canggih untuk memastikan setiap produk memenuhi standar kualitas internasional. Dedikasi kami terhadap excellence terbukti melalui berbagai sertifikasi bergengsi dari NSAI, FAKT, LINK, dan lembaga sertifikasi internasional lainnya. Sebagai brand terdepan dalam industri kampas rem, SOMUITO tidak hanya menyediakan produk berkualitas tinggi, namun juga memberikan jaminan keamanan dan performa optimal untuk kendaraan Anda, karena kami memahami bahwa sistem pengereman yang handal adalah kunci keselamatan berkendara.</p>
      </div>
      <div class="col-md-6">
        <img src="../assets/gambar/about-us.webp" class="img-fluid rounded" alt="Pabrik dan Tim PT. Somuito - Tentang Kami" loading="lazy" />
      </div>
    </div>
  </section>

  <!-- Product -->
  <section id="product" class="bg-light py-5">
    <div class="container">
      <h1 class="text-center mb-4">Produk</h1>
      <p class="text-center">Somuito menyediakan 3 jenis Kampas Rem Mobil yang memberikan kenyamanan dan keamanan berkendara yang tak tertandingi dalam segala kondisi.</p>
      <div class="row row-cols-2 row-cols-md-3 g-4">
        
        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/produk1.webp" class="card-img-top" alt="Brake Pads Premium Somuito - Kampas Rem Mobil Berkualitas Tinggi" loading="lazy">
            <div class="card-body">
              <h5 class="card-title">Brake Pads Premium</h5>
              <p class="card-text">Brake Pad mobil berbahan semi-metallic dirancang untuk memberikan daya cengkeram kuat dan tahan panas tinggi, ideal untuk ...</p>
              <a href="produk/brake_pads.php" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/produk2.webp" class="card-img-top" alt="Brake Pads Ultimate Ceramic Somuito - Performa Pengereman Responsif" loading="lazy">
            <div class="card-body">
              <h5 class="card-title">Brake Pads Ultimate Ceramic</h5>
              <p class="card-text">Brake Pad Somuito berbahan ceramic menawarkan pengereman halus, senyap, dan minim debu sehingga velg tetap bersih. ...</p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/produk3.webp" class="card-img-top" alt="Brake Shoes Premium Somuito - Komponen Rem Tahan Lama" loading="lazy">
            <div class="card-body">
              <h5 class="card-title">Brake Shoes Premium</h5>
              <p class="card-text">Brake Shoe Somuito berbahan semi-metallic dirancang untuk memberikan daya cengkeram kuat dan performa pengereman optimal. ...</p>
              <a href="produk/brake_shoes.php" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Brand -->
  <section id="buy" class="py-5">
    <div class="container">
      <h1 class="text-center mb-4">Dapatkan Produk</h1>
      <div class="row text-center">
        <h5>Tersebar Di 9 Kota Besar</h5>
        <p>Somuito memiliki 9 dealer resmi yang tersebar di 9 kota besar, yaitu: Jakarta, Jawa Barat, Jawa Tengah, Kalimantan Selatan, Sulawesi, Kalimantan Barat, Bangka Belitung, Sumatera Selatan dan Bandar Lampung.</p>
        <div class="col">
          <img src="../assets/gambar/area.webp" class="img-fluid mb-2" alt="Peta Jaringan Dealer Resmi PT. Somuito di Indonesia" loading="lazy" />
        </div>
        <div>
        <a href="beli/beli.php" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>

  <!-- News -->
  <section id="news" class="bg-light py-5">
    <div class="container">
      <h1 class="text-center mb-4">Berita</h1>
      <div class="row row-cols-2 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/berita1.webp" class="card-img-top" alt="tanda kampas rem mobil habis" loading="lazy">
            <div class="card-body">
              <span class="badge text-bg-warning">Berita</span>
              <h5 class="card-title">5 Tanda Kampas Rem Mobil Habis yang Wajib Anda Ketahui</h5>
              <p class="card-text">Sistem pengereman adalah salah satu bagian terpenting dalam mobil. Salah satu komponen penting di dalam sistem pengereman adalah ...</p>
              <a href="berita/berita1.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/berita2.webp" class="card-img-top" alt="Artikel: Komponen Rem Tromol Mobil dan Fungsinya" loading="lazy">
            <div class="card-body">
              <span class="badge text-bg-warning">Berita</span>
              <h5 class="card-title">Komponen Rem Tromol Mobil Dan Fungsinya</h5>
              <p class="card-text">Sudahkah Anda familiar dengan istilah Sistem Rem Tromol pada mobil atau yang dikenal juga dengan Drum Brake? Sistem Rem Tromol ...</p>
              <a href="berita/berita2.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/berita3.webp" class="card-img-top" alt="Artikel: Kelebihan dan Kekurangan Rem Cakram Mobil" loading="lazy">
            <div class="card-body">
              <span class="badge text-bg-warning">Berita</span>
              <h5 class="card-title">3 Kelebihan dan Kekurangan Rem Cakram Mobil</h5>
              <p class="card-text">Sistem pengereman merupakan salah satu komponen terpenting dalam Sparepart mobil pada kendaraan apapun, termasuk mobil. ...</p>
              <a href="berita/berita3.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/berita4.webp" class="card-img-top" alt="Artikel: Komponen Rem Cakram Mobil Beserta Fungsinya" loading="lazy">
            <div class="card-body">
              <span class="badge text-bg-warning">Berita</span>
              <h5 class="card-title">Komponen Rem Cakram Mobil Beserta Fungsinya</h5>
              <p class="card-text">Sistem pengereman merupakan salah satu elemen paling krusial dalam Kaki-Kaki mobil. Di antara berbagai jenis sistem rem, Rem ...</p>
              <a href="berita/berita4.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/berita5.webp" class="card-img-top" alt="Artikel: Fungsi dan Cara Kerja Brake Pad Mobil" loading="lazy">
            <div class="card-body">
              <span class="badge text-bg-warning">Berita</span>
              <h5 class="card-title">Brake Pad Mobil: Fungsi dan Cara Kerjanya</h5>
              <p class="card-text">Bagi pemilik atau pengendara mobil, mungkin sudah sering mendengar istilah Brake Pad mobil. Namun, hanya sedikit yang ...</p>
              <a href="berita/berita5.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="../assets/gambar/acara1.webp" class="card-img-top" alt="Acara INAPA 2025 - Booth Ichiban & Somuito" loading="lazy">
            <div class="card-body">
              <span class="badge text-bg-warning">Acara</span>
              <h5 class="card-title">Sukses di Pameran INAPA 2025! Booth Ichiban & Somuito Pikat Lebih dari 300 Pengunjung</h5>
              <p class="card-text">Pameran Dagang Otomotif terbesar di Asia Tenggara, Indonesia International Auto Parts, Accessories and Equipment Exhibition ...</p>
              <a href="berita/acara1.php" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- Footer / Contact -->
  <footer id="contact" class="bg-dark py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-3">
          <img src="../assets/gambar/logo.webp" alt="Logo PT. Somuito" loading="lazy" style="height: 90px;" />
        </div>
        <div class="col-md-4 mb-3">
          <h5 style="font-size: 24px;">Navigasi</h5>
          <ul class="list-unstyled">
            <li style="font-size: 14px;"><a href="#home">Beranda</a></li>
            <li style="font-size: 14px;"><a href="#about">Tentang Kami</a></li>
            <li style="font-size: 14px;"><a href="#product">Produk</a></li>
            <li style="font-size: 14px;"><a href="#buy">Dapatkan Produk</a></li>
            <li style="font-size: 14px;"><a href="#news">Berita</a></li>
            <li style="font-size: 14px;"><a href="#contact">Hubungi Kami</a></li>
          </ul>
        </div>
        <div class="col-md-5 mb-3">
          <h5 style="font-size: 24px;">Hubungi Kami</h5>
          <p>
            <img src="../assets/gambar/email.webp" alt="Email Resmi PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=marketing@somuito.com&su=Your Subject&body=Your message here" target="_blank">marketing@somuito.com</a>
          </p>
          <p>
            <img src="../assets/gambar/whatsapp.webp" alt="Nomor WhatsApp PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://wa.link/otl4e9" target="_blank">0812-1989-4870</a>
          </p>
          <p>
            <img src="../assets/gambar/instagram.webp" alt="Instagram Resmi PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
            <a href="https://www.instagram.com/somuito.official?igsh=MThkZnpwc3JwY3JxbQ==" target="_blank">somuito.official</a>
          </p>
          <p>
            <img src="../assets/gambar/alamat.webp" alt="Alamat Kantor Pusat PT. Somuito" loading="lazy" style="width: 30px; height: 30px;">
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