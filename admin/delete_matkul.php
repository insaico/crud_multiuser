<?php
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
if ($_GET['id_matkul']) {
    include "admin/koneksi.php";
    $qry_hapus = mysqli_query($conn, "DELETE FROM matakuliah WHERE id_matkul = '" . $_GET['id_matkul'] . "'");

    if ($qry_hapus) {
        echo "<script>alert('Sukses hapus data matakuliah'); location.href='admin/datamatkul.php'</script>";
    } else {
        echo "<script>alert('Gagal hapus data matakuliah'); location.href='admin/datamatkul.php'</script>";
    }
}
?>