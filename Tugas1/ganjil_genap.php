<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil Genap - 2405551138 I Made Bagus Panji Surya Permana</title>
</head>
<body>

    <h1>Menentukan Bilangan Ganjil atau Genap - 2405551138 I Made Bagus Panji Surya Permana</h1>
    <form action="" method="POST">
        <label for="angka">Masukkan Angka: </label>
        <input type="number" name="angka" id="angka" required><br><br>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $angka = $_POST['angka'];

        if ($angka % 2 == 0) {
            echo "<h2>Angka $angka adalah Genap</h2>";
        } else {
            echo "<h2>Angka $angka adalah Ganjil</h2>";
        }
    }
    ?>

    <br>
    <form action="home.html">
        <button type="submit">Kembali ke Beranda</button>
    </form>

</body>
</html>
