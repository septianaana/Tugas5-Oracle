<?php
//membangun koneksi
$username="ana_217";
$password="ana_217";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

if(!$koneksi){
	$err=oci_error();
	echo "gagal tersambung ke ORACLE". $err['text'];
} else {
	echo "koneksi berhasil";
}

?>