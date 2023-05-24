<?php
    include 'data.php';
    $id = $_GET ['id'];
    $detail=$data[$id];
    if (!$detail){
        redirect($baseurl.'/404.html');
    }
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12">
            <img src="<?= $detail['gambar'] ?>" class="w-100 rounded-3 mt-3">
        </div>
        <div class="col-12 col-lg-7">
            <h2 class="mt-3"><?= $detail['title'] ?></h2>
            <span class="d-block mb-2"><?= $detail['tgl_post'] ?></span>
            <div><?= $detail['deskripsi'] ?></div>
            <div class="col-12 col-lg-5 mt-3 mt-lg-5 rounded-3 p-2">
                <p>--</p>
                <p>Suka dengan apa yang Anda baca?
                    Bagikan berita ini:</p>
                <div class="sharethis-inline-share-buttons"></div>
                <br>
                <label>Penulis</label>
                <div class="d-flex mt-1">
                    <div class="overflow-hidden ratio ratio-1x1 rounded-circle me-3" style="width:50px; ">
                        <img src="asset/img/icon/profile.jpg" style="object-fit : cover;">
                    </div>
                    <div>
                        <b class="d-block"><?= $detail['penulis']['nama'] ?></b>
                        <span class="d-block"><?= $detail['penulis']['jabatan'] ?></span>
                    </div>
                </div>
            </div>

            <a href="<?= $baseurl.'/?page=news/index.php'; ?>"
                class="btn btn-danger bg_theme btn-sm mt-3 mt-lg-5">Kembali Ke Menu Berita & Artikel</a>
        </div>
        <!-- akhir berita unggulan -->

        <!-- berita terkini -->
        <div class="col-12 col-lg-5 mt-3 mt-lg-3">
            <b>BERITA TERKAIT</b>
            <ul class="p-0 mt-3" style="list-style : none;">
                <li>
                    <div class="d-flex">
                        <div class="col-3">
                            <div class="overflow-hidden ratio ratio-1x1 rounded-3 ">
                                <img src="<?= $detail['gambar'] ?>" style="object-fit : cover;">
                            </div>
                        </div>
                        <div class="col-9 ps-2">
                            <h5><?= $detail['title'] ?></h5>
                            <span class="d-block"><?= $detail['tgl_post'] ?></span>
                            <div><?= $detail['deskripsi'] ?></div>
                        </div>
                    </div>
                </li>

                <li class="mt-3">
                    <div class="d-flex">
                        <div class="col-3">
                            <div class="overflow-hidden ratio ratio-1x1 rounded-3 ">
                                <img src="<?= $detail['gambar'] ?>" style="object-fit : cover;">
                            </div>
                        </div>
                        <div class="col-9 ps-2">
                            <h5><?= $detail['title'] ?></h5>
                            <span class="d-block"><?= $detail['tgl_post'] ?></span>
                            <div><?= $detail['deskripsi'] ?></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- berita terkini -->
    </div>
</div>




<script>
    scrolled_navbar()
</script>