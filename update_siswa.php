<?php
    include('config.php');

    //get data
    $id_siswa = $_POST['id_siswa'];
    $nisn = $_POST['nisn'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_siswa SET nisn='$nisn', nama_lengkap='$nama_lengkap', alamat='$alamat' WHERE id_siswa = '$id_siswa'";

    if ($conn->query($query)) {
        # code...
        header("location: data_siswa.php");
    }else {
        echo "Data Gagal Diupdate!!!";
    }
?>