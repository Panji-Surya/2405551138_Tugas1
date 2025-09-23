<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator - 2405551138 I Made Bagus Panji Surya Permana</title>
</head>
<body>

    <h1>Kalkulator - 2405551138 I Made Bagus Panji Surya Permana</h1>
    <form action="" method="POST">
        <label for="angka1">Angka 1: </label>
        <input type="number" name="angka1" id="angka1" required><br><br>

        <label for="angka2">Angka 2: </label>
        <input type="number" name="angka2" id="angka2" required><br><br>

        <label for="aktivitas">Aktivitas: </label>
        <select name="aktivitas" id="aktivitas" required>
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $aktivitas = $_POST['aktivitas'];

        switch ($aktivitas) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;
        }

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>

    <br>
    <form action="home.html">
        <button type="submit">Kembali ke Beranda</button>
    </form>

</body>
</html>
