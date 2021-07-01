<?php include "koneksi.php"; ?>

<?php

    $hapus = $koneksi->query("DELETE FROM tb_sekolah WHERE npsn='$_GET[npsn]'");
    $hapuss = $koneksi->query("DELETE FROM tb_galeri WHERE npsn='$_GET[npsn]'");
    $hapusss = $koneksi->query("DELETE FROM tb_posting WHERE npsn='$_GET[npsn]'");
    if($hapus && $hapuss){
        echo "<script>
            alert('Hapus Data Sekolah Berhasil');
        </script>";
        echo "<script>
        location='sekolah.php'
        </script>";
    }else{
        echo "<script>
        alert('Hapus Data Sekolah Gagal!');
    </script>";
    echo "<script>
    location='sekolah.php'
    </script>";
    }

?>