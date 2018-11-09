<?php

$koneksi = mysqli_connect("localhost","root","123456","codecademy") ;
if($koneksi)
{
	echo ("koneksi sukses");
}
else
{
	echo "koneksi Gagal)"
}
// $db = mysql_select_db("codecademy"); or die ("Database TIdak Bisa Dibuka");
?>