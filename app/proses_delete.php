<?php
include '../db_conection.php';

$id = $_GET['id'];

$sql = "DELETE FROM tb_barang031 WHERE id='$id' ";

$query = $db->query($sql);
//echo "<script>alert('Input Data Berhasil!'); window.location = 'read_data.php'</script>";

if ($query) {
	echo "<script>alert('Hapus Data Berhasil!'); window.location = 'read_data.php'</script>";
} else {
	echo "<script>alert('Hapus Data Gagal!');window.history.back()</script>";
}
?>
