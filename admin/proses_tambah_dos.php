<?php
if ($_POST) {
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    if (empty($nama_dosen)) {
        echo "<script>alert('Nama dosen tidak boleh kosong'); location.href='tambah_dosen.php'</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('Alamat dosen tidak boleh kosong'); location.href='tambah_dosen.php'</script>";
    } elseif (empty($telepon)) {
        echo "<script>alert('Telepon dosen tidak boleh kosong'); location.href='tambah_dosen.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO dosen(nama_dosen, alamat, telepon) 
        VALUE ('" . $nama_dosen . "','" . $alamat . "','" . $telepon . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan dosen baru'); location.href='datadosen.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan dosen baru'); location.href='tambah_dosen.php'</script>";
        }
    }
}
?>