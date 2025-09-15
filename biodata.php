<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata - 2405551138 I Made Bagus Panji Surya Permana</title>
</head>
<body>

    <h1>Form Biodata - 2405551138 I Made Bagus Panji Surya Permana</h1>
    <form action="" method="POST">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="umur">Umur: </label>
        <input type="number" name="umur" id="umur" required><br><br>

        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="alamat">Alamat: </label>
        <input type="text" name="alamat" id="alamat" required><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        echo "<h2>Halo, nama saya $nama. Umur saya $umur tahun. Saya seorang $jenis_kelamin. Saya tinggal di $alamat.</h2>";
    }
    ?>

    <br>
    <form action="home.html">
        <button type="submit">Kembali ke Beranda</button>
    </form>

</body>
</html>
