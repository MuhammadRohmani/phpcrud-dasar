<?php
include_once("konek_db.php");
$nik 			= $_POST ['nik'];
$nama 			= $_POST ['nama'] ;
$alam			= $_POST ['alam'];
$phon			= $_POST ['phon'];
$tgl			= $_POST ['tgl'];
$bagi			= $_POST ['bagi'];
$jaba			= $_POST ['jaba'];
$kete			= $_POST ['kete'];
$sql="UPDATE karyawan SET Nama='$nama',
						 							Alamat='$alam',
													Phone='$phon',
													Tglmasuk='$tgl',
													Bagian='$bagi',
													Jabatan='$jaba',
													Keterangan='$kete'
							where NIK='$nik'";
$qry=mysql_db_query("karyawan",$sql,$connect);

if ($qry)
{
 print "<br>Data telah berhasil di update <br>";
 print "<a href='tampildata.php'>lihat data</a>";
}
else
{
 print "Data gagal di update";
}
?>