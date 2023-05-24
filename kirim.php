<?php
    if (isset($_POST['submit'])){
        $nama_dpn =$_POST['nama_dpn'];
        $perusahaan =$_POST['perusahaan'];
        $jk =$_POST['jk'];
        $layanan =$_POST['layanan'];
        $tlp =$_POST['tlp'];
        $email =$_POST['email'];
        // $file =$_POST['file'];
        $alamat =$_POST['alamat'];
        $pesan =$_POST['pesan'];
        header("location:https://api.whatsapp.com/send?phone=6281283080018&text=Assalamualaikum%20Halo%20Selamat%20Siang%0D%20%0DPerkenalkan%20%0D Nama%20:%20$nama_dpn%20%0D Nama%20Perusahaan%20:%20$perusahaan%20%0D Jenis%20Kelamin%20:%20$jk%20%0D Pilihan%20Layanan%20:%20$layanan%20%0D No%20:%20$tlp%20%0D Email%20:%20$email%20%0D Alamat%20:%20$alamat%20%0D Pesan%20:%20$pesan%20%0D %20%0DTerimakasih");
    } else {
        echo "
        <script>
            window.location=history.go(-1);
        </script>
        ";
    }

?>