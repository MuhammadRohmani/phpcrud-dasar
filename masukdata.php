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

$sql="insert into karyawan (NIK, Nama, Alamat, Phone, Tglmasuk, Bagian,
			Jabatan, Keterangan) values ('$nik','$nama','$alam','$phon','$tgl','$bagi','$jaba','$kete')";
$qry=mysql_db_query("karyawan",$sql,$connect);

if ($qry) {
	 print "<br>Data telah masuk <br>";
	 print "<a href='form.php'>masukkan data lagi</a><br>";
	 print "<a href='tampildata.php'>tampilkan data</a>";
}
else {
	 print "Data tidak masuk"; 
}
?>