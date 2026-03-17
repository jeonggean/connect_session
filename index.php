<?php
session_start();
include 'koneksi.php';
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman";
}
    }
?>

<h2>Login</h2>

<form method="POST" action="cek_login.php">

Username <br>
<input type="text" name="username"><br><br>

Password <br>
<input type="password" name="password"><br><br>

<input type="submit" value="LOGIN">

</form>