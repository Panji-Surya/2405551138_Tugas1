<form method="post">
    <label for="n1">Masukkan nilai n1:</label>
    <input type="number" id="n1" name="n1">
    <label for="n2">Masukkan nilai n2:</label>
    <input type="number" id="n2" name="n2">
    <input type="submit" value="Tampilkan Bilangan Genap">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    
    if ($n1 < $n2) {
        echo "Bilangan genap antara $n1 dan $n2: <br>";
        for ($i = $n1; $i <= $n2; $i++) {
            if ($i % 2 == 0) {
                echo "$i <br>";
            }
        }
    } else {
        echo "Nilai n1 harus lebih kecil dari n2.";
    }
}
?>
