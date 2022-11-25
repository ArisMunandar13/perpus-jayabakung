<?php
// koneksi
include 'koneksi.php';

// variable
    $id = $_POST['id_anggota'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $telepon = $_POST['telepon'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];

// insert
   $insert = mysqli_query($con, "insert into anggota set id_anggota='$id', nama_lengkap='$nama_lengkap', telepon='$telepon', jenis_kelamin='$jk', alamat='$alamat'");

// kondisi
    if($insert){
        $message = "data berhasil di simpan:)";
        echo "<script type='text/javascript'>alert('$message');window.location.href='index.php';</script>";
        
    }else{
        $messagefail = "Tolong masukan data dengan benar";
        echo "<script type='text/javascript'>alert('$messagefail');</script>";
    }

?>
