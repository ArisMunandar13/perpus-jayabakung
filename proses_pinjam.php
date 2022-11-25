<?php

include 'koneksi.php';

// variable
    $id = $_POST['id_anggota'];
    $idBuku = $_POST['id_buku'];
    $tanggalPinjam = $_POST['tgl_pinjam'];

// insert
   $insert = mysqli_query($con, "insert into peminjam set id_anggota='$id', id_buku='$idBuku', tgl_pinjam='$tanggalPinjam'");

// kondisi
    if($insert){
        $message = "data berhasih di simpan:)";
        echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";
        
    }else{
        $messagefail = "Tolong masukan data dengan benar";
        echo "<script type='text/javascript'>alert('$messagefail');</script>";
    }

?>