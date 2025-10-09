<?php
include 'koneksi.php';

$success_message = ''; // Variabel untuk menyimpan pesan berhasil

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mahasiswa_id = $_POST['mahasiswa_id'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $sks = $_POST['sks'];
    $nilai_huruf = $_POST['nilai_huruf'];
    $nilai_angka = $_POST['nilai_angka'];

    // Query untuk insert data nilai
    $stmt = $conn->prepare("INSERT INTO nilai (mahasiswa_id, mata_kuliah, sks, nilai_huruf, nilai_angka) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isssd", $mahasiswa_id, $mata_kuliah, $sks, $nilai_huruf, $nilai_angka);
    
    if ($stmt->execute()) {
        $success_message = "Data berhasil disimpan.";
    } else {
        $success_message = "Terjadi kesalahan: " . $stmt->error;
    }
}
?>

<form method="POST">
    <label for="mahasiswa_id">Pilih Mahasiswa:</label>
    <select name="mahasiswa_id" required>
        <?php
        $result = $conn->query("SELECT * FROM mahasiswa");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['nim']} - {$row['nama']}</option>";
        }
        ?>
    </select><br>

    <label for="mata_kuliah">Mata Kuliah:</label>
    <input type="text" name="mata_kuliah" id="mata_kuliah" required><br>

    <label for="sks">SKS:</label>
    <input type="number" name="sks" id="sks" required><br>

    <label for="nilai_huruf">Nilai Huruf:</label>
    <input type="text" name="nilai_huruf" id="nilai_huruf" required><br>

    <label for="nilai_angka">Nilai Angka:</label>
    <input type="number" name="nilai_angka" id="nilai_angka" step="0.01" required><br>

    <button type="submit">Tambah Nilai</button>
</form>

<?php
// Menampilkan pesan berhasil atau kesalahan setelah form
if ($success_message) {
    echo "<p>$success_message</p>";
}
?>

<tr><td colspan='7'>Halaman utama. <a href='index.php'>Kembali</a></td></tr>