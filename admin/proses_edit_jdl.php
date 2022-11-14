<?php
if ($_POST) {
    $id_jadwal = $_POST['id_jadwal'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $matkul = $_POST['id_matkul'];
    $dosen = $_POST['id_dosen'];

    if (empty($hari)) {
        echo "<script>alert('Hari tidak boleh kosong!!!'); location.href='admin/edit_jadwal.php'</script>";
    } elseif (empty($jam)) {
        echo "<script>alert('Jam tidak boleh kosong!!!'); location.href='admin/edit_jadwal.php'</script>";
    } 
    elseif (empty($matkul)) {
        echo "<script>alert('Matkul tidak boleh kosong!!!'); location.href='admin/edit_jadwal.php'</script>";
    }
    elseif (empty($dosen)) {
        echo "<script>alert('Dosen tidak boleh kosong!!!'); location.href='admin/edit_jadwal.php'</script>";
    }
     else {
        include "admin/koneksi.php";
        $update = mysqli_query($conn, "UPDATE jadwalkuliah SET hari='" . $hari . "',jam='" . $jam . "',id_matkul = '".$matkul."',id_dosen = '".$dosen."'  where id_jadwal = '" . $id_jadwal . "' ") or die(mysqli_error($conn));                                                           
        if ($update) {
            echo "<script>alert('Sukses update data Jadwal!!!'); location.href='admin/datajadwal.php'</script>";
        } else {
            echo "<script>alert('Gagal update data Jadwal!!!'); location.href='admin/edit_jadwal.php'</script>";
        }
    }
}