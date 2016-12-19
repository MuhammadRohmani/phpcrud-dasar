<?php
print "<form action='prosescari.php' method='post'>";
print "Kata yang akan dicari : <br>";
print "<input type='text' name='cari'><br>";
print "Berdasarkan <br>";
print "<input type='radio' name='pilihan' value='NIK'>NIK<br>";
print "<input type='radio' name='pilihan' value='Nama'>Nama<br>";
print "<input type='submit' value='Cari Data'>";
print "</form>";
?>