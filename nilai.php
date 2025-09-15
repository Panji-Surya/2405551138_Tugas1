<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai - 2405551138 I Made Bagus Panji Surya Permana</title>
</head>
<body>

    <h1>Menentukan Nilai - 2405551138 I Made Bagus Panji Surya Permana</h1>
    <form action="" method="POST">
        <label for="nilai">Masukkan Nilai (0-100): </label>
        <input type="number" name="nilai" id="nilai" required><br><br>
        <button type="submit">Cek Grade</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nilai = $_POST['nilai'];

        if ($nilai >= 85) {
            $grade = 'A';
        } elseif ($nilai >= 70) {
            $grade = 'B';
        } elseif ($nilai >= 55) {
            $grade = 'C';
        } elseif ($nilai >= 40) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        echo "<h2>Grade Anda: $grade</h2>";
    }
    ?>

    <br>
    <form action="home.html">
        <button type="submit">Kembali ke Beranda</button>
    </form>

</body>
</html>
