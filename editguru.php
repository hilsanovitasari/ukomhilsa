<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Siswa</title>
</head>

<body>
    <h2>Edit Data Siswa</h2>
    <?php
    include('koneksiguru.php');
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM siswa WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <form method="post" action="edit-proses.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label>NIP:</label><br />
        <input type="text" name="nis" value="<?php echo $data['nip']; ?>" required /><br />
        <label>Nama Lengkap:</label><br />
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required /><br />
        <label>Tempat Lahir:</label><br />
        <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>" required /><br />
        <label>Tanggal Lahir:</label><br />
        <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required /><br />
        <label>Jenis Kelamin:</label><br />
        <input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" required /><br />
        <label>Agama:</label><br />
        <input type="text" name="agama" value="<?php echo $data['agama']; ?>" required /><br />
        <label>Alamat:</label><br />
        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required /><br />
        <label>Mapel:</label>
        <input type="text" name="mapel" value="<?php echo $data['mapel']; ?>" required /><br />
        <br />
        <input type="submit" value="Simpan" />
    </form>
</body>

</html>