<?php
include '../db_conection.php';

$id = $_POST['id'];
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
date_default_timezone_set('asia/jakarta');
$tgl_masukbarang = date('Y-m-d h:i:s');
$supplier_barang = $_POST['supplier_barang'];
$stok_barang = $_POST['stok_barang'];
$kondisi_barang = $_POST['kondisi_barang'];
$status_barang = $_POST['status_barang'];

$sql = "UPDATE tb_barang031
SET 
kd_barang='$kd_barang',
nama_barang='$nama_barang',
tgl_masukbarang='$tgl_masukbarang',
supplier_barang='$supplier_barang',
stok_barang='$stok_barang',
kondisi_barang='$kondisi_barang',
status_barang='$status_barang'
WHERE id='$id' ";

$query = $db->query($sql);
//echo "<script>alert('Input Data Berhasil!'); window.location = 'read_data.php'</script>";

if ($query) {
	echo "<script>alert('Perubahan Data Berhasil!'); window.location = 'read_data.php'</script>";
} else {
	echo "<script>alert('Perubahan Data Gagal!');window.history.back()</script>";
}
?>
