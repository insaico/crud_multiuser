<?php
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
include "admin/css.php";
if ($_GET['id_jurusan']) {
    include "admin/koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM jurusan WHERE id_jurusan ='" . $_GET['id_jurusan'] . "'");

    if ($qry_hapus) {
        echo "<script>
        alert('Sukses hapus data jurusan'); location.href='admin/datajurusan.php'
        </script>";
    } else {
        echo "<script>alert('Gagal hapus data jurusan'); location.href='admin/datajurusan.php'</script>";
    }
}
?>