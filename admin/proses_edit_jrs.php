<?php
if ($_POST) {
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

    if (empty($nama_jurusan)) {
        echo "<script>alert('Nama jurusan tidak boleh kosong!!!'); location.href='admin/edit_jurusan.php'</script>";
    } else {
        include "admin/koneksi.php";
        $update = mysqli_query($conn, "UPDATE jurusan SET nama_jurusan = '" . $nama_jurusan . "' where id_jurusan = '" . $id_jurusan . "'  ") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Sukses update data jurusan!!!'); location.href='admin/datajurusan.php'</script>";
        } else {
            echo "<script>alert('Gagal update data jurusan!!!'); location.href='admin/edit_jurusan.php'</script>";
        }
    }
}