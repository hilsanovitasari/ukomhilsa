<!DOCTYPE html>
<html>

<head>
    <title>tambah data</title>
</head>

<body>
    <h2>Tambah Data Guru</h2>

    <form method="post" action="tambah-prosesguru.php">
        <label>NIP:</label><br />
        <input type="text" name="nip" required /><br />
        <label>Nama Lengkap:</label><br />
        <input type="text" name="nama" required /><br />
        <label>Tempat Lahir:</label><br />
        <input type="text" name="tempat_lahir" required /><br />
        <label>Tanggal Lahir:</label><br />
        <input type="date" name="tanggal_lahir" required /><br />
        <label>Jenis Kelamin:</label><br />
        <input type="text" name="jenis_kelamin" required /><br />
        <label>Agama:</label><br />
        <input type="text" name="agama" required /><br />
        <label>Alamat:</label><br />
        <input type="text" name="alamat" required /><br />
        <label>Mapel:</label><br />
        <input type="text" name="mapel" required /><br />
        <br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>