<?php 
//mengecek apakah session login ada atau tidak ya
if(isset($_SESSION['loglog'])){

}else{
    header('location:login.php');
}
?>