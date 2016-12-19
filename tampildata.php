<?php
include_once("konek_db.php");
//$connect=mysql_connect("localhost","","") or die ("Koneksi gagal");
$sql="SELECT NIK,Nama,Alamat,Phone,date_format(Tglmasuk,'%d-%m-%Y') as tanggal,Bagian,Jabatan,Keterangan from karyawan";
$qry=mysql_db_query("karyawan",$sql,$connect);

print "<table border='4'";
print "<tr><td>NIK";
print "<td>Nama";
print "<td>Alamat";
print "<td>Phone";
print "<td>Tanggal Masuk";
print "<td>Bagian";
print "<td>Jabatan";
print "<td>Keterangan";
while ($row=mysql_fetch_row($qry))
{
 print "<tr><td>$row[0]";
 print "<td>$row[1]";
 print "<td>$row[2]";
 print "<td>$row[3]";
 print "<td>$row[4]";
 print "<td>$row[5]";
 print "<td>$row[6]";
 print "<td>$row[7]";	
 print "<td><a href='editdata.php?nik=$row[0]'>edit</a>";
 print "<td><a href='hapusdata.php?nik=$row[0]'>hapus</a>";			 
}
print "</table>";
?>