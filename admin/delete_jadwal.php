<?php
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
if ($_GET['id_jadwal']) {
    include "admin/koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM jadwalkuliah WHERE id_jadwal = '" . $_GET['id_jadwal'] . "'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data jadwal'); location.href='admin/datajadwal.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data jadwal'); location.href='admin/datajadwal.php'</script>";
    }
}