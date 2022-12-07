<?php
    if (isset($_POST['submit'])){
        //var_dump($_POST);
        $id_jabatan   = $_POST['id_jabatan'];
        $kode_pegawai = $_POST['kode_pegawai'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $nama   = $_POST['nama'];
        $tempat_lahir  = $_POST['tempat_lahir'];
        $alamat = $_POST['alamat'];

        // Buat koneksi dengan MySQL
        $con = mysqli_connect("localhost","root","","pegawai");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }else{
            echo 'koneksi berhasil';
        }

        $sql = "insert into pegawai (id_jabatan, kode_pegawai, jenis_kelamin, nama, tempat_lahir, alamat)
        values ('$id_jabatan', '$kode_pegawai','$jenis_kelamin', '$nama', '$tempat_lahir','$alamat')";

        if (mysqli_query($con, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
          
        mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        ID Jabatan: <input type="number" name="id_jabatan"><br>
        Kode Pegawai <input type="text" name="kode_pegawai"><br>
        Nama: <input type="text" name="nama"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir"><br>
        Alamat: <input type="text" name="alamat"><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>