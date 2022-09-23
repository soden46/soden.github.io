<?php
$username = $_POST['username'];
$password = md5($_POST['password']);

include 'config.php';

$user = mysqli_query($conn,"SELECT * FROM data WHERE username='$username' AND password='$password'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:data_siswa.php");
}else
{
    header("location:login.php");
}
?>