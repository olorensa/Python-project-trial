<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
</head>
<body>
<?php
    $Nama=$_POST["nama"]; 
    $Alamat = $_POST["alamat"];
    $Tempat_Lahir = $_POST["tempat_lahir"];
    $Tanggal_Lahir = $_POST["tanggal_lahir"];
    $Jenis_Kelamin = $_POST["jeniskel"];
    $Pendidikan = $_POST["pendidikan"]; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
</head>
<body>

<table border="1">
    <tr>
        <td>Nama</td><td><?php echo $Nama; ?></td>
    </tr>
    <tr>
        <td>Alamat</td><td><?php echo $Alamat; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td><td><?php echo $Tempat_Lahir; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td><td><?php echo $Tanggal_Lahir; ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td><td><?php echo $Jenis_Kelamin; ?></td>
    </tr>
    <tr>
        <td>Pendidikan</td><td><?php echo $Pendidikan; ?></td>
    </tr>
</table>
<a href="lat6.php">Back To Home</a>

</body>
</html>