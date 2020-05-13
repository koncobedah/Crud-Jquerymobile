<!DOCTYPE html>
<html>
<head>
  <title>App Crud</title>
<meta name=viewport content="user-scalable=no,width=device-width" />
<link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<div data-role="page" >
  <div data-role="header" data-theme="b">
    <h1>Menu CRUD Data Mahasiswa</h1>
  </div>
  <div data-role="content" >
    <h3 align="center">CRUD + MySQL</h3>
    <ul data-role="listview" data-inset="true">
      <!-- Sesuaikan Struktur Menu dan tambahkan menu untuk mengakses data diri anda-->
      <li><a href="#">Tentang Aplikasi</a></li>
      <li><a href="app/create_data.php">Create Data</a></li>
      <li><a href="app/read_data.php">Read Data</a></li>
    </ul>
  </div>
  <div data-role="footer" data-theme="b" data-position="fixed">
    <h1>Latihan CRUD</h1>
  </div>
</div>
</body>
</html>
