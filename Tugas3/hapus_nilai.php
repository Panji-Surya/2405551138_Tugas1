<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM nilai WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Nilai berhasil dihapus <a href='nilai.php'>Kembali</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
