<?php
session_start(); // Mulai session

// Cek apakah sudah ada session masyarakat yang aktif
if(isset($_SESSION['nik'])){
    echo "<script>alert('Anda sudah login sebagai Masyarakat, logout terlebih dahulu!'); window.location.assign('index2.php');</script>";
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
include 'koneksi.php';

$sql = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) > 0){
    $data = mysqli_fetch_array($query);
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    
    if ($data['level'] == "admin"){
        header("location:admin/admin.php");
    } elseif ($data['level'] == "petugas"){
        header("location:petugas/petugas.php");
    }
} else {
    echo "<script>alert('Maaf Anda Gagal Login'); window.location.assign('index2.php'); </script>";
}
?>
