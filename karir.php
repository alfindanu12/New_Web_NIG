<div class="container mt-3 mt-lg-5 text-center">
  <img src="asset/img/foto/hiring.jpg" class="w-50">
</div>
<div class="container d-flex justify-content-center mt-3 mt-lg-5">
  <div class="col-12 col-lg-6">
    <form action="kirim.php" method="post" target="_blank" enctype="multipart/form-data">
      <div class="row">

        <h2>Punya Pertanyaan atau Keluhan Seputar Layanan dan Jasa PT NIG?</h2>
        <p>Isi formulir berikut dengan rincian lebih lanjut agar kami dapat menghubungi kembali dengan solusi yang Anda
          butuhkan.</p>
        <div class="container border-bottom border-1 shadow py-1">
        </div>
        <div class="col-12 col-lg-6 mt-3 mt-lg-5">
          <div class="mb-3">
            <label for="nama_dpn" class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Masukan Nama" name="nama_dpn">
          </div>
        </div>
        <div class="col-12 col-lg-6 mt-3 mt-lg-5">
          <div class="mb-3">
            <label for="nama_blk" class="form-label">Perusahaan</label>
            <input type="text" class="form-control" placeholder="Masukan Nama Perusahaan" name="perusahaan">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="jk">JENIS KELAMIN</label><br>
            <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki <br>
            <input type="radio" name="jk" value="Perempuan"> Perempuan
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="pekerjaan">Layanan Jasa</label>
            <select class="form-control" id="kategori" name="layanan">
              <option>-- Pilih Layanan --</option>
              <option>Recruitment</option>
              <option>Procurement</option>
              <option>Quotation</option>
              <option>Keluhan Pelanggan</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="tlp" class="form-label">No Telepon</label>
            <input type="text" class="form-control" placeholder="Masukan No Telepon" name="tlp">
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="Email" class="form-control" placeholder="Masukan Email" name="email">
          </div>
        </div>
        <!-- <div class="col-12">
          <div class="mb-3">
              <label for="file">CV Anda</label><br>
              <input type="file" name="File">
          </div>
        </div> -->
        <div class="col-12">
          <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" rows="10" name="alamat" placeholder="Masukan Alamat"></textarea>
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
            <label for="pesan">Pesan</label>
            <textarea class="form-control" rows="10" name="pesan" placeholder="Masukan Pesan"></textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-danger bg_theme" name="submit" value="Upload">Kirim Pesan</button>
      <!-- <input type="submit" name="proses" value="Upload"> -->
    </form>
  </div>
</div>


<div class="container-fluid mt-5 mt-lg-5 py-3 py-lg-5" style="background-color: #f5f7fa;">
  <h1 class="section_title ">SERTIFIKASI</h1>
  <div class="container mt-3 mt-lg-4">
    <p>PT Nanotech Indonesia Global (NANO) adalah Tech Company yang memiliki core business berupa jasa layanan
      sains dan teknologi berbasis research and development (R&D), rekayasa material, dan nanoteknologi.</p>

    <p>PT Nanotech Indonesia Global (NANO) hadir untuk menjawab permasalahan, kebutuhan, dan tantangan para
      akademisi, investor, industri, dunia usaha, dan pemerintah yang hanya bisa direkayasa dengan sains dan
      teknologi.</p>
  </div>
</div>
</div>
</div>
<br>
<br>
<script>
  scrolled_navbar()
</script>