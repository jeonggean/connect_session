<?php

include "koneksi.php";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek apakah username sudah ada
    $cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username'");
    
    if(mysqli_num_rows($cek) > 0){
        echo "Username sudah digunakan!";
    }else{
        mysqli_query($koneksi,"INSERT INTO user(username,password) 
        VALUES('$username','$password')");

        echo "Registrasi berhasil! <br>";
        echo "<a href='index.php'>Login sekarang</a>";
    }

}

?>