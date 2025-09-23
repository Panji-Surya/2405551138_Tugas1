<?php
$hargaBarang = [
    "Buku" => 5000,
    "Pulpen" => 2000,
    "Penggaris" => 1500,
    "Penghapus" => 1000,
    "Map" => 3000
];

echo "<h3>Daftar Harga Barang:</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Barang</th><th>Harga</th></tr>";

foreach ($hargaBarang as $barang => $harga) {
    echo "<tr><td>$barang</td><td>Rp $harga</td></tr>";
}

echo "</table>";
?>
