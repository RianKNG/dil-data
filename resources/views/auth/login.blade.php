<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Siimple - Bootstrap Landing Page Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link rel="stylesheet" href="{{ asset('adminLTE') }}/plugins/fontawesome-free/css/all.min.css">
  <link href="assets/img/favicon.png" rel="icon"> --}}
  <link href="{{ asset('adminLTE') }}/templatedepan/img/logo.png" rel="icon">
  <link href="{{ asset('adminLTE') }}/templatedepan/img/apple-touch-icon.png" rel="apple-touch-icon">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('adminLTE') }}/templatedepan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="{{ asset('adminLTE') }}/templatedepan/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  {{-- <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> --}}

  <!-- Template Main CSS File -->
  <link href="{{ asset('adminLTE') }}/templatedepan/css/style.css" rel="stylesheet">
  {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}

  <!-- =======================================================
  * Template Name: Siimple
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid">

      <div class="logo">
        <h1><img src="{{ asset('adminLTE') }}/templatedepan/img/logo.png" alt="..."></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <button type="button" class="nav-toggle"><i class="bx bx-menu"></i></button>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#header" class="scrollto">Home</a></li>
          <li><a href="#about" class="scrollto">Visi Misi</a></li>
          <li><a href="#why-us" class="scrollto">Kegatan</a></li>
          <li><a href="#footer" class="scrollto">Pertanyaan</a></li>
          </li>
          {{-- <li><a href="#contact" class="scrollto">Contact Us</a></li> --}}
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      
      <h1><p class="empat"><b>SELAMAT DATANG DI SIP DIL</b></p></h1>
      <style>
   p {
     /* width: 500px;
     height: 50px;
     border: 4px solid green;
     margin: 10px; */
   }
   /* .empat {border-radius: 40px;} */
   .empat {color: rgb(23, 7, 87);}
   .lima {color: rgb(232, 242, 242);}
   .enam {
     font-style: 'oblique';
     color: rgb(29, 211, 47);
     }
     .kotak1{
       
       border-radius: 40px 40px 40px 40px;
     }
     .kotak{
       background: #fcfcfc;
       padding: 20px;
       width: 600px;
       float: left;
       margin: 20px;
       height: 500px;
     }
</style>
     
      {{-- <h2><p class="enam"> <b>S i l a h k a n, l o g i n T e r l e b i h d a h u l u!</b></p></h2> --}}

      <form action="{{ route('login') }}" method="post" role="form" class="php-email-form">
        @csrf
        <div class="row no-gutters">
          
          <div class="col-md-6 form-group pl-md-1">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu" required>
          </div>
		  <div class="col-md-6 form-group pr-md-1">
            <input type="password" name="password" class="form-control" id="name" placeholder="Nama Kamu" required>
          </div>
        </div>

        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Terimakasih, Email kamu telah terkirim!</div>
        </div>
		      <a href="{{ route('register') }}">Register?</a>
        <div class="text-center"><button type="submit">Login</button></div>
      </form>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('adminLTE') }}/templatedepan/img/about-img.jpg" class="img-fluid kotak kotak1" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Visi PDAM Tirta Medal Kabupaten Sumedang</h3>
            <p class="fst-italic">
              ”MENJADIKAN PERUSAHAAN YANG SEHAT, MAJU, PROFESIONAL DENGAN PELAYANAN YANG ANDAL DAN MANDIRI DI TAHUN 2025“
            </p>
            <h3>Misi PDAM Tirta Medal Kabupaten Sumedang</h3>
            <ul>
              <li><i class="bx bx-check-double"></i> 1. Meningkatkan Pemanfaatan Sumber Daya Air Baku</li>
              <li><i class="bx bx-check-double"></i> 2. Meningkatkan Pelayanan Prima Melalui Pemenuhan K-3, Kualitas Kuantitas Dan Kontinuitas</li>
              <li><i class="bx bx-check-double"></i>3. Meningkatkan Cakupan Pelayanan</li>
              <li><i class="bx bx-check-double"></i> 4. Meningkatkan Kinerja Dan Kompetensi SDM</li>
              <li><i class="bx bx-check-double"></i> 5. Meningkatkan Laba Usaha Melalui Penjualan Air Minum</li>
              <li><i class="bx bx-check-double"></i>6. Meningkatkan Kesejahteraan SDM
              </li>
            </ul>
            <p>
              2M Kita Bisa
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="{{ asset('adminLTE') }}/templatedepan/img/why-us-1.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-book-reader"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">PERENCANAAN</a></h5>
                <p class="card-text">Pembahasan Dengan Direktur Utama mengenasi rencana bisnis plan . </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="{{ asset('adminLTE') }}/templatedepan/img/why-us-2.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-calendar-edit"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">DISKUSI</a></h5>
                <p class="card-text">Kegiatan diskusi Kasubag UntukKemajuan Perusahaan Perumdam Sumedang. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
              <img src="{{ asset('adminLTE') }}/templatedepan/img/why-us-3.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="bx bx-landscape"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">KELAPANGAN</a></h5>
                <p class="card-text">Kegiatan Lapangan Keteknikan diperumdam Sumedang. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Frequenty Asked Questions Section ======= -->
    <section class="faq">
      <div class="container">

        <div class="section-title">
          <h2>Kenapa TIM HUMAS & VDPR Membuat Aplikasi ini</h2>
        </div>

        <ul class="faq-list">
          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dari Segi Kebutuhan? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Berusaha Memenuhi Keinginan Direksi dalam Kemudahan dalam Update dan akses data
              </p>
            </div>
          </li>
          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Dari Segi Teknologi? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Memanfaatkan Tekhnologi untuk Memudahkan Pengolahan data Bagi cabang dan Unit sehingga dimanapun dapat dilakukan karena dapat dilakukan pengapdetan lewat HP dan Kompute.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Dari Segi Laporan? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dapat Dilihat dengan Mudah dibaca Karena Ditampilkan dalam Bentuk Grafik dan Tabel.
              </p>
            </div>
          </li>

          

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Kekurangan? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Mungkin Butuh Pengembangan dan harus sesuainya format data dan harus mengumpulkan data yang valid dan mungkin dalam perjalan menemukan masalah baru yang harus selesai sesuai target yang ditentukan.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Harapan? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
               Membuat Record falam bentuk Soft Cpy dan Hard Copy untuk mempercepat laporan
              </p>
            </div>
          </li>


        </ul>

      </div>
    </section><!-- End Frequenty Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    {{-- <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
            <div class="info">
              <div class="address">
                <i class="bx bx-map"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bx bx-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bx bx-phone-call"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-7">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section --> --}}

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Dibuat <strong><span>Bagian Humas</span></strong>. Perumdam Kabupaten Sumedang
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-landing-page/ -->
         Tahun2023 
      </div>
    </div>
  </footer><!-- End #footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('adminLTE') }}/templatedepan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
  <script src="{{ asset('adminLTE') }}/templatedepan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('adminLTE') }}/templatedepan/js/main.js"></script>

</body>

</html>