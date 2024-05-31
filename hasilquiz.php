<!DOCTYPE html>
<html>
<head>
    <title>Data Registrasi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            display: block;
            width: 120px;
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            margin: 20px auto;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
    $NIK = $_POST["nik"]; 
    $Nama = $_POST["nama"]; 
    $Tempat_Lahir = $_POST["tempat_lahir"];
    $Tanggal_Lahir = $_POST["tanggal_lahir"];
    $Alamat = $_POST["alamat"];
    $Notelp = $_POST["notelp"];
    $Jabatan = $_POST["jabatan"]; 
    $Status = $_POST["status"]; 
?>

<table>
    <tr>
        <th>Field</th>
        <th>Data</th>
    </tr>
    <tr>
        <td>NIK</td><td><?php echo $NIK; ?></td>
    </tr>
    <tr>
        <td>Nama</td><td><?php echo $Nama; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td><td><?php echo $Tempat_Lahir; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td><td><?php echo $Tanggal_Lahir; ?></td>
    </tr>
    <tr>
        <td>Alamat</td><td><?php echo $Alamat; ?></td>
    </tr>
    <tr>
        <td>No Telepon</td><td><?php echo $Notelp; ?></td>
    </tr>
    <tr>
        <td>Jabatan</td><td><?php echo $Jabatan; ?></td>
    </tr>
    <tr>
        <td>Status</td><td><?php echo $Status; ?></td>
    </tr>
</table>
<a href="quizlat.php">Back To Home</a>

</body>
</html>
