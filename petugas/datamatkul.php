<?php
include "petugas/css.php";
include "petugas/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>
<div class="container">
    <h1 style="text-align: center;">Data Mata Kuliah</h1><br>

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
            include "petugas/koneksi.php";
            $qry_matkul = mysqli_query($conn, "SELECT * FROM matakuliah");          
            $no = 0; 
            while($data_matkul = mysqli_fetch_array($qry_matkul)){
                $no++?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_matkul['nama_matkul'] ?></td>

                </tr>
            <?php        
            }
            ?>    
        </tbody>
    </table>
</div>