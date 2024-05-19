<<<<<<< HEAD

<?php require_once 'class_mahasiswa.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel ="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.cs">

</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
        </tr>       
            <tr>
                <td>1</td>
                <td><?= $mahasiswa->nim; ?></td>
                <td><?= $mahasiswa->nama; ?></td>
                <td><?= $mahasiswa->prodi; ?></td>
                <td><?= $mahasiswa->angkatan; ?></td>
                <td><?= $mahasiswa->ipk; ?></td>
                <td><?= $mahasiswa->predikat_ipk(); ?></td>
                
    <tr></tr>
</table>
</div>
                
</body>
=======

<?php require_once 'class_mahasiswa.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link rel ="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.cs">

</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
        </tr>       
            <tr>
                <td>1</td>
                <td><?= $mahasiswa->nim; ?></td>
                <td><?= $mahasiswa->nama; ?></td>
                <td><?= $mahasiswa->prodi; ?></td>
                <td><?= $mahasiswa->angkatan; ?></td>
                <td><?= $mahasiswa->ipk; ?></td>
                <td><?= $mahasiswa->predikat_ipk(); ?></td>
                
    <tr></tr>
</table>
</div>
                
</body>
>>>>>>> 0397609a30a2e7cbd55612220c68d141c3de009f
</html>