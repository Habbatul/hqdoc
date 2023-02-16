<?php
require "conn.php";
require 'ceklog.php';
// Memanggil file koneksi.php
$id=$_GET['id'];


if (isset($_POST['ubah1'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $balasan = $_POST['balasan'];
    $nama_pembalas = $_SESSION['nama'];

    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($conn, "update keluhan set nama_pembalas ='$nama_pembalas', balasan='$balasan' where id='$id'");
    if ($result) {
        header('location:detail.php?id='.$id);

    } else {
        echo "<script>alert ('data gagal diubah');window.location.href='crud.php';</script>";
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

<?php  
    $result = mysqli_query($conn, "select id_pengirim from keluhan where id='$id'");
    while ($data = mysqli_fetch_array($result)){
           $id_form= $data['id_pengirim'];
    }

    if($_SESSION['id']==$id_form && $_SESSION['tipe']=="user"){ ?>
       <br><br>  
    <center><a class="square_btn" href="cetak_keluhan.php?id=<?=$id?>">Cetak post ini</a><br /><br></center>
<?php  } ?>



    <div style="background-color:darkgray;width: 50%;margin: auto;margin-top: 40px;margin-bottom: 50px;">
        <?php
           $result = mysqli_query($conn, "select * from keluhan where id='$id'");
           while ($data = mysqli_fetch_array($result)){
                $id_form= $data['id_pengirim'];
               $judul = $data['judul'];
               $deskripsi = $data['deskripsi'];
               $nama_pengirim = $data['nama_pengirim'];
               $nama_pembalas= $data['nama_pembalas'];
               $balasan= $data['balasan'];
               $id_post = $data['id'];
           } 

     if($_SESSION['id']==$id_form && $_SESSION['tipe']=="user"){ ?>
        <form name="update" action="update.php" method="post" style="position: absolute;height: auto; float:right;">
            <div class="nengah">
                <input type="hidden" name="id_kost" value="<?= $id; ?>">
                    <input type="submit" value="ubah" name="ubah2">
                  </div>
        </form> 
    <?php } ?>

        <center><h3 style="padding-top:20px;margin-left: 100px;margin-right:100px;">Nama Pengirim : <?=$nama_pengirim ?></h3></center>
        <center><h1 style="margin-left: 100px;margin-right:100px;"><?=$judul?></h1></center>
        
        <p align="justify" style="padding : 30px;padding-top: 10px;"><?=$deskripsi?></p>
    </div>


<?php if(empty($nama_pembalas) && $_SESSION['tipe']=="admin"){ ?>
    <form name="update" method="post" style="padding-top:30px">
            <center>
                <label style="color:white">Masukkan solusi Kesehatan:</label><br>
                  <textarea id="balasan" name="balasan" rows="4" cols="50"></textarea>
            <br><br>
              <div class="nengah">
                <input type="submit" value="kirim" name="ubah1">
              </div></center>
            </form> 
<?php } ?>

<?php if(!(empty($nama_pembalas))){ ?>
    <div style="background-color:white;width: 50%;margin: auto;margin-top: 80px;">
        <center ><h3 style="padding-top:20px;">Dibalas oleh : Dr. <?=$nama_pembalas ?></h3></center>
        <p align="justify" style="padding : 50px;white-space:pre-wrap;"><?=$balasan?></p>
        <?php if($_SESSION['tipe']=="admin"){ ?>
                <form name="update" action="deletepost.php" method="post" style="position: absolute;height: auto; float:right;">
                    <div class="nengah">
                        <input type="hidden" name="id_post" value="<?= $id_post; ?>">
                            <input type="submit" value="hapus" name="hapus2">
                          </div>
                </form> 
                    <?php } ?>
    </div>
<?php } ?>

</body>
</html>