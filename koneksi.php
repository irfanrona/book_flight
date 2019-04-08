<?php
$username="tubes1";
$password="tubes1";
$database="localhost/XE";
$koneksi=oci_connect($username,$password,$database);
if(!$koneksi){
	$err=oci_error();
	echo "Gagal tersambung ke ORACLE";
}
?>