<?php 
include "admin/koneksi.php";
include "admin/css.php";
include "admin/navbar.php";
$qry_get_matakuliah = mysqli_query($conn, "SELECT * FROM matakuliah WHERE id_matkul = '" . $_GET['id_matkul'] . "'");
$data_matkul = mysqli_fetch_array($qry_get_matakuliah);
?>

<div class="container">
    <h3 style="text-align: center; padding-top: 20px;">Edit Matakuliah</h3>
    <form action="admin/proses_edit_mk.php" method="POST">
    <input type="hidden" name="id_matkul" value="<?= $data_matkul['id_matkul'] ?>" class="form-control"> <br>

        Nama :
        <input type="text" name="nama_matkul" value="<?= $data_matkul['nama_matkul'] ?>" class="form-control"> <br>
        <input type="submit" name="simpan" value="Edit Matkul" class="btn btn-primary">
        <a href="admin/datamatkul.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
</div>