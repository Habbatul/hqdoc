<?php
// mengambil file koneksi.php
include_once("conn.php");

//menghapus keluhan
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$deletePembeli = mysqli_query($conn, "DELETE FROM keluhan WHERE id='$id'");
	if ($deletePembeli) {
		header('location:crud.php');
	} else {
		echo "<script>
		alert ('data gagal dihapus');
		</script>";
		header('location:crud.php');
	}
}
