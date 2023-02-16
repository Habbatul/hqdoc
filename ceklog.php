<?php 
//mengecek apakahhhh session login ada atau tidakf
if(isset($_SESSION['loglog'])){

}else{
    header('location:home.php');
}
?>