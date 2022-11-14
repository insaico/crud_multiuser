<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <?php
  include "navbar.php";
  if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");
}
  ?>
  <div class="container">
    <h1 style="text-align: center;">Data Mahasiswa</h1> <br>
    <p style="float: left;">       
        <a href="admin/tambah_mahasiswa.php"  class="btn btn-success">Tambah Mahasiswa</a>
    </p>
    <table class="table table-hover table-striped  border border-secondary">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>ALAMAT</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "admin/koneksi.php";
            $qry_mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa JOIN jurusan ON jurusan.id_jurusan = mahasiswa.id_jurusan");
            $no = 0;
            while ($data_mahasiswa = mysqli_fetch_array($qry_mahasiswa)) {
                $no++;?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_mahasiswa['nama'] ?></td>
                    <td><?= $data_mahasiswa['nim'] ?></td>
                    <td><?= $data_mahasiswa['alamat'] ?></td>
                    <td><?= $data_mahasiswa['username'] ?></td>
                    <td><?= $data_mahasiswa['password'] ?></td>
                    <td><?= $data_mahasiswa['nama_jurusan'] ?></td>
                    <td><a href="admin/edit_mhs.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" class="btn btn-success">Edit</a> 
                        <a href="admin/delete_mhs.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>