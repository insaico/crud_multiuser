<?php
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
if ($_GET['id_dosen']) {
    include "admin/koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM dosen WHERE id_dosen = '" . $_GET['id_dosen'] . "' ");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data dosen'); location.href='admin/datadosen.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data dosen'); location.href='admin/datadosen.php'</script>";
    }
}