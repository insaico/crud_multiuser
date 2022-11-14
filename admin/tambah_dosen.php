<?php
session_start();
include "admin/css.php";
include "admin/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>

<div class="container">
    <h1 style="text-align: center;">Tambah Dosen</h1>
    <form action="admin/proses_tambah_dos.php" method="POST">
        Nama :
        <input type="text" name="nama_dosen" value="" class="form-control"> <br>
        ALAMAT :
        <input type="text" name="alamat" value="" class="form-control"> <br>
        TELEPON :
        <input type="text" name="telepon" value="" class="form-control"> <br>
        <input type="submit" name="simpan" value="Tambah Dosen" class="btn btn-primary">
        <a href="admin/datadosen.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>
