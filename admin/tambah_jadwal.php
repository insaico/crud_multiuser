<?php
session_start();
include "admin/css.php";
include "admin/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>

<div class="container">
    <h1 style="text-align: center;">Tambah Jadwal Kuliah</h1>
    <form action="admin/proses_tambah_jdl.php" method="POST">
        Hari :
        <select name="hari" class="form-select form-control" aria-label=".form-select-sm example">
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
        </select>

        Jam :
        <input type="time" name="jam" value="" class="form-control"> <br>

        Mata Kuliah :
        <select name="id_matkul" class="form-select form-control" aria-label=".form-select-sm example">
            <option></option>
            <?php
            include "admin/koneksi.php";
            $qry_matakuliah = mysqli_query($conn, "SELECT * FROM matakuliah");
            while ($data_matkul = mysqli_fetch_array($qry_matakuliah)) {
                echo '<option value="' . $data_matkul['id_matkul'] . '">' . $data_matkul['nama_matkul'] . '</option>';
            };
            ?>
        </select>

        Dosen :
        <select name="id_dosen" class="form-select form-control" aria-label=".form-select-sm example">
            <option></option>
            <?php
            include "admin/koneksi.php";
            $qry_dosen = mysqli_query($conn, "SELECT * FROM dosen");
            while ($data_dosen = mysqli_fetch_array($qry_dosen)) {
                echo '<option value="' . $data_dosen['id_dosen'] . '">' . $data_dosen['nama_dosen'] . '</option>';
            };
            ?>
        </select>
        <input type="submit" name="simpan" value="Tambah Jadwal" class="btn btn-primary">
        <a href="admin/datajadwal.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>
