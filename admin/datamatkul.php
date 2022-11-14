<?php
include "admin/css.php";
include "admin/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>
<div class="container">
    <h1 style="text-align: center;">Data Mata Kuliah</h1><br>
    <p style="float: left;">       
        <a href="admin/tambah_matkul.php" class="btn btn-success">Tambah Matkul</a>
    </p>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA MATKUL</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "admin/koneksi.php";
            $qry_matkul = mysqli_query($conn, "SELECT * FROM matakuliah");          
            $no = 0; 
            while($data_matkul = mysqli_fetch_array($qry_matkul)){
                $no++?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_matkul['nama_matkul'] ?></td>
                    <td><a href="admin/edit_matkul.php?id_matkul= <?= $data_matkul['id_matkul'] ?>" class="btn btn-success">Edit</a> 
                        <a href="admin/delete_matkul.php?id_matkul= <?= $data_matkul['id_matkul'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php        
            }
            ?>    
        </tbody>
    </table>
</div>