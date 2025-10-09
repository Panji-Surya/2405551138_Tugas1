<?php include "koneksi.php"; ?>

<h3>Daftar Mahasiswa</h3>
<a href="tambah.php">Tambah Mahasiswa</a> | 
<a href="nilai.php">Nilai Mahasiswa</a>
<br><br>
<input type="text" id="keyword" placeholder="Cari mahasiswa...">
<br><br>

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="hasil">
    <?php 
    $result = $conn->query("SELECT * FROM mahasiswa");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nim']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['prodi']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='hapus.php?id={$row['id']}'>Hapus</a> |
                        <a href='tambah_nilai.php?id={$row['id']}'>Tambah Nilai</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
    }
    ?>
</tbody>
</table>

<script>
document.querySelector("#keyword").oninput = function() {
    let key = this.value;
    fetch("cari-mahasiswa.php?keyword=" + key)
        .then(res => res.json())
        .then(data => {
            let isi = "";
            if (data.length > 0) {
                data.forEach(m => {
                    isi += `<tr>
                              <td>${m.id}</td>
                              <td>${m.nim}</td>
                              <td>${m.nama}</td>
                              <td>${m.prodi}</td>
                              <td>
                                  <a href='edit.php?id=${m.id}'>Edit</a> |
                                  <a href='hapus.php?id=${m.id}'>Hapus</a> |
                                  <a href='tambah_nilai.php?id=${m.id}'>Tambah Nilai</a>
                              </td>
                            </tr>`;
                });
            } else {
                isi = "<tr><td colspan='5'>Tidak ada mahasiswa yang ditemukan.</td></tr>";
            }
            document.querySelector("#hasil").innerHTML = isi;
        });
};
</script>
