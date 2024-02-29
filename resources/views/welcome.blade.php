<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: 
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>เจ้สาวข้าว<span>มันไก่</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">หน้าหลัก</a></li>
          <li><a href="#about">ประวัติร้าน</a></li>
          <li><a href="#menu">เมนู</a></li>
          <li><a href="#chefs">เจ้าของร้าน</a></li>
          <li><a href="#contact">ที่ตั้ง</a></li>
          <li><a href="{{ route('login' ) }}">เข้าสู่ระบบ</a></li>
          <li><a href="{{ route('register') }}">สมัครสมาชิก</a></li>
        </ul>
      </nav><!-- .navbar -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">ยินดีต้อนรับสู่<br>หน้าเว็บไซต์ร้านอาหารของเรา</h2>
          <p data-aos="fade-up" data-aos-delay="100"></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="{{ asset('frontend/assets/img/hero-img.png') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p><span>ประวัติร้าน</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url({{ asset('frontend/assets/img/about.jpg') }}" ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>สั่งอาหารร้านข้าวมันไก่เจ๊สาว</h4>
              <p>099-457-5444</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                จุดเริ่มต้นมาจากจากลุงอ้วนพระสุมทรเจดี ลุงเห็นคุณสาวแล้วรู้สึกถูกชะตาเพราะเริ่มต้นจากสามีพาคุณสาวไปงานบวชของเพื่อนเลยได้ไปพบกับลุงอ้วนหรือลุงหมึกเพราะคุณสาวได้พูดกับเพื่อนของสามีว่าอยากเปิดร้านขายข้าวสักร้านเพื่อนของสามีคุณสาวเลยพาไปแนะนำกับ
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i>ขายมา 11ปี</li>
                <li><i class="bi bi-check2-all"></i> เพราะมันเป็นอาชีพที่เราถนัดอยากมีร้านเป็นของตัวเองชอบการค้าขาย ต้นเหตุมาจากอะไรถึงขายข้าวมันไก่</li>
                <li><i class="bi bi-check2-all"></i> เพราะไม่อยากเป็นลูกน้องใครอยากเป็นนายตัวเองรักในอาชีพอิสระ </li>
              </ul>
              <p>
                ลุงอ้วนพระสมุทรเจดีหรือลุงหมึกและลุงหมึกได้เห็นคุณสาวแล้วรู้สึกถูกชะตาเห็นว่าเป็นคนจิตใจดีและเห็นว่ามีความมานะในการอยากขายข้าวลุงเลยสอนวิธีทำข้าวมันไก่ให้สูตรไปแบบไม่คิดเงินเลยสักบาทเดียว
              </p>

              <div class="position-relative mt-4">
                <img src="{{ asset('frontend/assets/img/about-2.jpg') }}" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
      
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>เมนูของ <span>ทางร้าน</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>หน้าเเรก</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>หน้าที่สอง</h4>
            </a>
          </li><!-- End tab nav item -->

      

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h5>เมนู</h5>
              <h3>อาหาร</h3>
            </div>

            <div class="row gy-5">

            
              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu/menu-item-1.jpg)') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu/menu-item-1.jpg') }}" class="menu-img img-fluid" alt=""></a>
                <h4>ข้าวมันไก่ต้ม</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  ธรรมดา 50 บาท
                <br/>พิเศษ 60 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu/menu-item-3.png') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu/menu-item-3.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>ข้าวมันไก่ทอด</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  ธรรมดา 50 บาท
                <br/> พิเศษ 60 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu/menu-item-2.jpg') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu/menu-item-2.jpg') }}" class="menu-img img-fluid" alt=""></a>
                <h4>ข้าวมันไก่รวม</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  ราคา 60 บาท
                </p>
              </div><!-- Menu Item -->
            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p></p>
              <h3>รายการกับข้าวเเละเครื่องดื่ม</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/1.jpg') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/1.jpg') }}" class="menu-img img-fluid" alt=""></a>
                <h4>ไก่เป็นกับข้าว</h4>
                <p class="ingredients">
        
                </p>
                <p class="price">
                  120 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/2.jpg') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/2.jpg') }}" class="menu-img img-fluid" alt=""></a>
                <h4>ข้าวมันเปล่า</h4>
                <p class="ingredients">
                  
                </p>
                <p class="price">
                  20 บาท 
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/1.png') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/1.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>น้ำเเปบซี่</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                 25 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/2.png') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/2.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>น้ำส้มเเฟนต้า</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  25 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/3.png') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/3.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>ชาลิปตัน</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  25 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/4.png') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/4.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>น้ำเเดงเเฟนต้า</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  25 บาท
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="{{ asset('frontend/assets/img/menu1/5.png') }}" class="glightbox"><img src="{{ asset('frontend/assets/img/menu1/5.png') }}" class="menu-img img-fluid" alt=""></a>
                <h4>น้ำเขียวเเฟนต้า</h4>
                <p class="ingredients">
                </p>
                <p class="price">
                  25 บาท
                </p>
              </div>
             <!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>เจ้าของร้าน<span>ข้าวมันไก่</span>เจ๊สาว</p>
        </div>
          </div>
          <!-- End Chefs Member -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <img src="{{ asset('frontend/assets/img/chefs/chefs-2.jpg') }}" alt="height="640" width="500">"
            </div>
            <center>
              <body>
               <h2><FONT COLOR=Black><br/>คุณจำเรียง ไชยโย อายุ50ปี</FONT></h2>
              </body>
              </center>
          </div>
          </div><!-- End Chefs Member -->
    </section><!-- End Chefs Section -->
    <!-- ======= Gallery Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>ที่ตั้ง<span>ของร้าน</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.2596323481941!2d100.93035806953485!3d13.159969705083622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102b70618287827%3A0x4092dfb8badc26f9!2zMjE5IOC5gOC4geC5ieC4suC4geC4tOC5guC4pSDguK3guLPguYDguKDguK3guKjguKPguLXguKPguLLguIrguLIg4LiK4Lil4Lia4Li44Lij4Li1IDIwMTEw!5e0!3m2!1sth!2sth!4v1695489539599!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>ที่อยู่ของร้าน</h3>
                <p>219/7 ม.2 จังหวัด ศรีราชา ศรีราชา ชลบุรี</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>อีเมลติดต่อ</h3>
                careiyngchiyyo@gmail.com
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>ติดต่อ โทร</h3>
                <p>099-457-5444</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>ที่ตั้งเเละตำเเหน่ง</h4>
            <p>
              219/7 ม.2 จังหวัด ศรีราชา  <br>
              ศรีราชา ชลบุรี<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>เวลาเปิดทำการ</h4>
            <p>
              <strong>จันทร์-พฤหัสบดี: 06:00-20:00 </strong> <br>
              <strong>ศุกร์: 06:00-21:00 </strong> <br>
            </p>
          </div>
        </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootstrap-restaurant-website-template/ -->
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>