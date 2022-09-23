<?php
    include('config.php');
    
    //get id
    $id = $_GET['id'];

    $query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id'";

    if ($conn->query($query)) {
        header("location: data_siswa.php");
    }else {
        echo "Data Gagal Dihapus";
    }
?>