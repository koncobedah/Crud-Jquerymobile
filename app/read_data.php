<?<?php
include "../db_conection.php";
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
    <h1>Menu READ Data</h1>
  </div>
  <!-- Konten digunakan untuk mnampilkan program utama-->
  <div data-role="content" >
    <h3 align="center">Testing Read Data</h3>
    <div class="ui-body ui-body-a ">
    <form>
      <input id="filterTable-input" data-type="search" >
    </form>
    <table data-role="table" align ="center" border= "1" class="ui-responsive"  data-mode="columntoggle" data-filter="true" data-input="#filterTable-input"  data-filter-placeholder="Kode Barang">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Tanggal Masuk Barang</th>
          <th>Supplier Barang</th>
          <th>Stok Barang</th>
          <th>Kondisi Barang</th>
          <th>Status Barang</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
$no = 1;
$sql = "SELECT * FROM tb_barang031 Order by id ASC";
$query = $db->query($sql);
while ($row = $query->fetch_assoc()) {?>

          <tr>
            <td><?php echo $no++; ?></td>
            <td><?=$row['kd_barang'];?></td>
            <td><?=$row['nama_barang'];?></td>
            <td><?=$row['tgl_masukbarang'];?></td>
            <td><?=$row['supplier_barang'];?></td>
            <td><?=$row['stok_barang'];?></td>
            <td><?=$row['kondisi_barang'];?></td>
            <td><?=$row['status_barang'];?></td>
            <td>
              <a href="update_data.php?id=<?php echo $row['id']; ?>" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-icon-edit ui-btn-icon-notext ui-btn-b ui-mini">icon only button</a>
              <a href="proses_delete.php?id=<?php echo $row['id']; ?>" class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-icon-delete ui-btn-icon-notext ui-btn-b ui-mini" data-ajax="false" >icon only button</a>

            </td>
          </tr>
        <?php }?>
      </tbody>

    </table>
  </div>
  </div>
  <!-- Ini adalah inisialisai untuk footer-->
  <div data-role="footer" data-theme="b" data-position="fixed">
  <div data-role="navbar" data-iconpos="bottom">
    <ul>
      <li><a href="../index.php" data-icon="home"></a></li>
      <li><a href="create_data.php" data-icon="plus"></a></li>
    </ul>
  </div>
</div>
</body>
</html>
