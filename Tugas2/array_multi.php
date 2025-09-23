<?php
$mahasiswa = [
    ["nim" => "2405551138", "nama" => "I Made Bagus Panji Surya Permana", "umur" => 20, "prodi" => "Teknologi Informasi"],
    ["nim" => "2405551149", "nama" => "I Kadek Bradpit", "umur" => 19, "prodi" => "Teknologi Informasi"],
    ["nim" => "2405551150", "nama" => "I Ketut Marlon", "umur" => 18, "prodi" => "Teknologi Informasi"]
];

echo "<h3>Data Mahasiswa:</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Umur</th><th>Program Studi</th></tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr><td>{$mhs['nim']}</td><td>{$mhs['nama']}</td><td>{$mhs['umur']}</td><td>{$mhs['prodi']}</td></tr>";
}

echo "</table>";
?>
