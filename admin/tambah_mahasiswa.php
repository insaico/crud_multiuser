<?php
session_start();
include "admin/css.php";

if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>
<h1 style="text-align: center;">Tambah Data Mahasiswa</h1>
    <form action="admin/proses_tambah_mhs.php" method="post">
      Nama :
      <input type="text" name="nama" value="" class="form-control"> <br>
      NIM :
      <input type="text" name="nim" value="" class="form-control"> <br>
      Alamat :
      <input type="text" name="alamat" value="" class="form-control"> <br>
      Username :
      <input type="text" name="username" value="" class="form-control"> <br>
      Password :
      <input type="password" name="password" value="" class="form-control"> <br>
      Jurusan :
      <input type="text" name="nama_jurusan" value="" class="form-control"> <br>
      <input type="submit" name="simpan" value="Tambah mahasiswa" class="btn btn-primary">
      <a href="admin/datamahasiswa.php" style="float: right;" class="btn btn-success">Kembali</a>
</form>