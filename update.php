<?php
require "conn.php";
require 'ceklog.php';
// Memanggil file koneksi.php
if (isset($_POST['ubah2'])) {
    $id_kost = $_POST['id_kost'];
}
// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['ubah'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($conn,"update keluhan set judul ='$judul', deskripsi='$deskripsi' where id='$id'");
    if ($result) {
        header('location:crud.php');

    } else {
        echo "<script>alert ('data gagal dikirim');window.location.href='crud.php';</script>";
    }
    // Menampilkan pesan jika data berhasil disimpan.
    echo "<script>alert ('berhasil dikirim');window.location.href='crud.php';</script>";
    exit();
}
?>
<html>
<link rel="stylesheet" href="crud/crud.css">
<link rel="stylesheet" href="homepage_style/buttonReg.css">

<style>
    .formReg{
  font-weight: bold;
  text-align: left;
  font-family: sans-serif, bold, Arial, Helvetica;
  font-size: 14px;
  padding-bottom: 12px;

}
</style>
<head>
    <title>Halaman Utama</title>
</head>


<body style="background-image: linear-gradient(to right, #434343 0%, black 100%);">

<div class="navi">
      <a href="index.php" >Home</a>
      <a href="crud.php" style="border-bottom: 4px solid red;">Halaman Keluhan</a>
      <a href="logout.php">logout</a>
</div>


    <div style="background-color:darkgray;width: 50%;margin: auto;margin-top: 80px;">
       <?php
           $result = mysqli_query($conn, "select * from keluhan where id='$id_kost'");
           while ($data = mysqli_fetch_array($result)){
                $id = $data['id'];
               $judul = $data['judul'];
               $deskripsi = $data['deskripsi'];
                
           ?>
            <form name="ubah2" method="post" style="padding-top:30px">
            <center>
                <label>Judul:</label><br>
                <input type="hidden" name="id" value=<?=$id?> >
                <input type="text" id="judul" name="judul" value="<?= $judul ?>"><br><br>
                <label>Keluhan:</label><br>
                  <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" style="font-family: Arial;"><?= $deskripsi ?></textarea>
         
            <br><br>
              <div class="nengah">
                <input type="submit" value="Ubah" name="ubah">
                <input type="reset" value="Reset" name="Reset">
              </div></center>
            </form> <?php } ?>
    </div>



</body>
</html>>