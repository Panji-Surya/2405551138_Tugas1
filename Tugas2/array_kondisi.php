<?php
$mahasiswa = [
    ["nim" => "2405551138", "nama" => "I Made Bagus Panji Surya Permana", "nilai" => 75],
    ["nim" => "2405551149", "nama" => "I Kadek Bradpit", "nilai" => 65],
    ["nim" => "2405551150", "nama" => "I Ketut Marlon", "nilai" => 85]
];

echo "<h3>Daftar Mahasiswa dan Status Kelulusan:</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Nilai</th><th>Status</th></tr>";

foreach ($mahasiswa as $mhs) {
    $status = ($mhs['nilai'] >= 70) ? "Lulus" : "Tidak Lulus";
    echo "<tr><td>{$mhs['nim']}</td><td>{$mhs['nama']}</td><td>{$mhs['nilai']}</td><td>$status</td></tr>";
}

echo "</table>";
?>
