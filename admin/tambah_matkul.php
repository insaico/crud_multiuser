<?php
session_start();
include "admin/css.php";
include "admin/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>

<div class="container">
    <h1 style="text-align: center;">Tambah Matakuliah</h1>
    <form action="admin/proses_tambah_mk.php" method="POST">
        Nama :
        <input type="text" name="nama_matkul" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Matkul" class="btn btn-primary">
        <a href="admin/datamatkul.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>
