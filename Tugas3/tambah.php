<?php include "koneksi.php"; ?>

<h3>Tambah Mahasiswa</h3>

<form method="post" onsubmit="return validasi()">
    NIM: <input type="text" id="nim" name="nim"><br>
    Nama: <input type="text" id="nama" name="nama"><br>
    Prodi: <input type="text" id="prodi" name="prodi"><br>
    <input type="submit" value="Simpan">
</form>

<p id="pesan" style="color: red;"></p>

<script>
function validasi() {
    let nim = document.querySelector("#nim").value;
    let nama = document.querySelector("#nama").value;
    let prodi = document.querySelector("#prodi").value;

    if (nim.length < 5) {
        document.querySelector("#pesan").innerHTML = "NIM minimal 5 karakter!";
        return false;
    }
    if (nama === "" || prodi === "") {
        document.querySelector("#pesan").innerHTML = "Nama dan Prodi tidak boleh kosong!";
        return false;
    }
    return true;
}
</script>

<?php
if (isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['prodi'])) {
    $nim   = $_POST['nim'];
    $nama  = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>