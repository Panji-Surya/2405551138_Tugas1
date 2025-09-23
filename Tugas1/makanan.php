<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan - 2405551138 I Made Bagus Panji Surya Permana</title>
</head>
<body>

    <h1>Pilih Menu Makanan - 2405551138 I Made Bagus Panji Surya Permana</h1>
    <form action="" method="POST">
        <label for="menu">Pilih Menu: </label>
        <select name="menu" id="menu" required>
            <option value="nasi_goreng">Nasi Goreng</option>
            <option value="soto">Soto</option>
            <option value="mie_ayam">Mie Ayam</option>
        </select><br><br>
        <button type="submit">Tampilkan Harga</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $menu = $_POST['menu'];

        switch ($menu) {
            case 'nasi_goreng':
                $harga = 20000;
                break;
            case 'soto':
                $harga = 15000;
                break;
            case 'mie_ayam':
                $harga = 18000;
                break;
        }

        echo "<h2>Harga $menu: Rp $harga</h2>";
    }
    ?>

    <br>
    <form action="home.html">
        <button type="submit">Kembali ke Beranda</button>
    </form>

</body>
</html>
