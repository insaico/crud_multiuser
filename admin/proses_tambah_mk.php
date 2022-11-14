<?php
if ($_POST) {
    $nama_matkul = $_POST['nama_matkul'];

    if (empty($nama_matkul)) {
        echo "<script>alert('Nama Matakuliah tidak boleh kosong'); location.href='tambah_matkul.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO matakuliah(nama_matkul) VALUE ('" . $nama_matkul . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Sukses menambahkan matakuliah baru'); location.href='datamatkul.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan matakuliah baru'); location.href='datamatkul.php'</script>";
        }
    }
}
?>