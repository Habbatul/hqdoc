<?php

require "conn.php";
if (isset($_POST['Updateini'])) {	
			$id = $_POST['id'];
            $deskripsi = $_POST['deskripsi'];
            $harga =$_POST['harga'];
            $gambar = $_POST['gambar'];
            $nama =$_POST['nama'];

 if(empty($_FILES['gambar']['name'])){
 	$updatek = mysqli_query($conn, "update project set nama='$nama', deskripsi='$deskripsi' , harga='$harga' where id='$id' ");}
 else{
 	$gambar = $_FILES['gambar']['name'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "gambarPoject/";
    move_uploaded_file($tmp_file, $path.$gambar);
 	$updatek = mysqli_query($conn,"update project set gambar='$gambar', nama='$nama', deskripsi='$deskripsi' , harga='$harga' where id='$id'");
 }
	if ($updatek) {
		header('Location:crud.php');
	} else {
		echo "<script>alert ('data gagal diupdate');window.location.href='crud.php';</script>";
	}
}
?>