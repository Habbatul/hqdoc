<?php 
//mengecek apakah session login ada atau tidak
if(isset($_SESSION['loglog'])){

}else{
    header('location:home.php');
}
?>