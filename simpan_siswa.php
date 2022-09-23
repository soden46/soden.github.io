<?php
include('config.php');

$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

$query="INSERT INTO tbl_siswa(nisn, nama_lengkap, alamat) values ($nisn,'$nama_lengkap','$alamat')";
if($conn->query($query)){
    echo"Data Berhasil Disimpan";
    header("location: data_siswa.php");
}else{
    echo"Data Gagal Disimpan!!!";
}

?>