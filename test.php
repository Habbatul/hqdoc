<?php
// Memanggil file koneksi.php
include_once("conn.php");

// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM keluhan ");
?>
<html>

<head>
    <title>Halaman Utama</title>
</head>

<body>
    <a href="index.php">Kembali Ke Menu Utama</a>
    <form action="" method="GET" style="margin-top: 1em">
        <input style="padding:1em 2em; width:80%;" type="text" name="cari_nama" placeholder="Cari Data Berdasarkan Judul">
    </form>

    <?php if (isset($_GET['cari_nama'])) : ?>

        <?php
        $cari_nama = $_GET['cari_nama'];
        $result = mysqli_query($conn, "SELECT * FROM keluhan WHERE judul like '%$cari_nama%'");
        ?>

        <?php if ($result->num_rows > 0){
                while ($user_data = mysqli_fetch_array($result)) {
                  $judul = $user_data['judul'];
                  $deskripsi = $user_data['deskripsi'];
        ?>

//konten yang mau dicari disini


         <?php 
            }
                    }
         else{ ?>
 //konten eror tampilkan sini
        <?php } 
    endif; ?>

</body>

</html>