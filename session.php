<?php
session_start();

if(empty($_SESSION['username'])){
header("location:index.php?pesan=belum_login");
}
?>

<h2>Selamat Datang</h2>

<?php echo $_SESSION['username']; ?>

<br><br>

<a href="tampil_tamu.php">Kelola Buku Tamu</a>

<br><br>

<a href="logout.php">Logout</a>