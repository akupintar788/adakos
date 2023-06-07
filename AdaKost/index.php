<?php
    error_reporting();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/Logo.png" width="300" height="200">
    <link rel="stylesheet" href="Index.css" />
    <title>AdaKos</title>
  </head>
  <body>
    <header>
      <h1>
        <img src="image/Logo2.png" alt="" width="190" height="190">
      </h1>
      <nav>
        <ul>
          <li><a href="PB.php">Pusat Bantuan</a></li>
          <li><a href="SK.php">Syarat dan Ketentuan</a></li>
          <li><a href="Masuk.php">Masuk</a></li>
        </ul>
      </nav>
    </header>
    <div class="hero-container">
      <h2>Cari Kamar Kos?</h2>
      <div id="search-container">
        <input
          type="text"
          id="search-input"
          placeholder="Masukkan tempat yang ingin Anda cari"
        />
        <button id="search-button">Cari</button>
      </div>
      <div id="map"></div>
      <img src="image/Hands.png" alt="" width="300" height="200">
    </div>

    <!-- Konten -->

    <div class="content-container">
      <h3>Kamar Tersedia</h3>
      <div class="slider-container">
        <div class="kamar-list">
          <div class="kamar-item">
            <h4>Kamar Kos 1</h4>
            <p>Lokasi: Jakarta Pusat</p>
            <p>Harga: Rp 1.500.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 2</h4>
            <p>Lokasi: Jakarta Selatan</p>
            <p>Harga: Rp 2.000.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 3</h4>
            <p>Lokasi: Bandung</p>
            <p>Harga: Rp 1.800.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 4</h4>
            <p>Lokasi: Surabaya</p>
            <p>Harga: Rp 1.200.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 5</h4>
            <p>Lokasi: Yogyakarta</p>
            <p>Harga: Rp 1.600.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 6</h4>
            <p>Lokasi: Semarang</p>
            <p>Harga: Rp 1.400.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 7</h4>
            <p>Lokasi: Malang</p>
            <p>Harga: Rp 1.300.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 8</h4>
            <p>Lokasi: Bali</p>
            <p>Harga: Rp 2.500.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 9</h4>
            <p>Lokasi: Medan</p>
            <p>Harga: Rp 1.100.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
          <div class="kamar-item">
            <h4>Kamar Kos 10</h4>
            <p>Lokasi: Makassar</p>
            <p>Harga: Rp 1.700.000/bulan</p>
            <a href="#">Lihat Detail</a>
          </div>
        </div>
        <button class="prev-button"></button>
        <button class="next-button"></button>
      </div>
    </div>

    <!-- Testimoni -->
    <div class="content-container">
      <h4>Testimoni dari pelanggan</h4>
  <div class="testimonials-container">
    <div class="testimonial">
      <div class="testimonial-header">
        <img src="image/Avatar 1.jpg" alt="Avatar" class="avatar">
        <div class="testimonial-info">
          <h3 class="testimonial-name">Fitri</h3>
          <p class="testimonial-place">Jakarta Pusat</p>
        </div>
      </div>
      <p class="testimonial-text">
        Tempat yang nyaman dan bersih. Pelayanan dari pemilik kost juga sangat baik. Saya sangat puas tinggal di sini!
      </p>
    </div>

    <div class="testimonial">
      <div class="testimonial-header">
        <img src="image/Avatar 2.jpg" alt="Avatar" class="avatar">
        <div class="testimonial-info">
          <h3 class="testimonial-name">Jane Smith</h3>
          <p class="testimonial-place">Bandung</p>
        </div>
      </div>
      <p class="testimonial-text">
        Kost ini memiliki fasilitas yang lengkap dan lokasinya strategis. Saya merasa sangat nyaman tinggal di sini.
      </p>
    </div>

    <div class="testimonial">
      <div class="testimonial-header">
        <img src="image/Avatar 3.jpg" alt="Avatar" class="avatar">
        <div class="testimonial-info">
          <h3 class="testimonial-name">Michael Johnson</h3>
          <p class="testimonial-place">Surabaya</p>
        </div>
      </div>
      <p class="testimonial-text">
        Pemilik kost sangat ramah dan membantu. Kamar-kamar juga terawat dengan baik. Saya merekomendasikan kost ini kepada teman-teman saya.
      </p>
    </div>
  </div>
</div>
  
    <script>
      var sliderContainer = document.querySelector(".slider-container");
      var kamarList = document.querySelector(".kamar-list");
      var kamarItems = document.querySelectorAll(".kamar-item");
      var prevButton = document.querySelector(".prev-button");
      var nextButton = document.querySelector(".next-button");
      var currentIndex = 0;

      function showNextSlide() {
        currentIndex++;
        if (currentIndex >= kamarItems.length) {
          currentIndex = 0;
        }
        updateSlider();
      }

      function showPreviousSlide() {
        currentIndex--;
        if (currentIndex < 0) {
          currentIndex = kamarItems.length - 1;
        }
        updateSlider();
      }

      function updateSlider() {
        kamarList.style.transform = "translateX(-" + currentIndex * 100 + "%)";
      }

      prevButton.addEventListener("click", showPreviousSlide);
      nextButton.addEventListener("click", showNextSlide);
    </script>
    <footer class="footer">
      <p>&copy; 2023 Ada Kos. All rights reserved.</p>
    </footer>
  </body>
</html>