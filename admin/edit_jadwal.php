<?php

include "admin/koneksi.php";
include "admin/css.php";
include "admin/navbar.php";

$qry_get_jadwal = mysqli_query($conn, "SELECT * FROM jadwalkuliah WHERE id_jadwal = '" . $_GET['id_jadwal'] . "'");
$data_jadwal = mysqli_fetch_array($qry_get_jadwal);
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Edit Jadwal</h3>
    <form action="admin/proses_edit_jdl.php" method="POST">
        <input type="hidden" name="id_jadwal" value="<?= $data_jadwal['id_jadwal'] ?>">
        Hari :
        <select name="hari" value="<?= $data_jadwal['hari'] ?>" class="form-select form-control" aria-label=".form-select-sm example">
            
            <option value="<?= $data_jadwal['hari'] ?>"> <?= $data_jadwal['hari'] ?></option>
            <option>Senin</option>
            <option>Selasa</option>
            <option>Rabu</option>
            <option>Kamis</option>
            <option>Jumat</option>
        </select>
     
        <br>
        Jam :
        <input type="time" name="jam" value="<?= $data_jadwal['jam']?>" class="form-control"> <br>        
        Matkul :
        <select name="id_matkul" value="<?= $data_jadwal['id_matkul'] ?>" class="form-select form-control" aria-label=".form-select-sm example">
         <option> Pilih Matkul</option>
            <?php
            include "admin/koneksi.php";
            $qry_matkul = mysqli_query($conn, "SELECT * FROM matakuliah");
            while ($data_jadwal = mysqli_fetch_array($qry_matkul)) {
                echo '<option value="' . $data_jadwal['id_matkul'] . '">' . $data_jadwal['nama_matkul'] . '</option>';
            };
            ?>
        </select>
        <br>
        Dosen :
        <select name="id_dosen" value="<?= $data_jadwal['id_dosen'] ?>" class="form-select form-control" aria-label=".form-select-sm example">
         <option> Pilih Dosen</option>
            <?php
            include "admin/koneksi.php";
            $qry_dosen = mysqli_query($conn, "SELECT * FROM dosen");
            while ($data_jadwal = mysqli_fetch_array($qry_dosen)) {
                echo '<option value="' . $data_jadwal['id_dosen'] . '">' . $data_jadwal['nama_dosen'] . '</option>';
            };
            ?>
        </select>
        <br>
        <input type="submit" name="simpan" value="Edit Jadwal" class="btn btn-primary">
        <a href="admin/datajadwal.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>