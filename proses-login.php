<?php
session_start(); // Mulai session

// Cek apakah sudah ada session petugas/admin yang aktif
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
    echo "<script>alert('Anda sudah login sebagai Petugas/Admin, logout terlebih dahulu!'); window.location.assign('masyarakat.php');</script>";
    exit();
}

$nik = $_POST['nik'];
$password = sha1($_POST['password']);
include 'koneksi.php';

// Corrected SQL query
$sql = "SELECT * FROM masyarakat WHERE nik='$nik' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) > 0){
    $_SESSION['nik'] = $nik;
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username']; // Session untuk masyarakat
    header('location: masyarakat.php');
} else {
    echo "<script>alert('Maaf Anda Gagal Login'); window.location.assign('index.php'); </script>";
}
?>
