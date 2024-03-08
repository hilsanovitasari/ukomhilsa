<!DOCTYPE html>
<html>

<head>
    <title>tambah data</title>
</head>

<body>
    <h2>Tambah Data Siswa</h2>

    <form method="post" action="tambah-proses.php">
        <label>NIS:</label><br />
        <input type="text" name="nis" required /><br />
        <label>Nama Lengkap:</label><br />
        <input type="text" name="nama" required /><br />
        <label>Kelas:</label><br />
        <input type="text" name="kelas" required /><br />
        <label>Jurusan:</label><br />
        <input type="text" name="jurusan" required /><br />
        <label>Tempat Lahir:</label><br />
        <input type="text" name="tempat_lahir" required /><br />
        <label>Tanggal Lahir:</label><br />
        <input type="date" name="tanggal_lahir" required /><br />
        <label>Agama:</label><br />
        <input type="text" name="agama" required /><br />
        <label>Jenis Kelamin:</label><br />
        <input type="text" name="jenis_kelamin" required /><br />
        <label>Alamat:</label><br />
        <input type="text" name="alamat" required /><br />
        <br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>