<?php
session_start();

if($_SESSION['status']!="login"){
header("location:index.php");
}
?>

<h2>Selamat Datang</h2>

<?php echo $_SESSION['username']; ?>

<br><br>

<a href="tampil_tamu.php">Kelola Buku Tamu</a>

<br><br>

<a href="logout.php">Logout</a>