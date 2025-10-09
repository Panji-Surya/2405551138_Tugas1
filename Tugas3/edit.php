<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE id=$id");
$data = $result->fetch_assoc();
?>

<form method="post">
    NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Prodi: <input type="text" name="prodi" value="<?= $data['prodi'] ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
