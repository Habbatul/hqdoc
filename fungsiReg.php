<?php     

//dibuild oleh Habbatul Qolbi H Server Validation With PHP
require "conn.php";
//inisialisasi variabel kesalahan
$checked=false;$cekSalah=0;

//lakukan validasi server untuk registrasi
$akun = mysqli_query($conn, "select * from akun");
            //cek validasi telah membaca
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $nama= $_POST['nama'];
                  $email= $_POST['email'];
                  $password= md5($_POST['password']);
                  $telepon= $_POST['telepon'];
                  $tipe = $_POST['tipe'];
                  $captcha_code = $_POST["captcha_code"];

               if(empty($_POST["peraturan"])) {
                  echo "<script>alert('Silahkan baca mengenai Tanggung jawab dan peraturan lalu jangan lupa melakukan checklist pada form register');window.location.href='register.php';</script>";
               }
               elseif ($captcha_code == $_SESSION["captcha_code"]) {
                  //cek validasi terhadap kesamaan email
                  if($checked==false){ 
                     while ($data = mysqli_fetch_array($akun)) {
                        $emailsama= $data['email'];
                        $teleponsama= $data['telepon'];
                        if($email==$emailsama){
                              echo "<script>alert('Email yang anda gunakan sudah pernah dipakai');window.location.href='register.php';</script>";
                              $cekSalah+=1;
                        }
                        //cek validasi telepon sama
                        elseif($telepon==$teleponsama){
                              echo "<script>alert('Nomor telepon yang anda gunakan sudah pernah dipakai');window.location.href='register.php';</script>";
                              $cekSalah+=1;
                        }
                     }
                       if($cekSalah==0)$checked=true;
                  }
                  if($checked==true){
                     $registerAkun=mysqli_query($conn, "insert into akun (nama, email, password, telepon, tipe) VALUES ('$nama', '$email', '$password', '$telepon', '$tipe')");
                     header("location:login.php");
                     //nanti sik diganti kene
                  }
            }else{
               echo "<script>alert('Anda pasti robot!!!');window.location.href='register.php';</script>";

            } 

      } 
?>