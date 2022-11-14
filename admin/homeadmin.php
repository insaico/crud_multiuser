<?php 
session_start();

if ($_SESSION['level'] == "") {
    header("location:../index.php?pesan=gagal");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>PERPUSTAKAAN UNIGA</title>
  </head>
<body>
<!--header-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin/homeadmin.php">UNIGA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="admin/datamahasiswa.php">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/datadosen.php">Data Dosen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/datajurusan.php">Data Jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/datajadwal.php">Jadwal Kuliah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/datamatkul.php">Mata Kuliah</a>
              </li>
            </ul>
            <a href="admin/logout.php" class="btn btn-primary">Logout</a>
        </div>
    </nav>
</header>

<section class="Profil">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="admin/img/kamp.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="admin/img/akuntansi.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="admin/img/si.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
</section>

<section class="fakultas">
    <h1>Data Universitas Gajayana</h1>
    <p> Universitas Gajayana memiliki 13 pilihan program studi, yaitu Manajemen, Akuntansi, Ekonomi Pembangunan dan Perbankan, Bahasa Inggris, Psikologi, Ilmu Komunikasi, Sistem Informasi, Teknik Elektro, Teknik Mesin, Teknik/ Rekayasa Industri, Fisika, Magister Manajemen dan Magister Akuntansi.</p>
    <div class="row">
        <div class="fakultas-kolom">
            <img src="admin/img/si.jpg">
            <h3>Fakultas Teknik dan Informatika</h3>
            <p> Mewujudkan fakultas yang unggul dan bermutu dalam pengembangan ilmu pengetahuan dan teknologi dan sumber daya manusia yang kompeten, 
                profesional dalam bidang Teknik dan Informatika,<br> menjunjung tinggi nilai-nilai moral, beretika, 
                dan mampu bersaing hingga tingkat nasional.</p>
                <p style="float: left;">       
                  <a href="admin/datajurusan.php" class="btn btn-success">Data Jurusan</a>
              </p>
        </div>
        <div class="fakultas-kolom">
            <img src="admin/img/mhs.jpg">
            <h3>Mahasiswa Universitas Gajayana</h3>
            <p> Terwujudnya Mahasiswa yang bermutu dan mampu bersaing di tingkat nasional dalam pengembangan ilmu, pendidikan, 
                dan pembelajaran berbasis teknologi informasi dengan menjunjung tinggi etika dan moral.</p>
                <p style="float: left;">
                  <a href="admin/datamahasiswa.php" class="btn btn-success">Data Mahasiswa</a>
              </p>
        </div>
        <div class="fakultas-kolom">
            <img src="admin/img/dosen.jpg">
            <h3>Dosen Universitas Gajayana</h3>
            <p>Pembelajaran ditunjang oleh dosen berkualitas dan didukung oleh dosen berkualifikasi Doktor (S-3) yang tidak saja kompeten secara akademis tetapi juga berpengalaman secara profesional dalam praktek. 
                </p>
                <p style="float: left;">
                  <a href="admin/datadosen.php" class="btn btn-success">Data Dosen</a>
              </p>
        </div>
        <div class="fakultas-kolom">
            <img src="admin/img/psikologi.jpg">
            <h3>Jadwal Kuliah</h3>
            <p>Universitas Gajayana memiliki 13 pilihan program studi, yaitu Manajemen, Akuntansi, Ekonomi Pembangunan dan Perbankan, Bahasa Inggris, Psikologi, Ilmu Komunikasi, Sistem Informasi, Teknik Elektro, Teknik Mesin, Teknik/ Rekayasa Industri, Fisika, Magister Manajemen dan Magister Akuntansi. 
                </p>
                <p style="float: left;">
                  <a href="admin/datajadwal.php" class="btn btn-success">Data Jadwal Kuliah</a>
              </p>
        </div>
        <div class="fakultas-kolom">
            <img src="admin/img/akuntansi.jpg">
            <h3>Mata Kuliah</h3>
            <p>Universitas Gajayana memiliki 13 pilihan program studi, yaitu Manajemen, Akuntansi, Ekonomi Pembangunan dan Perbankan, Bahasa Inggris, Psikologi, Ilmu Komunikasi, Sistem Informasi, Teknik Elektro, Teknik Mesin, Teknik/ Rekayasa Industri, Fisika, Magister Manajemen dan Magister Akuntansi.
                </p>
                <p style="float: left;">
                  <a href="admin/datamatkul.php" class="btn btn-success">Data Mata Kuliah</a>
              </p>
        </div>
</section>

<!----footer---->
</section>
<section class="footer">
<p>Dibuat oleh @Muhammad Arya Ristianto</p>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>