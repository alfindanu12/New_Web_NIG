<?php
  $baseurl = 'http://localhost/New_Web_NIG/';
  include 'function.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Nanotech Indonesia Global</title>
  <link rel="icon" href="asset/img/logo/nano.png">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- my css -->
  <link rel="stylesheet" href="asset/css/footer.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/lightbox.min.css">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- jquery cdn js0 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="asset/js/lightbox-plus-jquery.min.js"></script>
  <script>
    function scrolled_navbar() {
      var header = $('#scrolled_header')
      header.addClass('bg-white')
        .addClass('shadow')

      var logo1 = header.find('#logo1')
      var logo2 = header.find('#logo2')
      logo1.addClass('d-none')
      logo2.removeClass('d-none')

      var navbar = $('#scrolled_navbar')
      navbar.removeClass('bg-transparent')
        .removeClass('navbar-dark')
        .addClass('navbar-light')
    }

    function normal_navbar() {
      var header = $('#scrolled_header')
      header.removeClass('bg-white')
        .removeClass('shadow')

      var logo1 = header.find('#logo1')
      var logo2 = header.find('#logo2')
      logo1.removeClass('d-none')
      logo2.addClass('d-none')

      var navbar = $('#scrolled_navbar')
      navbar.addClass('bg-transparent')
        .addClass('navbar-dark')
        .removeClass('navbar-light')
    }
  </script>

  <!-- share bottom -->
  <script type="text/javascript"
    src="https://platform-api.sharethis.com/js/sharethis.js#property=645204f0d188f60019105976&product=inline-share-buttons&source=platform"
    async="async"></script>
</head>

<body>
  <div class="fixed-top py-3 py-lg-0" id="scrolled_header">
    <header class="container-fluid d-flex justify-content-center bg-transparent">
      <a href="<?= $baseurl.'/?page'; ?>"><img src="asset/img/logo/NIG.png" class="logo" id="logo1">
        <img src="asset/img/logo/NIG-transparant.png" class="logo d-none" id="logo2"></a>
    </header>
    <nav class="navbar navbar-dark navbar-expand-sm bg-transparent" id="scrolled_navbar">
      <div class="container">
        <button class="navbar-toggler ms-auto me-0" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg_theme" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Nanotech Indonesia Global</h5>
            <i class="bi bi-x-lg text-white" data-bs-dismiss="offcanvas"></i>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="<?= $baseurl.'/index.php'; ?>">beranda</a>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">tentang kami</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item " href="<?= $baseurl.'/?page=about.php'; ?>">Tentang Perusahaan</a>
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=manajemen.php'; ?>">Manejemen</a>
                </div>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">layanan kami</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=fasilitas.php'; ?>">Fasilitas</a>
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=strategi_bisnis.php'; ?>">Strategi Bisnis</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="#" class="dropdown-item">Industri Umum</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Kesehatan, Kosmetik dan Farmasi</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Akuakultur dan Agribisni</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Layanan Bisnis</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Properti dan Konstruksi</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">tata kelola</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=tatakelolaperusahaan.php'; ?>">Tata Kelola
                    Perusahaan</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="<?= $baseurl.'/?page=RUPS.php'; ?>" class="dropdown-item">RUPS</a></li>
                    <li class="px-0"><a href="<?= $baseurl.'/?page=sekretaris.php'; ?>" class="dropdown-item">Sekretaris
                        Perusahaan</a></li>
                    <li class="px-0"><a href="<?= $baseurl.'/?page=komiteaudit.php'; ?>" class="dropdown-item">Komite
                        Audit</a></li>
                  </ul>
                  <a class="dropdown-item" href="#">Kebijakan Perusahaan</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="<?= $baseurl.'/?page=internal_audit.php'; ?>" class="dropdown-item">Audit
                        Internal</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Sistem Pengendalian Internal SKAI</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Management Resiko</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Struktur dan Kebijakan GCG</a></li>
                  </ul>
                  <a class="dropdown-item" href="#">CSR</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="#" class="dropdown-item">CSR 2021</a></li>
                    <li class="px-0"><a href="<?= $baseurl.'/?page=CSR2022.php'; ?>" class="dropdown-item">CSR 2022</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">hubungan investor</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=kenapa_nano.php'; ?>">Kenapa Investasi di NANO</a>
                  <a class="dropdown-item" href="#">Informasi Keuangan</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="<?= $baseurl.'/?page=interm.php'; ?>" class="dropdown-item">Interim</a>
                    </li>
                    <li class="px-0"><a href="<?= $baseurl.'/?page=laporan_tahunan.php'; ?>"
                        class="dropdown-item">Tahunan</a></li>
                  </ul>
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=pemegang_saham.php'; ?>">Informasi Saham</a>
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=berita_perusahaan.php'; ?>">Berita Perusahaan</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="#" class="dropdown-item">NIG</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Anak Perusahaan</a></li>
                    <li class="px-0"><a href="#" class="dropdown-item">Afiliasi</a></li>
                  </ul>
                  <a class="dropdown-item"
                    href="<?= $baseurl.'file/f_Prospektus - IPO PT Nanotech Indonesia Global Tbk.pdf'; ?>">Prospektus</a>
                  <ul class="ps-5 me-3">
                    <li class="px-0"><a href="#" class="dropdown-item">IPO Tahun 2022</a></li>
                </div>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Media</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=news/index.php'; ?>">Berita</a>
                  <a class="dropdown-item" href="<?= $baseurl.'/?page=news/index.php'; ?>">Artikel</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#footer">kontak</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="<?= $baseurl.'/?page=karir.php'; ?>">karir</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <main>
    <?php
   
    if (!isset($_GET['page'])|| empty($_GET['page'])){
      $page = 'landing.php';
    } else {
      $page = htmlspecialchars($_GET['page']);
      echo '<br><br><br><br><br><br><br><div class="d-none d-lg-block"> <br><br><br></div>';
    }
    include $page;

    ?>
  </main>


  <div class="container border-bottom border-1 shadow py-1">
  </div>
  <!-- footer -->
  <footer class="container-fluid footer mt-3 mt-lg-5 pt-5 pb-2 pb-lg-5 px-0" id="footer">
    <div class="container">
      <div class="footer-left">
        <div class="credit-card">
          <img src="asset/img/logo/NIG-transparant.png">
        </div>
        <h3>Nanotech Indonesia Global</h3>
        <p class="footer-copyright">&copy; 2023 Nanotech Indonesia Global</p>
      </div>
      <div class="footer-center">
        <div>
          <a href="https://goo.gl/maps/mBvv9aqcr5Go7f73A"><i class="fa fa-map-marker"></i></a>
          <p><span>Indonesia</span> Tangerang selatan, Banten</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>(021) 75681294</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">corsec@nig.co.id</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-about"><span>PT NANOTECH INDONESIA GLOBAL TBK.</span>PT Nanotech Indonesia Global (NANO)
          adalah
          Tech Company yang memiliki core business berupa jasa layanan sains dan teknologi berbasis research and
          development (R&D), rekayasa material, dan nanoteknologi. <a href="<?= $baseurl.'/?page=about.php'; ?>"
            class="a_resset text_theme">Learn More</a></p>
        <div class="footer-media">
          <a href="https://www.youtube.com/@nanotechindonesiaglobal2211"><i class="fa fa-youtube"></i></a>
          <a href="https://www.facebook.com/profile.php?id=100083404178023"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/nanoglobal_id"><i class="fa fa-twitter"></i></a>
          <a href="https://www.instagram.com/nanotechglobal.id/"><i class="fa fa-instagram"></i></a>
          <a href="https://id.linkedin.com/company/nanotech-indonesia"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->

  <div class="w-100 p-4 bg_theme text-center text-white">Copyright &copy; 2023 Nanotech Indonesia Global Tbk.</div>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <script>
    document.querySelectorAll('.images img').forEach(image => {
      image.onclick = () => {
        document.querySelector('.popup').style.display = 'block';
        document.querySelector('.popup img').src = image.getAttribute('src');
      }
    });
    document.querySelector('.popup span').onclick = () => {
      document.querySelector('.popup').style.display = 'none';
    }
  </script>

</body>

</html>