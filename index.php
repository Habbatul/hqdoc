<!-- this was made by Habbatul Qolbi H -->
<?php
require 'conn.php'; 
 require 'ceklog.php'; 
 ?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="homepage_style/css_slider/slider240.css">
<link rel="stylesheet" href="homepage_style/homepage_style.css">
<link rel="stylesheet" href="homepage_style/homeColor.css">

<head>
<title>Han</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="  height: 100%; background-attachment: fixed;background-size: cover;">
<div class="navi">
      <a href="index.php" style="border-bottom: 4px solid red;">Home</a>
      <a href=<?php if($_SESSION['tipe']=="user"){ ?> "crud.php" <?php }elseif ($_SESSION['tipe']=="admin"){ ?>"crudAdmin.php"<?php } ?>>Halaman Keluhan</a>
      <a href="logout.php">logout</a>
</div>
<div class="header">
<div class="HeaderFont"><b>HqDoc</b></div>
  <p>HqDoc is place to give you advice about your healthy.</p>
</div>


<div class="row">
    <div class="column"style=" width: 50%;">
<!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="gambarPoject/slide1.png" alt="">
        </div>
        <div class="slide">
          <img src="gambarPoject/slide3.png" alt="">
        </div>
        <div class="slide">
          <img src="gambarPoject/scifi1.png" alt="">
        </div>
        <div class="slide">
          <img src="gambarPoject/4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 3){
        counter = 1;
      }
    }, 4000);
    </script>
  </div>
  
<div class="column" style=" width: 50%;">
    <div class="topnav" style="background-color: #555555;padding-left:5px;">
      <a id="pil1" style="cursor: pointer;" onclick="javascript:changeText1();">Apa Itu HqDoc?</a>
      <a id="pil2" style="cursor: pointer;" onclick="javascript:changeText2();">Untuk Apa HqDoc?</a>
      <a id="pil3" style="cursor: pointer;" onclick="javascript:changeText3();">Menggunakan HqDoc?</a>
    </div>

<table>
    <div class="DigviceFont">
        <div style="padding-left: 40px;padding-right: 40px;padding-top: 50px;">
            <h1 id="2">Selamat Datang di Website Kami <?= $_SESSION['nama']; ?></h1>
            <p align="justify" id="1">Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.</p>

                <!--Fitur Front end, underline navigasi dengan JS by Habbatul Qolbi H -->
                <script>
                    var hitungx=0;
                    var hitungy=0;
                    var hitungz=0;
                    var hitung1=false;
                    var hitung2=false;
                    var hitung3=false;
                    function changeText1(){ 
                        var element = document.getElementById("1");
                        var element2 = document.getElementById("2");
                        var element3 = document.getElementById("pil1");
                        var pengecualian1 =document.getElementById("pil2");
                        var pengecualian2 =document.getElementById("pil3");
                        element.innerHTML = "HqDoc adalah website untuk memberikan rekomendasi dan saran mengenai kondisi kesehatan anda. Dengan membuat akun pada hqdoc anda bisa menggunakan fitur yang ada pada website ini.";
                        element2.innerHTML= "Apa Itu HqDoc?";
                        element3.style.borderBottom = "4px solid red";
                        pengecualian1.style.border="0px";
                        pengecualian2.style.border="0px";
                        hitungx++;
                        hitungy=0;
                        hitungz=0;
                        hitung1=true;
                        if(hitungx>=2 && hitung1==true){
                            element2.innerHTML="Selamat Datang di Website Kami <?= $_SESSION['nama']; ?>";
                            element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
                            element3.style.borderBottom = "0px";
                            hitung1=false;hitungx=0;}

                    }

                    function changeText2(){
                        var element = document.getElementById("1");
                        var element2 = document.getElementById("2");
                        var element3 = document.getElementById("pil2");
                        var pengecualian1 =document.getElementById("pil1");
                        var pengecualian2 =document.getElementById("pil3");
                        element.innerHTML = "HqDoc dibuat dalam rangka untuk media perantara antara orang-orang yang kurang memiliki kemampuan finansial untuk mendapatkan rekomendasi mengenai penyakitnya dari dokter, ataupun orang yang tidak memiliki waktu untuk periksa. Namun perlu diketahui untuk pemeriksaan lebih detail anda perlu berkonsultasi langsung dengan dokter secara fisik.";
                        element3.style.borderBottom = "4px solid red";
                        pengecualian1.style.border="0px";
                        pengecualian2.style.border="0px";
                        hitungy++;
                        hitungx=0;
                        hitungz=0;
                        hitung2=true;
                        if(hitungy>=2 && hitung2==true){
                            element2.innerHTML="Selamat Datang di Website Kami <?= $_SESSION['nama']; ?>";
                            element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
                            element3.style.borderBottom = "0px";
                            hitung2=false;hitungy=0;}  
                     
                    }
                    function changeText3(){
                        var element = document.getElementById("1");
                        var element2 = document.getElementById("2");
                        var element3 = document.getElementById("pil3");
                        var pengecualian1 =document.getElementById("pil1");
                        var pengecualian2 =document.getElementById("pil2");
                        element.innerHTML = "Silahkan klik di halaman keluhan anda bisa menuliskan penyakit atau gejala yang anda alami dengan menambahkan keluhan, nantinya anda hanya perlu menunggu sampai post tersebut dibalas oleh dokter.";
                        element3.style.borderBottom = "4px solid red";
                        pengecualian1.style.border="0px";
                        pengecualian2.style.border="0px";                    
                        hitungz++;
                        hitungx=0;
                        hitungy=0;
                        hitung3=true;
                        if(hitungz>=2 && hitung3==true){
                            element2.innerHTML="Selamat Datang di Website Kami <?= $_SESSION['nama']; ?>";
                            element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
                            element3.style.borderBottom = "0px";
                            hitung3=false;hitungz=0;}  
                    }
                </script> <!--Made by hq.han 240 -->
        </div>
    </div>

        <div class="footerImg">

                      <div class="column">
                           <img src="gambarPoject/Alien t shirt.jpg" style="width: 220px;">
                     </div>                   
                      <div class="column" style="position: absolute;margin-left: 220px;">
                            <img src="gambarPoject/pertama.jpg" style=" width: 220px;">
                     </div>
                     <div class="column" style="position: absolute;margin-left: 440px;">
                            <img src="gambarPoject/pamer tengkorak.jpg" style="width: 220px;">
                     </div>
                      <div class="column" style="position: absolute;margin-left: 660px;background-color: gray;width: 300px;height: 275px;background-image:url('gambarPoject/klikk.png');">
                            <center><h1 style="margin-top: 100px;">Click For<br> More!!!</h1></center>
                     </div>

        </div>
 </table>                 
          
</div>

    <div class="footer">
             <h3 style="padding-top:30px;padding-bottom:30.4px;">Halaman ini dibuat oleh <a style="color:white;text-decoration:none;"href="https://www.instagram.com/hq.han/?hl=id">@Hq.han</a></h3>       
    </div>
</body>
</html>