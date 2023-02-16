<?php
// mengambil file koneksi.php
include_once("conn.php");
$value=NULL;

if (isset($_POST['hapus2'])) {
	$id_post = $_POST['id_post'];
	$delete = mysqli_query($conn, "UPDATE keluhan SET nama_pembalas=NULL ,balasan = NULL where id='$id_post'");
	if ($delete) {
		echo "<script>alert('berhasil menghapus balasan');window.location.href='crudAdmin.php';</script>";
	} else {
		echo "<script>
		alert ('data gagal dihapus');
		</script>";
		header('location:crudAdmin.php');
	}
}
