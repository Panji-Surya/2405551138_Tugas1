<?php
// Include koneksi.php untuk menghubungkan ke database
include "koneksi.php"; // Pastikan path-nya benar

// Query untuk menampilkan nilai mahasiswa
$result = $conn->query("SELECT nilai.*, mahasiswa.nim, mahasiswa.nama FROM nilai JOIN mahasiswa ON nilai.mahasiswa_id = mahasiswa.id");
?>

<h3>Daftar Nilai Mahasiswa</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th><th>Mahasiswa</th><th>Mata Kuliah</th><th>SKS</th><th>Nilai Huruf</th><th>Nilai Angka</th><th>Aksi</th>
    </tr>
<?php
// Memeriksa apakah ada data
if ($result->num_rows > 0) {
    // Memasukkan data hasil query ke dalam tabel
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nim']} - {$row['nama']}</td>
                <td>{$row['mata_kuliah']}</td>
                <td>{$row['sks']}</td>
                <td>{$row['nilai_huruf']}</td>
                <td>{$row['nilai_angka']}</td>
                <td>
                    <a href='edit_nilai.php?id={$row['id']}'>Edit</a> |
                    <a href='hapus_nilai.php?id={$row['id']}'>Hapus</a>
                </td>
            </tr>";
    }
} else {
    // Jika tidak ada data
    echo "<tr><td colspan='7'>Tidak ada data nilai mahasiswa.</td></tr>";
}
?>
</table>

<br></br>
<tr><td colspan='7'>Halaman utama. <a href='index.php'>Kembali</a></td></tr>