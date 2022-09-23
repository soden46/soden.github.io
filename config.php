<?php
    //buat variabel
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "web_teori";

    //buat koneksi
    $conn = new mysqli($servername, $username, $password, $database);

    //periksa koneksi
    if ($conn->connect_error) {
        # code...
        die("Koneksi gagal : " . $conn->connect_error);
    }

?>