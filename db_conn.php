<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "perpus_uniga";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}