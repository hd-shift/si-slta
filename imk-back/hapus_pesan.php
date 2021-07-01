<?php include "koneksi.php"; ?>

<?php

    $hapus = $koneksi->query("DELETE FROM tb_pesan WHERE id='$_GET[id]'");
    if($hapus){
        echo "<script>
            alert('Hapus Pesan Berhasil');
        </script>";
        echo "<script>
        location='pesan.php'
        </script>";
    }else{
        echo "<script>
        alert('Hapus Pesan Gagal!');
    </script>";
    echo "<script>
    location='pesan.php'
    </script>";
    }

?>