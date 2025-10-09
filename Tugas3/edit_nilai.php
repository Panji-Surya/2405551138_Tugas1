<?php
include 'koneksi.php';

$success_message = ''; // Variabel untuk menyimpan pesan berhasil

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT nilai.*, mahasiswa.nim, mahasiswa.nama FROM nilai 
                           JOIN mahasiswa ON nilai.mahasiswa_id = mahasiswa.id WHERE nilai.id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahasiswa_id = $_POST['mahasiswa_id'];
            $mata_kuliah = $_POST['mata_kuliah'];
            $sks = $_POST['sks'];
            $nilai_huruf = $_POST['nilai_huruf'];
            $nilai_angka = $_POST['nilai_angka'];

            // Update query
            $stmt = $conn->prepare("UPDATE nilai SET mahasiswa_id = ?, mata_kuliah = ?, sks = ?, nilai_huruf = ?, nilai_angka = ? WHERE id = ?");
            $stmt->bind_param("isssdi", $mahasiswa_id, $mata_kuliah, $sks, $nilai_huruf, $nilai_angka, $id);
            $stmt->execute();

            $success_message = "Nilai berhasil diubah! <a href='nilai.php'>Kembali</a>";
        }
    } else {
        $success_message = "Data tidak ditemukan! <a href='nilai.php'>Kembali</a>";
        exit;
    }
} else {
    $success_message = "ID tidak ditemukan! <a href='nilai.php'>Kembali</a>";
    exit;
}
?>

<form method="POST">
    <label for="mahasiswa_id">Pilih Mahasiswa:</label>
    <select name="mahasiswa_id" required>
        <?php
        $result = $conn->query("SELECT * FROM mahasiswa");
        while ($mahasiswa = $result->fetch_assoc()) {
            // Set selected attribute based on existing mahasiswa_id
            $selected = ($mahasiswa['id'] == $row['mahasiswa_id']) ? "selected" : "";
            echo "<option value='{$mahasiswa['id']}' $selected>{$mahasiswa['nim']} - {$mahasiswa['nama']}</option>";
        }
        ?>
    </select><br>

    <label for="mata_kuliah">Mata Kuliah:</label>
    <input type="text" name="mata_kuliah" value="<?= isset($row['mata_kuliah']) ? $row['mata_kuliah'] : '' ?>" required><br>

    <label for="sks">SKS:</label>
    <input type="number" name="sks" value="<?= isset($row['sks']) ? $row['sks'] : '' ?>" required><br>

    <label for="nilai_huruf">Nilai Huruf:</label>
    <input type="text" name="nilai_huruf" value="<?= isset($row['nilai_huruf']) ? $row['nilai_huruf'] : '' ?>" required><br>

    <label for="nilai_angka">Nilai Angka:</label>
    <input type="number" name="nilai_angka" value="<?= isset($row['nilai_angka']) ? $row['nilai_angka'] : '' ?>" step="0.01" required><br>

    <button type="submit">Simpan Perubahan</button>
</form>

<?php
// Menampilkan pesan berhasil atau kesalahan setelah form
if ($success_message) {
    echo "<p>$success_message</p>";
}
?>