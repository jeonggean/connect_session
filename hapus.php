<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query($konek,"DELETE FROM tamu WHERE no_tamu='$id'");

header("location:tampil_tamu.php");

?>