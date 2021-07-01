<?php include "koneksi.php"; ?>

<?php

    $hapus = $koneksi->query("DELETE FROM tb_admin WHERE id_admin='$_GET[id_admin]'");
    if($hapus){
        echo "<script>
            alert('Hapus Data Admin Berhasil');
        </script>";
        echo "<script>
        location='petugas.php'
        </script>";
    }else{
        echo "<script>
        alert('Hapus Data Admin Gagal!');
    </script>";
    echo "<script>
    location='petugas.php'
    </script>";
    }

?>