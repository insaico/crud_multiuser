<?php 
session_start(); 
include "db_conn.php";

$uname = $_POST['user_name'];
$pass = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'");
$cek = mysqli_num_rows($login);


if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level']=="admin"){
        $_SESSION['user_name'] = $uname;
        $_SESSION['level'] ="admin";
 
        header("location:admin/homeadmin.php");
    
    }else if($data['petugas']=="petugas"){
        $_SESSION['user_name'] = $uname;
        $_SESSION['level'] ="petugas"; 
        header("location:petugas/homepetugas.php");
        
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}
?>