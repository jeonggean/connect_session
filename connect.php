<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "bukutamu";

$konek = mysqli_connect($hostname,$username,$password,$database);

if(!$konek){
    die("Koneksi gagal : ".mysqli_connect_error());
}

?>