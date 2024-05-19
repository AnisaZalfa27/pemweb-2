<<<<<<< HEAD
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'db_puskesmas';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

$dbh = new PDO($dsn, $user, $password, $opt);




=======
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'db_puskesmas';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,
];

$dbh = new PDO($dsn, $user, $password, $opt);




>>>>>>> 0397609a30a2e7cbd55612220c68d141c3de009f
?>