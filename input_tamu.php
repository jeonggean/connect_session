<?php

include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = mysqli_query($konek,"INSERT INTO tamu(nama,email,pesan)
VALUES('$nama','$email','$pesan')");

if($query){
    header("location:tampil_tamu.php");
}else{
    echo "Gagal menyimpan data";
}

?>