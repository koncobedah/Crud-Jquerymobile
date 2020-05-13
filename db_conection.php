<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_barang031';

//$dbcon = mysqli_connect("localhost", "root", "");
//mysqli_select_db($dbcon, "pdam_sopp");

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($db->connect_error) {
	die('Oops!! Terjadi error : ' . $db->connect_error);
}

?>
