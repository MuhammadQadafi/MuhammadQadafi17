<html>
 <head><title>Ini adalah file content halaman web</title></head>
 <link rel="stylesheet" href="style.css">
 <body>
    <h3>Tabel MOBIL</h3>
    <table border="1">
       <tr>
          <th>Kode Mobil</th>
          <th>Tipe Mobil</th>
          <th>tarif</th>
       </tr>
       <?php
       include "koneksi.php";
       $no=1;
       $ambildata = mysqli_query($koneksi,"SELECT * FROM tugas");
       while ($tampil = mysqli_fetch_array($ambildata)){
          echo"
          <tr>
          <td>$tampil[kode_mobil]</td>
          <td>$tampil[tipe_mobil]</td>
          <td>$tampil[tarif]</td>
          </tr>";

         $no++;
       }

       ?>





    </table>
 </body>
 </html>