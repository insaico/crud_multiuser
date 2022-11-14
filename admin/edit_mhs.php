<?php 
    include "admin/koneksi.php";
    include "admin/css.php";
    $qry_get_mahasiswa=mysqli_query($conn,"select * from mahasiswa where id_mahasiswa = '".$_GET['id_mahasiswa']."'");
    $data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
    ?>
    <h3>Ubah Mahasiswa</h3>
    <form action="admin/proses_edit_mhs.php" method="post">
        <input type="hidden" name="id_mahasiswa" value= "<?=$data_mahasiswa['id_mahasiswa']?>">
        Nama :
      <input type="text" name="nama" value="<?=$data_mahasiswa['nama']?>" class="form-control">
        NIM : 
      <input type="text" name="nim" value="<?=$data_mahasiswa['nim']?>" class="form-control">
        Alamat :
      <input type="text" name="alamat" value="" class="form-control"> <br>
        Username :
      <input type="text" name="username" value="" class="form-control"> <br>
        Password :
      <input type="password" name="password" value="" class="form-control"> <br>
        Jurusan :
        <select name="id_jurusan" value="<?= $data_mahasiswa['id_jurusan'] ?>" class="form-select form-control">
         <option> Pilih Jurusan</option>
            <?php
            include "admin/koneksi.php";
            $qry_jurusan = mysqli_query($conn, "SELECT * FROM jurusan");
            while ($data_jurusan = mysqli_fetch_array($qry_jurusan)) {
                echo '<option value="' . $data_jurusan['id_jurusan'] . '">' . $data_jurusan['nama_jurusan'] . '</option>';
            };
            ?>
        </select>
        <br>
        <input type="submit" name="simpan" value="Ubah Mahasiswa" class="btn btn-primary">
        <a href="admin/data_mahasiswa.php" style="float: right;" class="btn btn-success">Kembali</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
