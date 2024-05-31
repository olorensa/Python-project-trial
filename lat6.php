<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<form action="hasilat6.php" method="post">
    <b>Form Registrasi</b>
    <br><br>
    Isi Data Dibawah Ini :
    <br><br>
    Nama            : <input type="text" name="nama" size="25" maxlength="100"><br>
    Alamat          : <input type="text" name="alamat" size="25" maxlength="100"><br>
    Tempat Lahir    : <input type="text" name="tempat_lahir" size="25" maxlength="50"><br>
    Tanggal Lahir   : <input type="date" name="tanggal_lahir" value="2020-02-02"><br>
    Jenis Kelamin   :
    <input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jeniskel" value="Perempuan">Perempuan<br>
    Pendidikan      :
    <select name="pendidikan">
        <option value="-Pilih">-Pilih-</option>
        <option value="SMA Sederajat">SMA Sederajat</option>
        <option value="D1">D1</option>
        <option value="D3">D3</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="Tidak Ada">Tidak Ada</option>
    </select><br>
    <br>
    <input type="submit" value="Kirim">
    <input type="reset" value="Batal">
</form>

</body>
</html>
