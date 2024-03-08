<!DOCTYPE html>
<html>

<head>
    <title>Data Guru</title>
</head>

<body>
    <center>
        <h1>Data Guru</h1>
    </center>
    <a href="tambahguru.php">Tambah Data Guru</a>
    <br /><br />

    <table border="1">
        <tr>
            <th>No.</th>
            <th>NIP</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Mapel</th>
            <th>Aksi</th>
        </tr>

        <?php
        include('koneksi.php');

        // Ambil data dari database
        $query = mysqli_query($connection, "SELECT * FROM guru");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['nip'] . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['tempat_lahir'] . "</td>";
            echo "<td>" . $data['tanggal_lahir'] . "</td>";
            echo "<td>" . $data['jenis_kelamin'] . "</td>";
            echo "<td>" . $data['agama'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['mapel'] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $data['id'] . "'>Edit</a> |
                    <a href='hapus.php?id=" . $data['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                </td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>