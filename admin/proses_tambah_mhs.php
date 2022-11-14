<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_jurusan = $_POST['nama_jurusan'];

    if (empty($nama)) {
        echo "<script>alert('nama mahasiswa tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
    } elseif (empty($nim)) {
        echo "<script>alert('nama nim tidak boleh kosong'); location.href='tambah_mahasiswa.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, alamat, username, password, nama_jurusan)
        value (' " . $nama . " ',' " . $nim . " ',' " . $alamat . " ','" . $username . "','" . $password . "','" . $nama_jurusan . "')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data mahasiswa');location.href='tambah_mahasiswa.php'</script>";
        }
    }
}
?>