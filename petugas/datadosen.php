<?php
include "petugas/css.php";
include "petugas/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>
<div class="container">
    <h1 style="text-align: center;">Data Dosen</h1> <br>

    <table class="table table-hover table-striped border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TELEPON</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "petugas/koneksi.php";
            $qry_dosen = mysqli_query($conn, "SELECT * FROM dosen");
            
            $no = 0; 
            while($data_dosen = mysqli_fetch_array($qry_dosen)){
                $no++   ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_dosen['nama_dosen'] ?></td>
                    <td><?= $data_dosen['alamat'] ?></td>
                    <td><?= $data_dosen['telepon'] ?></td>

                </tr>
            <?php           
            }
            ?>             
        </tbody>
    </table>
</div>
