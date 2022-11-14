<?php
include "petugas/css.php";
include "petugas/navbar.php";
if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
?>
<div class="container">
    <h1 style="text-align: center;">Data Jurusan</h1> <br>

    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "petugas/koneksi.php";
            $qry_jurusan = mysqli_query($conn, "SELECT * FROM jurusan");
            
            $no = 0; 
            while($data_jurusan = mysqli_fetch_array($qry_jurusan)){
                $no++?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_jurusan['nama_jurusan'] ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>