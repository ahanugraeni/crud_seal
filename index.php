<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php

// 1. Buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","pegawai");

// 2. Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo 'koneksi berhasil';
}

// 3 buat query baca semua data dari table
$sql = "SELECT * FROM pegawai";

// 4. tampilkan data, cek apakah query bisa dijalankan
$pegawai= [];
if ($result = mysqli_query($con, $sql)) {
    // tampilkan satu per satu
    while ($row = mysqli_fetch_assoc($result)) {
        $pegawai[] = $row;
    }
    mysqli_free_result($result);
  }

// 5. tutup koneksi
mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
<div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card">
                <div class="card-header">Data Pegawai</div>
            </div> <br>
        
    <a href="insert.php" class="btn btn-primary">Tambah Data</a>
    <table border=2 style="width: 100%;" class="table table-responsive table-striped">
    <thead>    
        <tr>
            <th>ID Jabatan</th>
            <th>Kode Pegawai</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>   
        <?php foreach ($pegawai as $row): ?>
            <tr>
                <td><?= $row['id_jabatan'] ?></td>
                <td><?= $row['kode_pegawai'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jenis_kelamin'] ?></td>
                <td><?= $row['tempat_lahir'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td>
                <form action="update.php?id=<?= $row['id'] ?>" method="post">
                    <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a> | 
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
                </form>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    </div>
</body>
</html>
