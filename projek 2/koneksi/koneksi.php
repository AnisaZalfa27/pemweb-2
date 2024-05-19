<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_puskesmas";

$koneksi=mysql_connect($host, $user, $pass, $db);

if (mysql_connect_erno()) {
    echo "gagal koneksi ke database: " .mysql_connect_erno ();
} 


?>