<?<?php
include '../db_conection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>App Crud</title>
<meta name=viewport content="user-scalable=no,width=device-width" />
<link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.5.min.css" />
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.mobile-1.4.5.min.js"></script>
</head>
<!-- Ini adalah inisialisai untuk page -->
<div data-role="page" >
  <!-- Ini adalah inisialisai untuk header bisa di gunakan untuk navigasi-->
  <div data-role="header" data-theme="b">
    <h1>Menu UPDATE Data</h1>
  </div>
  <!-- Konten digunakan untuk mnampilkan program utama-->
  <div data-role="content" >
    <h3 align="center">Testing Update Data</h3>
   <form action="proses_update.php" data-ajax="false" method="POST" enctype="multipart/form-data" onSubmit="startUpload();" >
    <?php
$id = $_GET["id"];
$sql = "SELECT * FROM tb_barang031 where id='$id'";
$query = $db->query($sql);
$row = $query->fetch_assoc()?>
      <Label for="id"><b></b></label>
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <Label for=""><b>Kode Barang</b></label>
      <input name="kd_barang" type="text" value="<?php echo $row['kd_barang']; ?>">

      <Label for=""><b>Nama Barang</b></label>
      <input name="nama_barang" type="text" value="<?php echo $row['nama_barang']; ?>">

      <Label for=""><b>Supplier Barang</b></label>
      <input name="supplier_barang" type="text" value="<?php echo $row['supplier_barang']; ?>">

      <Label for=""><b>Stok Barang</b></label>
      <input name="stok_barang" type="text" value="<?php echo $row['stok_barang']; ?>">

      <label for=""><b>Kondisi Barang</b></label>
      <div data-role="fieldcontain">
        <select name="kondisi_barang" data-theme="a" id="kondisi_barang">
          <option value="<?php echo $row['kondisi_barang']; ?>"><?php echo $row['kondisi_barang']; ?></option>
          <option value="Bagus">Bagus</option>
          <option value="Rusak">Rusak</option>
          <option value="Kadaluarsa">Kadaluarsa</option>
        </select>
      </div>

      <label for=""><b>Status Barang</b></label>
      <div data-role="fieldcontain">
        <select name="status_barang" data-theme="a" id="status_barang">
          <option value="<?php echo $row['status_barang']; ?>"><?php echo $row['status_barang']; ?></option>
          <option value="Ada">Ada</option>
          <option value="Habis Stok">Habis Stok</option>
        </select>
      </div>

      <div class="ui-block-a">
        <input type="submit" value="Update" data-icon="recycle" data-theme="a" data-icon="check" data-ajax="false">
      </div>

   </form>
  </div>
  <!-- Ini adalah inisialisai untuk footer-->
  <div data-role="footer" data-theme="b" data-position="fixed">
  <div data-role="navbar" data-iconpos="bottom">
    <ul>
      <li><a href="../index.php" data-icon="home"></a></li>
      <li><a href="read_data.php" data-icon="eye"></a></li>
    </ul>
  </div>
</div>
</body>
</html>
