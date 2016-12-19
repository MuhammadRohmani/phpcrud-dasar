<?php
include_once("konek_db.php");
$nik = $_GET['nik'];
$sql="delete from karyawan where NIK='$nik'";
$qry=mysql_db_query("karyawan",$sql,$connect);
print "<br>Data sudah berhasil di hapus <br>";
print "<a href='tampildata.php'>lihat data</a>";
?>