<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ucapan - 2405551138 I Made Bagus Panji Surya Permana</title>
</head>
<body>

    <h1>Form Ucapan - 2405551138 I Made Bagus Panji Surya Permana</h1>
    <form action="" method="POST">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required>
        <button type="submit">Kirim</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        echo "<h2>Halo, $nama selamat belajar PHP!</h2>";
    }
    ?>

    <br>
    <form action="home.html">
        <button type="submit">Kembali ke Beranda</button>
    </form>

</body>
</html>
