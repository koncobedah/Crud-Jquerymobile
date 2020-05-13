<?php
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
    <h1>Menu Create Data</h1>
  </div>
  <!-- Konten digunakan untuk mnampilkan program utama-->
  <div data-role="content" >
    <h3 align="center">Testing Create Data </h3>
   <form action="proses_simpan.php" data-ajax="false" method="POST" enctype="multipart/form-data" onSubmit="startUpload();" >
      <Label for=""><b>Kode Barang </b></label>
      <input name="kd_barang" type="text" required="required">
      <Label for=""><b>Nama Barang </b></label>
      <input name="nama_barang" type="text" required="required">
      <Label for=""><b>Supplier Barang </b></label>
      <input name="supplier_barang" type="text" required="required">
      <Label for=""><b>Stok Barang </b></label>
      <input name="stok_barang" type="number" required="required">
      
      <label for=""><b>Kondisi Barang</b></label>
      <div data-role="fieldcontain">
        <select name="kondisi_barang" data-theme="a" id="kondisi_barang">
          <option value="Bagus">Bagus</option>
          <option value="Rusak">Rusak</option>
          <option value="Kadaluarsa">Kadaluarsa</option>
        </select>
      </div>

      <label for=""><b>Status Barang</b></label>
      <div data-role="fieldcontain">
        <select name="status_barang" data-theme="a" id="status_barang">
          <option value="Ada">Ada</option>
          <option value="Habis Stok">Habis Stok</option>
        </select>
      </div>

      <fieldset class="ui-grid-a">
      <div class="ui-block-a">
        <input type="submit" value="Simpan" data-icon="arrow-r" data-theme="a">
      </div>
      <div class="ui-block-b">
        <input type="reset" value="Batal" data-icon="delete" data-theme="a">
      </div>
      </fieldset>

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
