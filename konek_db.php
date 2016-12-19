<?php
$connect=mysql_connect("localhost","root","");
if ($connect)
{
print "Koneksi ke server berhasil";
}
else
{
die ("Koneksi ke server gagal");
}
mysql_close();