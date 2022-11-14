<?php
if($_POST){
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_jurusan = $_POST['id_jurusan'];
    
    if(empty($nama)){
        echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='admin/edit_mhs.php';</script>";

    } elseif(empty($nim)){
        echo "<script>alert('username tidak boleh kosong');location.href='admin/edit_mhs.php';</script>";
    } else {
        include "admin/koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update mahasiswa set nama='".$nama."',nim='".$nim."',alamat='".$alamat."',username='".$username."',password='".$password."',nama_jurusan='".$nama_jurusan."' where id_mahasiswa = '".$id_mahasiswa."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update mahasiswa');location.href='admin/datamahasiswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update mahasiswa');location.href='admin/edit_mhs.php?id_mahasiswa=".$id_mahasiswa."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update mahasiswa set nama='".$nama."',nim='".$nim."',alamat='".$alamat."',username='".$username."',password='".$password."',id_jurusan='".$nama_jurusan."' where id_mahasiswa = '".$id_mahasiswa."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update mahasiswa');location.href='admin/datamahasiswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update mahasiswa');location.href='admin/edit_mhs.php?id_siswa=".$id_mahasiswa."';</script>";
            }
        }
    }
}
?>