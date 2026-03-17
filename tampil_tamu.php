<?php
include "koneksi.php";

$query = mysqli_query($konek,"SELECT * FROM tamu");
?>

<h2>Data Buku Tamu</h2>

<a href="form_tamu.php">Tambah Data</a>

<table border="1">
<tr>
<td>No</td>
<td>Nama</td>
<td>Email</td>
<td>Pesan</td>
</tr>

<?php

while($data=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $data['no_tamu']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['pesan']; ?></td>
</tr>

<?php } ?>

</table>