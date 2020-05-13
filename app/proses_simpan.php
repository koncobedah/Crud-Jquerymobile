<?php
include '../db_conection.php';

include '../db_conection.php';
$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
date_default_timezone_set('asia/jakarta');
$tgl_masukbarang = date('Y-m-d h:i:s');
$supplier_barang = $_POST['supplier_barang'];
$stok_barang = $_POST['stok_barang'];
$kondisi_barang = $_POST['kondisi_barang'];
$status_barang = $_POST['status_barang'];

$sql = "INSERT INTO tb_barang031(
kd_barang,
nama_barang,
tgl_masukbarang,
supplier_barang,
stok_barang,
kondisi_barang,
status_barang) values (
'$kd_barang',
'$nama_barang',
'$tgl_masukbarang',
'$supplier_barang',
'$stok_barang',
'$kondisi_barang',
'$status_barang')";
$query = $db->query($sql);
if ($query) {
	echo "<script>alert('Input Data Berhasil!'); window.location = 'read_data.php'</script>";
} else {
	echo "<script>alert('Input Data Gagal!');window.history.back()</script>";
}
?>
