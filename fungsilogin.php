<?php
require 'conn.php';

//apakah request method post?
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $cekdata = mysqli_query($conn, "SELECT * FROM akun where email='$email' and password='$password'");
    $hitung = mysqli_num_rows($cekdata);

    while ($data = mysqli_fetch_array($cekdata)){
               $_SESSION['tipe']= $data['tipe'];
               $_SESSION['nama']= $data['nama'];
               $_SESSION['id']= $data['id'];
           }
    

    if ($hitung > 0) {
        $_SESSION['loglog'] = 'True';
        header("location:index.php");
        //header('location:index.php');
    } else {
       echo "<script>alert('Akun anda tidak terdaftar silahkan register');window.location.href='login.php';</script>";
    }
}

?>