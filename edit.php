<?php
// Memanggil file koneksi.php
require "conn.php";
require "fungsiUpdate.php";
  if (isset($_POST['update'])) {
  $id = $_POST['id'];
    $updet = mysqli_query($conn, "SELECT * FROM project WHERE id='$id'");

      while ($data = mysqli_fetch_array($updet)) {
            $nama = $data['nama'];
            $deskripsi = $data['deskripsi'];
            $harga = $data['harga'];
            $gambar = $data['gambar'];
      }   
    }   
?>
<html>

<head>
    <title>Edit Data Produk</title>
</head>

<body>
    <a href="crud.php">Home</a>
    <br /><br />
    <form name="update_produk" method="post" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <td>Gambar</td>
                <td><Input type="file" name="gambar" value="gambarPoject/<?= $gambar; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $nama; ?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value="<?= $deskripsi; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" value="<?=$harga; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?= $id; ?>"></td>
                <td><input type="submit" name="Updateini" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>*