<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($konek,"SELECT * FROM tamu WHERE no_tamu='$id'");
$data = mysqli_fetch_array($query);

?>

<h2>Edit Data</h2>

<form method="POST" action="update.php">

<input type="hidden" name="id" value="<?php echo $data['no_tamu']; ?>">

Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br><br>

Email <br>
<input type="text" name="email" value="<?php echo $data['email']; ?>"><br><br>

Pesan <br>
<textarea name="pesan"><?php echo $data['pesan']; ?></textarea><br><br>

<input type="submit" value="Update">

</form>