<?php
session_start();
include(".../koneksi/koneksi.php");

// Simpan username dan password ke dalam variabel
$username = $_POST['username'];
$password = md5 ($_POST['password']);
$cek =mysql_query

// Contoh username dan password yang benar
$correct_username = 'admin';
$correct_password = 'admin123';

// Cek apakah username dan password sesuai
if ($username == $correct_username && $password == $correct_password) {
    // Jika sesuai, set session dan redirect ke halaman selamat datang
    $_SESSION['username'] = $username;
    header('location: selamat_datang.php');
} else {
    // Jika tidak sesuai, kembalikan ke halaman login dengan pesan error
    header('location: login.php?error=1');
}
?>
