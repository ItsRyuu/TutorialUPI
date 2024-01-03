<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Start of Async Drift Code -->
<script>
  "use strict";
  
  !function() {
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
      if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
      t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
      t.factory = function(e) {
        return function() {
          var n = Array.prototype.slice.call(arguments);
          return n.unshift(e), t.push(n), t;
        };
      }, t.methods.forEach(function(e) {
        t[e] = t.factory(e);
      }), t.load = function(t) {
        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(o, i);
      };
    }
  }();
  drift.SNIPPET_VERSION = '0.3.1';
  drift.load('kccfc4udwmun');
  </script>
  <!-- End of Async Drift Code -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutorial UPI</title>
    <link rel="icon" type=”image/png” href="img/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--MyStle-->
    <link rel="stylesheet" href="css/stylehome.css" />
  </head>
  <body>
    <!-- Navbar Start-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Tutorial<span>UPI</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#materi">Download</a>
        <a href="#rekap">Rekapan</a>
      </div>

      <div class="navbar-extra">
        
        <!-- <a href="#" id="search-button"><i data-feather="search"></i></a> -->
        <a href="/login"><button class="login-btn">Login</button></a>
      </div>

      <!-- Searching Form Start -->

      <!-- <div class="search-form">

        <input type="search" id="search-box" placeholder="search here ...">
        <label for="search-box"><i data-feather="search"></i></label>
        
      </div> -->
      
      <!-- Searching Form End -->

    </nav>

    <!-- Navbar End-->

    <!--Hero Section Start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Cerdas Ikhlash Istiqomah</h1>
        <h1><span>Allahu Akbar!</span></h1>
        <a href="#" class="cta">Discover Now</a>
        </div>
      </main>
    </section>
    <!--Hero Section End-->

    <!-- About Section -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/JBI.JPG" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Tutorial <span>UPI</span> ?</h3>
          <p>
            Tutorial UPI adalah organisasi yang berfokus dalam pelaksanaan program tutorial demi terwujudnya moto kampus UPI yang religius dimana para mahasiswa diwajibkan untuk mengikuti program tersebut guna meningkatkan kapabilitas dan kualitas pengontrak mata kuliah PAI-SPAI dalam menerapkan nilai-nilai Agama Islam yang diterimanya dalam perkuliahan, yang mengarahkan kegiatannya pada aspek pembinaan secara lebih luas, sehingga tidak hanya sebatas berupa mentoring saja.
          </p>
          <p>
            Saat ini Tutorial UPI berada dalam naungan FPIPS yang terbagi ke dalam dua program utama, yaitu program PAI dan program SPAI.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Materi Section Start-->
    <section class="materi" id="materi">
      <h2><span>Download </span>Materi</h2>
      <div class="row">
        @foreach($posts as $post)
        <div class="materi-card" href={{ $post->link }}>
          <div class="materi-icon">
            <a href=https://docs.google.com/presentation/d/e/2PACX-1vTdMXuKd0WprtztMOu2e6Cy0sCl2NYNf3pB5ZsMYrZKrvfPgx1qr-VyBZARC5ymRQ/embed?start=true&loop=true&delayms=3000&slide=id.p1>
          </div>
          <div class="materi-image">
            <iframe src="{{ $post->linkimage }}" class="diorama" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
          </div>
          <div class="materi-content">
            <h3>{{ $post->judul }}</h3></a>
            <div class="materi-detail">Tutorial<span> UPI</span></div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- Materi Section End-->

    <!-- Rekap Section Start -->
    <section id="rekap" class="rekap">
      <h2><span>Rekapan</span> Presensi</h2>
      <div class="row">
          @foreach($absens as $absen)
          <iframe
              src="{{ $absen->link }}"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              class="map"
          ></iframe>
          @endforeach
      </div>
  </section>
  

    <!-- Rekap Section End -->
    
    <!-- Contact Section Start -->

    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.229313416981!2d107.59093117581233!3d-6.863099167148798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bebf610707%3A0x16daa07b0d933f93!2sMasjid%20Al-Furqan%20UPI!5e0!3m2!1sid!2sid!4v1702777552955!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="message-circle"></i>
            <input type="text" placeholder="apa yang Anda pikirkan ?" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>

    <!-- Contact Section End -->

    <!-- Footer Start -->

    <footer>
      <div class="social">
        <a href="https://www.instagram.com/tutorialupi/"
          ><i data-feather="instagram"></i
        ></a>

        <a href="https://www.youtube.com/@tutorialupi7633"
          ><i data-feather="youtube"></i
        ></a>

        <a href="https://www.facebook.com"
          ><i data-feather="facebook"></i
        ></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#materi">Download Materi</a>
        <a href="#rekap">Rekapan Presensi</a>
      </div>

      <div class="credit">
        <p>
          Copyright @2023 By
          <a href="https://www.instagram.com/tutorialupi/">Tutorial UPI.</a>
        </p>
      </div>
    </footer>

    <!-- Footer End -->

    <!-- Modal Box Discover Now Button Start -->
    <div class="modal" id="item-detail-modal">
      <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
          <video  controls id="kenalan">
            <source src="Video/kenalan.mp4" type="video/mp4" />
          </video>
        </div>
      </div>
    </div>
    <!-- Modal Box Discover Now Button End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!--My Javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
