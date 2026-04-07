<?php

include "koneksi.php";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek apakah username sudah ada
    $cek = mysqli_query($konek,"SELECT * FROM admin WHERE username ='$username'");
    
    if(mysqli_num_rows($cek) > 0){
        echo "Username sudah digunakan!";
    }else{
        mysqli_query($konek,"INSERT INTO admin (username,password) 
        VALUES('$username','$password')");
        header("location:login.php");
    }

}

?>