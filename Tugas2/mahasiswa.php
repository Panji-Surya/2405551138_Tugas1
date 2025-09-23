<?php
$mahasiswa = [
    "2405551138" => "I Made Bagus Panji Surya Permana",
    "2405551149" => "I Kadek Bradpit",
    "2405551150" => "I Ketut Marlon"
];

echo "<h3>Daftar Mahasiswa:</h3>";
echo "<ul>";
foreach ($mahasiswa as $nim => $nama) {
    echo "<li>$nim : $nama</li>";
}
echo "</ul>";
?>
