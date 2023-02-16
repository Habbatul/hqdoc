<?php
// Memanggil file koneksi.php
require "conn.php";
require "delete.php";
require 'ceklog.php';
// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM project");
?>
<html>
<link rel="stylesheet" href="crud/crud.css">
<head>
    <title>Halaman Utama</title>
</head>


<body style="background-image: linear-gradient(to right, #434343 0%, black 100%);">

<div class="navi">
      <a href="index.php" >Home</a>
      <a href="crud.php" style="border-bottom: 4px solid red;">Halaman Keluhan</a>
      <a href="logout.php">logout</a>
</div>

    <center><a class="square_btn" href="tambah.php">Tambah Data Baru</a><br /></center>


        <?php
           $result = mysqli_query($conn, "select * from project");
           while ($data = mysqli_fetch_array($result)){
               $id = $data['id'];
               $judul = $data['judul'];
               $deskripsi = $data['deskripsi'];
               $nama_pengirim = $data['nama_pengirim'];
          
           ?>
           <a href="asdasdasd" class="crud_satu" style="border-radius: 5px;background-color:#999999;" >
             <table>
                <tr><td colspan="2"><center>
                <h1 style="color: black"><?= $judul; ?></h1></center></td></tr>

           
               <tr>
                   <td class="isi" style="border:3px solid #69676D;border-radius: 10px;background-color: lightgray;"><h2 style="margin-bottom: 5px">Deskripsi</h2><?=$deskripsi?></td>
               

                <td>
                <form method="POST">
                       <input type="hidden" name="id" value="<?= $id; ?>">
                       <button style="background-color: lightgray;"type="submit" onclick="return confirm('Apa anda yakin untuk hapus?');" name="delete">DELETE</button>
                   </form>
                       <form method="POST" action="edit.php">
                       <input type="hidden" name="id" value="<?= $id; ?>">
                       <button style="background-color: lightgray;"type="submit" name="update">UPDATE</button>
                   </form>
                   </td></tr>
                
                   <tr><td >
                    <label>Ulangi Password:</label>
                    <input type="Password" id="repassword" name="repassword"><p style="color: red;font-size: 12px;" id="4">
                       <form method="POST">
                       <input type="hidden" name="id" value="<?= $id; ?>">
                       <button style="background-color: lightgray;"type="submit" onclick="return confirm('Apa anda yakin untuk hapus?');" name="delete">DELETE</button>
                        </form>

                   </td></tr>
            </table>
        </a>

        <?php
            } 
            ?>


</body>
</html>