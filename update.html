<?php

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","pegawai");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM pegawai WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $id_jabatan = $user_data['id_jabatan'];
            $kode_pegawai = $user_data['kode_pegawai'];
            $jenis_kelamin = $user_data['jenis_kelamin'];
            $nama   = $user_data['nama'];
            $tempat_lahir  = $user_data['tempat_lahir'];
            $alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}

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
        echo '<br>koneksi berhasil';
    }

    $sql = "UPDATE pegawai SET id_jabatan='$id_jabatan', kode_pegawai='$kode_pegawai',jenis_kelamin='$jenis_kelamin',nama='$nama',tempat_lahir='$tempat_lahir',
    alamat='$alamat' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "<br>Data berhasil diupdate";
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
    <title>Update</title>
</head>
<body>
    <?php if(isset($_GET['id'])): ?>
    <form action="" method="post">
        ID Jabatan: <input type="number" name="id_jabatan" value="<?php echo $id_jabatan; ?>"><br>
        Kode Pegawai: <input type="text" name="kode_pegawai" value="<?php echo $kode_pegawai; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <?php endif; ?>
</body>
</html>