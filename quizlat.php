<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan - Edit Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="text"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="hasilquiz.php" method="post">
    <h2>Data Karyawan - Edit Data</h2>
    <label for="nik">NIK:</label>
    <input type="number" id="nik" name="nik" maxlength="16" required><br>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" maxlength="100" required><br>

    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" id="tempat_lahir" name="tempat_lahir" maxlength="50"><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="01-01-2000" required><br>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" maxlength="100"><br>

    <label for="notelp">No Telepon:</label>
    <input type="tel" id="notelp" name="notelp" maxlength="15"><br>

    <label for="jabatan">Jabatan Sekarang:</label><br>
    <select id="jabatan" name="jabatan">
        <option value="Staff">Staff</option>
        <option value="Supervisor">Supervisor</option>
        <option value="Manajer">Manajer</option>
    </select><br>

    <label for="status">Status:</label><br>
    <select id="status" name="status" required>
        <option value="-Pilih">-Pilih-</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
    </select><br>

    <br>
    <input type="submit" value="Kirim">
    <input type="reset" value="Batal">
</form>

</body>
</html>
