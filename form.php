<?php
print "<center>Form Masukan Data</center><br>";
print "<form action='masukdata.php' method='post'>";
print "<table align='center'>";
print "<tr><td>NIK<td>:<td><input type='text' name='nik'>";
print "<tr><td>Nama<td>:<td><input type='text' name='nama'>";
print "<tr><td>Alamat<td>:<td><input type='text' name='alam'>";
print "<tr><td>Phone<td>:<td><input type='text' name='phon'>";
print "<tr><td>Tanggal Masuk<td>:<td><input type='text' name='tgl'>";
print "<tr><td>Bagian<td>:<td><input type='text' name='bagi'>";
print "<tr><td>Jabatan<td>:<td><input type='text' name='jaba'>";
print "<tr><td>Keterangan<td>:<td><input type='text' name='kete'>";
print "<tr align='center'><td colspan='3'><input type='submit' value='Masukkan Data'>";
print "</table>";
print "</form>";
?>