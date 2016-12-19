<?php
include_once("konek_db.php");
$nik = $_GET['nik'];
$sql="select * from karyawan where NIK='$nik'";
$qry=mysql_db_query("karyawan",$sql,$connect);
$row=mysql_fetch_array($qry);

print "<form action='prosesedit.php' method='post'>";
print "<center>Proses Edit Data</center><br>";
print "<table align='center'>";
print "<tr><td>NIK<td>:<td><input type='text' name='nik' value='$row[0]'>";
print "<tr><td>Nama<td>:<td><input type='text' name='nama' value='$row[1]'>";
print "<tr><td>Alamat<td>:<td><input type='text' name='alam' value='$row[2]'>";
print "<tr><td>Phone<td>:<td><input type='text' name='phon' value='$row[3]'>";
print "<tr><td>Tanggal Masuk<td>:<td><input type='text' name='tgl' value='$row[4]'>";
print "<tr><td>Bagian<td>:<td><input type='text' name='bagi' value='$row[5]'>";
print "<tr><td>Jabatan<td>:<td><input type='text' name='jaba' value='$row[6]'>";
print "<tr><td>Keterangan<td>:<td><input type='text' name='kete' value='$row[7]'>";
print "<tr align='center'><td colspan='3'><input type='submit' value='Proses Edit'>";
print "</table>";
print "</form>";
?>