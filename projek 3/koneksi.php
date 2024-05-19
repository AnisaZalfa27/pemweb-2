<?php
session_start();
include('config.php');

$koneksi = mysqli_connect('localhost','root','','db_puskesmas');
$username =$_POST['username'];
$password =$_POST['password'];


$query = mysql_query($koneksi."SELECT * FROM users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
   header('Location:../app');

}
else{
    header('Location:../index.php?error=1');
}

?>