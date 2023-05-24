<style>
    .hero {
        height: 750px;
        background-image: url('asset/img/hero.png');
        background-size: cover;
    }

    .hero .title {
        color: white;
        font-size: 35px;
        font-weight: 700;
    }

    .prof_picture {
        width: 200px;
    }

    .parallax {
        /* The image used */
        background-image: url("asset/img/hero.jpg");
        margin-bottom: -7px;

        /* Set a specific height */
        min-height: 400px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .parallax h1 {
        font-size: 30px;
    }

    .parallax h1 div {
        display: inline-block;
        font-weight: 800;
    }


    @media (min-width:992px) {
        .hero {
            height: 950px;
        }

        .hero .title {
            font-size: 75px;
            font-weight: 800;
        }

        .hero .content {
            margin-top: 200px;
        }

        .prof_picture {
            width: 100%;
        }

        .prof_decription {
            font-size: 23px;
        }

        .parallax h1 {
            font-size: 50px;
        }
    }
</style>

<!-- hero -->
<div class="hero container-fluid d-flex align-items-center">
    <div class="container content">
        <div class="col-12 col-lg-9">
            <h1 class="title" data-aos="fade-right">PT NANOTECH INDONESIA GLOBAL Tbk</h1>
            <div class="subtittle text-white fs-3 col-12 col-lg-7" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200"><b>Satu-satunya Penyedia Jasa Riset Berbasis
                    Nanoteknologi</b>
            </div>
        </div>
    </div>
</div>
<!-- akhir hero -->

<!-- about -->
<div class="container-fluid py-5">
    <div class="container">
        <h1 class="section_title">PT NANOTECH INDONESIA GLOBAL</h1>
    </div>
    <div class="container mt-3 mt-lg-5 d-flex justify-content-center">
        <div id="carousel-about" class="carousel slide rounded-5 overflow-hidden col-12 col-lg-8"
            data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-about" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carousel-about" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carousel-about" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="asset/img/foto/IMG_9836.JPG" class="w-100 d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/foto/IMG_9915.JPG" class="w-100 d-block" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="asset/img/foto/DJI_0083.JPG" class="w-100 d-block" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-about" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-about" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- akhir about -->

    <!-- deskripsi -->
    <div class="container mt-3 mt-lg-5">
        <p class="text-center col-12 d-flex justify-content-center"><b>PT NANOTECH INDONESIA GLOBAL Tbk (NANO) adalah
                Perusahaan Teknologi (Tech company) yang memiliki core business berupa jasa layanan sains dan teknologi
                berbasis research and development (R&D), rekayasa material dan nanoteknologi.</b></p>
        <div class="d-flex justify-content-center"><a href="<?= $baseurl.'/?page=about.php'; ?>"
                class="btn btn-outline-dark mt-3">Selengkapnya <i class="bi bi-play-fill"></i></a>
        </div>
    </div>
</div>
<!-- deskripsi -->


<div class="container-fluid mt-3 mt-lg-5 py-4 py-lg-5" style="background-color: #f5f7fa;">
    <div class="container">
        <h1 class="section_title">JASA YANG KAMI TAWARKAN</h1>
        <div class="row row-cols-1 row-cols-lg-4 mt-3 mt-lg-5 text-center">
            <div class="col" data-aos="zoom-in-down" data-aos-duration="1000">
                <a href="https://nanocenter.id/"><img src="asset/img/icon/icon9.png" class="img_hover"></a>
                <p class="mt-3"><b>Layanan Riset dan Pengembangan</b></p>
            </div>
            <div class="col" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="200">
                <a href="https://nanotech.co.id/"><img src="asset/img/icon/icon8.png" class="img_hover"></a>
                <p class="mt-3"><b>Layanan Jasa Keteknikan</b></p>
            </div>
            <div class="col" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="400">
                <a href="#"><img src="asset/img/icon/icon7.png" class="img_hover"></a>
                <p class="mt-3"><b>Layanan Suplai Peralatan dan Material Nano</b></p>
            </div>
            <div class="col" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="600">
                <a href="#"><img src="asset/img/icon/icon1.png" class="img_hover"></a>
                <p class="mt-3"><b>Layanan Pengembangan Kapasitas dan Kualitas SDM</b></p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container mt-3 mt-lg-5 d-flex justify-content-center">
    <div id="carousel-about" class="carousel slide rounded-5 overflow-hidden col-12 col-lg-8" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-about" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carousel-about" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carousel-about" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="asset/img/foto/IMG_9836.JPG" class="w-100 d-block" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="asset/img/foto/IMG_9915.JPG" class="w-100 d-block" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="asset/img/foto/DJI_0083.JPG" class="w-100 d-block" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-about" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel-about" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> -->

<!-- akhir about -->

<!-- deskripsi -->
<!-- <div class="container mt-3 mt-lg-5">
    <p class="text-center col-12 d-flex justify-content-center"><b>PT Nanotech Indonesia Global (NANO) adalah
            perusahaan
            teknologi yang memiliki core
            business
            penyedia layanan Research and Development (R&D), berbasis sains dan teknologi pada bidang
            rekayasa, material, dan nanoteknologi</b></p>
    <div class="d-flex justify-content-center"><a href="#" class="btn btn-outline-dark mt-3">Selengkapnya <i
                class="bi bi-play-fill"></i></a>
    </div>
</div> -->
<!-- akhir deskripsi -->

<!-- pendiri -->
<div class="container-fluid mt-3 mt-lg-5 py-5 d-flex justify-content-center">
    <div class="container">
        <h1 class="section_title">ILMUWAN NANOTEKNOLOGI INDONESIA</h1>
        <p class="text-center col-12 mt-3 d-flex justify-content-center"><b>Berkenalan dengan Ilmuwan Nanoteknologi
                Indonesia
                yang Punya
                Sederet Hak Paten</b></p>
        <div class="rounded-5 overflow-hidden mt-3 mt-lg-5">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/uoXBJVs2J1Y" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="mt-3 mt-lg-5">
            <div class="row mt-4">
                <div class="col-12 col-lg-4">
                    <div class="d-flex justify-content-center">
                        <div class="overflow-hidden ratio ratio-1x1 shadow prof_picture" style="border-radius:100%;" data-aos="fade-up" data-aos-duration="2000">
                            <img src="asset/img/hero/profnurul.jpg" style="object-fit:cover;">
                        </div>
                    </div>
                    <h4 class="text-lg-end fw-bold mt-4">Prof. Dr. Nurul Taufiqu Rochman,
                        B.Eng, M.Eng., Ph.D.</h4>
                </div>
                <div class="col-12 col-lg-8 mt-3 mt-lg-5 px-lg-5">
                    <h1 class="section_title">TENTANG
                        PENDIRI</h1>
                    <p class="mt-3 mt-lg-5 prof_decription">Prof. Dr. Nurul Taufiqu Rochman, bekerja di Pusat
                        Penelitian Fisika - LIPI sejak 1989 dan menjadi Kepala
                        Bidang Sarana Penelitian, Pusat Penelitian Metalurgi -
                        LIPI pada 2010. Kemudian menjadi Kepala Pusat Inovasi
                        sejak Januari 2014 hingga 30 April 2018 dan kembali
                        menjadi Peneliti Utama (Profesor Riset) sejak 1 Mei 2018.</p>
                    <p class="mt-3 mt-lg-5 prof_decription">Tugas belajar ke Jepang sejak tahun 1990 melalui
                        prorgam Pak Habibie (STMPD II: Science and
                        Technology Man Power Development Program)</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir pendiri -->

<!-- ecosystem -->
<!-- <div class="container mt-3 mt-lg-5">
    <h1 class="section_title">NANO’S ECOSYSTEM</h1>
    <div class="row mt-5 row-cols-1 row-cols-lg-3">
        <div class="col">
            <div class="overflow-hidden ratio ratio-16x9 rounded-5 shadow">
                <img src="asset/img/foto/scooters.JPG" style="object-fit:cover;">
            </div>
            <a href="https://www.instagram.com/schoters/"><div class="rounded-5 d-flex justify-content-center shadow bg-white p-3 position-relative"
                style="margin-top:-50px; z-index:2;">
                <img src="asset/img/logo/schooters.png" height="80px">
            </div></a>
            <b class="fs-4 mt-3 d-block text-center">PT Partner Impian
                Milenial</b>
        </div>
        <div class="col mt-5 mt-lg-0">
            <div class="overflow-hidden ratio ratio-16x9 rounded-5 shadow">
                <img src="asset/img/foto/nanobubble.JPG" style="object-fit:cover;">
            </div>
            <a href="https://www.instagram.com/nanobubble.id/"><div class="rounded-5 d-flex justify-content-center shadow bg-white p-3 position-relative"
                style="margin-top:-50px; z-index:2;">
                <img src="asset/img/logo/nanobubble.png" height="80px">
            </div></a>
            <b class="fs-4 mt-3 d-block text-center">PT Nanobubble Karya
                Indonesia</b>
        </div>
        <div class="col mt-5 mt-lg-0">
            <div class="overflow-hidden ratio ratio-16x9 rounded-5 shadow">
                <img src="asset/img/foto/natura.JPG" style="object-fit:cover;">
            </div>
            <a href="https://www.instagram.com/nanonatura_id/"><div class="rounded-5 d-flex justify-content-center shadow bg-white p-3 position-relative"
                style="margin-top:-50px; z-index:2;">
                <img src="asset/img/logo/natura.png" height="80px">
            </div></a>
            <b class="fs-4 mt-3 d-block text-center">PT Nanotech Natura
                Indonesia</b>
        </div>
        <div class="col mt-5">
            <div class="overflow-hidden ratio ratio-16x9 rounded-5 shadow">
                <img src="asset/img/foto/sinergi.JPG" style="object-fit:cover;">
            </div>
            <a href="https://www.instagram.com/sinergi_nanotech/"><div class="rounded-5 d-flex justify-content-center shadow bg-white p-3 position-relative"
                style="margin-top:-50px; z-index:2;">
                <img src="asset/img/logo/sni.png" height="80px">
            </div></a>
            <b class="fs-4 mt-3 d-block text-center">PT Sinergi Nanotech
                Indonesia</b>
        </div>
        <div class="col mt-5">
            <div class="overflow-hidden ratio ratio-16x9 rounded-5 shadow">
                <img src="asset/img/foto/nanotown.JPG" style="object-fit:cover;">
            </div>
            <a href="https://www.instagram.com/nanoland.id/"><div class="rounded-5 d-flex justify-content-center shadow bg-white p-3 position-relative"
                style="margin-top:-50px; z-index:2;">
                <img src="asset/img/logo/LogoNanoland.png" height="80px">
            </div></a>
            <b class="fs-4 mt-3 d-block text-center">PT Graha Nanotech
                Indonesia</b>
        </div>
        <div class="col mt-5">
            <div class="overflow-hidden ratio ratio-16x9 rounded-5 shadow">
                <img src="asset/img/foto/smasindo.JPG" style="object-fit:cover;">
            </div>
            <a href="https://www.instagram.com/smasindo/"><div class="rounded-5 d-flex justify-content-center shadow bg-white p-3 position-relative"
                style="margin-top:-50px; z-index:2;">
                <img src="asset/img/logo/smasindo.png" height="80px">
            </div></a>
            <b class="fs-4 mt-3 d-block text-center">PT Smartek Sinergi
                Indonesia</b>
        </div>
    </div>
</div> -->
<div class="container-fluid mt-3 mt-lg-5 py-3 py-lg-5" style="background-color: #f5f7fa;">
    <h1 class="section_title ">NANO’S ECOSYSTEM</h1>
<div class="container mt-3 mt-lg-5 d-flex justify-content-center">
    <div class="row">
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/nanobubble.png" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/natura.png" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/LogoNanoland.png" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/smasindo.png" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/sni.png" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/nano_edu.png" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/logo/zambrud.jpeg" class="w-100">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/fasilitas/peneliti8.jpg" class="w-100 border border-2 rounded-3 mt-4">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/fasilitas/peneliti9.jpg" class="w-100 border border-2 rounded-3 mt-4">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/fasilitas/peneliti10.jpg" class="w-100 border border-2 rounded-3 mt-4">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/fasilitas/peneliti11.png" class="w-100 border border-2 rounded-3 mt-4">
        </div>
        <div class="col-12 col-lg-3">
            <img src="asset/img/fasilitas/peneliti12.png" class="w-100 border border-2 rounded-3 mt-4">
        </div>
    </div>
    </div>
</div>
<!-- akhir ecosystem -->

<div class="container-fluid mt-3 mt-lg-5" >
    <h1 class="section_title">NANO’S NOTABLE PARTNERS AND CLIENTS</h1>
    <img src="asset/img/foto/klien.JPG" class="w-100 mt-3 mt-lg-5"  data-aos="zoom-in-down" data-aos-duration="2000">
</div>

<div class="parallax mt-3 mt-lg-5 d-flex align-items-center">
    <div class="container d-flex justify-content-center">
        <h1 class="text-white">WORK <div>HARD.</div> DREAM <div>BIG.</div> NEVER <div>GIVE UP.</div>
        </h1>
    </div>
</div>


<script>
    $(window).scroll(function () {
        var header = $('#scrolled_header')
        let header_offset_top = header.offset().top
        let offset_top = Math.round(header_offset_top)
        if (offset_top > 100) {
            scrolled_navbar()
        } else {
            normal_navbar()
        }
    })
</script>