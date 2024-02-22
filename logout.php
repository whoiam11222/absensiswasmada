<?php 
include('koneksi.php');
session_start();
$guru_id = $_SESSION['guru_id'];
$berhasil = true;
if($sql_login=mysqli_query($koneksi, "UPDATE guru SET last_login=now()")){
    $_SESSION =[];
    session_unset();
    session_destroy;
    header("Location: login.php");
}
echo mysqli_error($koneksi);
?>