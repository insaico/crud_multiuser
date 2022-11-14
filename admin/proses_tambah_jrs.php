<?php
if ($_POST) {
    $nama_jurusan = $_POST['nama_jurusan'];

    if (empty($nama_jurusan)) {
        echo "<script>alert('Nama jurusan tidak boleh kosong'); location.href='tambah_jurusan.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO jurusan(nama_jurusan) VALUE ('" . $nama_jurusan . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan jurusan baru'); location.href='datajurusan.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jurusan baru'); location.href='datajurusan.php'</script>";
        }
    }
}
?>