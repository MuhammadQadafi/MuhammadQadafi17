<html>
  <head>
    <title>Ini adalah halaman About</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h3>Rental</h3>
    <table>
      <tr>
        <td>Kode mobil</td>
        <td><input type="text" name="kdmobil" /></td>
      </tr>
      <tr>
        <td>Nomor transaksi</td>
        <td><input type="text" name="notransaksi" /></td>
      </tr>
      <tr>
        <td>tanggal transaksi</td>
        <td><input type="date" name="tgltransaksi" /></td>
      </tr>
      <tr>
        <td>Lama pinjam</td>
        <td><input type="text" name="pinjam" id=""></td>
      </tr>
      <tr>
        <td><input type="submit" name="proses" value="SIMPAN"></td>
      </tr>
    </table>
  </body>
</html>
<?php
include "koneksi.php";
if(isset($_POST['proses'])){
  mysqli_query($koneksi,"SELECT * FROM rental SET
  kdmobil = '$_POST[kdmobil]',
  notransaksi = '$_POST[notransaksi]',
  tgltransaksi = '$_POST[tgltransaksi]',
  pinjam = '$_POST[pinjam]'");

  echo"Data Telah Disimpan";
}

?>