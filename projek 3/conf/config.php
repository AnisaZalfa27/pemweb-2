<?php
$koneksi =mysqli_connect('localhost','root','','db_puskesmas');

if(!$koneksi){
    die("koneksi gagal:". mysqli_connect_error());
}
else{
    echo "koneksi berhasil";
}
?>