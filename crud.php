<?php
// Memanggil file koneksi.php
require "conn.php";
require "delete.php";
require 'ceklog.php';

if($_SESSION['tipe'] == "user"){}
    else{
        header('location:crudAdmin.php');
    } 

?>
<html>
<link rel="stylesheet" href="crud/crud.css">
<style type="text/css">
    ::placeholder {
            text-align: center; 
    }
input {
        text-align: center;
           font-weight: bold;
            font-size: 17px;
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

<center>
    <form action="" method="GET" style="margin-top: 1em">
        <input style="padding:0.3em 2em; width:30%;" type="text" name="cari_nama" align="center" placeholder="Cari Data Berdasarkan Judul">
        <button class="square_btn" style="background-color: lightgray;margin-top: 0;" type="submit"> Cari</button>
    </form><br><br>
</center>  
    <center><a class="square_btn" href="tambah.php">Buat Konsultasi</a><br /><br></center>
 <?php if (isset($_GET['cari_nama'])){ ?>

        <?php
        $cari_nama = $_GET['cari_nama'];
        $result = mysqli_query($conn, "SELECT * FROM keluhan WHERE judul like '%$cari_nama%'");
        ?>

        <?php if ($result->num_rows > 0){
                while ($data = mysqli_fetch_array($result)) {
                       $id = $data['id'];
                       $judul = $data['judul'];
                       $deskripsi = $data['deskripsi'];
                       $nama_pengirim = $data['nama_pengirim'];
                       $id_pengirim = $data['id_pengirim']; 
                       $balasan = $data['balasan'];?>

        <a href="detail.php?id=<?=$id?>" class="crud_satu" style="border-radius: 5px;background-color:#999999;" >
             <table>
                <tr><td colspan="2"><center>
                <h1 style="color: black"><?= $judul; ?></h1></center></td></tr>

           
               <tr>
                   <td class="isi" style="border:3px solid #69676D;border-radius: 10px;background-color: lightgray;"><h2 style="margin-bottom: 0px">Deskripsi</h2>
                    <?=substr($deskripsi, 0, 100)?>......</td>
               
                <td>
                    <?php if($id_pengirim == $_SESSION['id']){ ?>
                <form method="POST">
                       <input type="hidden" name="id" value="<?= $id; ?>">
                       <button style="background-color: lightgray;margin-top: 25%;padding-top: 25%;padding-bottom: 25%"type="submit" onclick="return confirm('Apa anda yakin untuk hapus?');" name="delete">DELETE</button>
                   </form>
               <?php } ?>
                   </td></tr>
                   <tr><td style="padding-top: 20px;" colspan="2"> Status : <?php if(!(empty($balasan))) { ?> <b style="color: red">Sudah dibalas<b> <?php } else { ?> <b>belum dibalas<b> <?php } ?> </td></tr>
            </table>
        </a>

        <?php
            } 
        }else{  ?>
        <a href="detail.php?id=<?=$id?>" class="crud_satu" style="border-radius: 5px;background-color:#999999;" >
                <h1>Keluhan yang anda cari tidak ada</h1>
            </a>
            <?php
        } 

    } else {
           $result = mysqli_query($conn, "select * from keluhan");
           while ($data = mysqli_fetch_array($result)){
               $id = $data['id'];
               $judul = $data['judul'];
               $deskripsi = $data['deskripsi'];
               $nama_pengirim = $data['nama_pengirim'];
               $id_pengirim = $data['id_pengirim'];
               $balasan = $data['balasan'];
          
           ?>

           <a href="detail.php?id=<?=$id?>" class="crud_satu" style="border-radius: 5px;background-color:#999999;" >
             <table>
                <tr><td colspan="2"><center>
                <h1 style="color: black"><?= $judul; ?></h1></center></td></tr>

           
               <tr>
                   <td class="isi" style="border:3px solid #69676D;border-radius: 10px;background-color: lightgray;"><h2 style="margin-bottom: 0px">Deskripsi</h2>
                    <?=substr($deskripsi, 0, 100)?>......</td>
               
                <td>
                    <?php if($id_pengirim == $_SESSION['id']){ ?>
                <form method="POST">
                       <input type="hidden" name="id" value="<?= $id; ?>">
                       <button style="background-color: lightgray;margin-top: 25%;padding-top: 25%;padding-bottom: 25%"type="submit" onclick="return confirm('Apa anda yakin untuk hapus?');" name="delete">DELETE</button>
                   </form>
               <?php } ?>
                   </td></tr>

        <tr><td style="padding-top: 20px;" colspan="2"> Status : <?php if(!(empty($balasan))) { ?> <b style="color: red">Sudah dibalas<b> <?php } else { ?> <b>belum dibalas<b> <?php } ?> </td></tr>

            </table>
        </a>
        <?php
            } 
        } ?>

</body>
</html>
