<<<<<<< HEAD
<?php
require_once 'koneksi.php';
$query = "SELECT pasien.*, kelurahan.nama
            FROM pasien
            LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id_kelurahan";
$pasiens = $dbh->query($query)



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>data pasien sukahati</h2>
        <table class="table table-bordered">
            <tr class="table-warning">
                <th>No</th>
                <th>Kode pasien</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kelurahan</th>
                
            </tr>
            <?php 
            
            foreach ($pasiens as $pasiens){ ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $pasiens['kode']; ?></td>
            <td><?= $pasiens['nama']; ?></td>
            <td><?= $pasiens['gender']; ?></td>
            <td><?= $pasiens['tmp_lahir']; ?></td>
            <td><?= $pasiens['tgl_lahir']; ?></td>
            <td><?= $pasiens['nama']; ?></td>
            <td>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php }?>
</table>
</div>
</body>
=======
<?php
require_once 'koneksi.php';
$query = "SELECT pasien.*, kelurahan.nama
            FROM pasien
            LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id_kelurahan";
$pasiens = $dbh->query($query)



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>data pasien sukahati</h2>
        <table class="table table-bordered">
            <tr class="table-warning">
                <th>No</th>
                <th>Kode pasien</th>
                <th>Nama</th>
                <th>Jenis kelamin</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Kelurahan</th>
                
            </tr>
            <?php 
            
            foreach ($pasiens as $pasiens){ ?>
            <tr>
            <td><?= $no++; ?></td>
            <td><?= $pasiens['kode']; ?></td>
            <td><?= $pasiens['nama']; ?></td>
            <td><?= $pasiens['gender']; ?></td>
            <td><?= $pasiens['tmp_lahir']; ?></td>
            <td><?= $pasiens['tgl_lahir']; ?></td>
            <td><?= $pasiens['nama']; ?></td>
            <td>
            <a href="#" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php }?>
</table>
</div>
</body>
>>>>>>> 0397609a30a2e7cbd55612220c68d141c3de009f
</html>