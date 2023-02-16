<!-- this was made by Habbatul Qolbi H -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="homepage_style/css_slider/slider240.css">
<link rel="stylesheet" href="homepage_style/homepage_style.css">
<link rel="stylesheet" href="homepage_style/homeColor.css">
<link rel="stylesheet" href="homepage_style/formReg.css">
<link rel="stylesheet" href="homepage_style/buttonReg.css">

<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-image: url('gambarPoject/G4river.png');">
<div class="navi">
      <a href="index.php" >Home</a>
      <a href="login.php">Login (Admin)</a>
      <a href="register.php"style="border-bottom: 4px solid red;">Register (Admin)</a>
</div>
<div id="main">
    <div style="background-color:darkgray;">
        <div class="header">
        <div class="HeaderFont"><b>HqDoc</b></div>
          <p>HqDoc memberikan saran kesehatan anda.</p>
        </div><br><br>
            <form class="formReg" name="registrasi" action="fungsiReg.php" onsubmit="return validasiDulz()" method="post">
            <div class="llabel">
                <label>Nama:</label>
                <input type="text" id="nama" name="nama"> <p style="color: red;font-size: 12px;" id="1"></p>
                <label>Email:</label>
                <input type="text" id="email"  name="email"><p style="color: red;font-size: 12px;" id="2"></p>
                <label>Password:</label>
                <input type="Password" id="password"  name="password"><p style="color: red;font-size: 12px;" id="3"></p>
                <label>Ulangi Password:</label>
                <input type="Password" id="repassword" name="repassword"><p style="color: red;font-size: 12px;" id="4"></p>
                <label>No. Telepon: </label>
                <input type="number" id="telepon"  name="telepon"><p style="color: red;font-size: 12px;" id="5"></p>
                <label id="tipe" for="tipe">Tipe:</label>
                  <select  name="tipe" id="tipe">
                    <option value="admin">dokter</option>
                    <option  value="user">User</option>
                  </select><br><br>
                
                  <img style="margin-left: 8px;" height="120" width="" src='captcha.php' />
                 
                <input name='captcha_code' type='text' placeholder="Input Captha diatas.."><br><br>


          </div>
            <input type="checkbox" id="peraturan" name="peraturan" value="peraturan">
             Saya sudah membaca <a style="color:red;"href="">Tanggung Jawab dan Peraturan</a><br>
              <br><br><br>
              <div class="nengah">
                <input type="submit" value="Daftar" name="submit">
                <input type="reset" value="Reset" name="Reset">
              </div>
            </form>
    </div>
</div>

    <script>
        function validasiDulz() {
            //variabel untuk mengecek kondisi form agar tersubmit
            var a,b,c,d,e,f=true;
            //id-Email-Password-ulangi password (bandingkan)-no telepon (harus diawali 62 atau 08)
            //pendefinisan variabel
          let nama = document.forms["registrasi"]["nama"];
          var kesalahan1 =document.getElementById("1");

          let email = document.forms["registrasi"]["email"];
          var kesalahan2 =document.getElementById("2");    

          let password = document.forms["registrasi"]["password"];
          var kesalahan3 =document.getElementById("3");  

          let repassword = document.forms["registrasi"]["repassword"];
          var kesalahan4 =document.getElementById("4"); 

          let telepon = document.forms["registrasi"]["telepon"];
          var kesalahan5 =document.getElementById("5");

          //nama kosong
          if (nama.value == "") {
              kesalahan1.innerHTML="Nama masih kosong";
              nama.focus();
              a=false;
          }
          else{
            kesalahan1.innerHTML="";
          }

          //email kosong
          if (email.value == "") {
            kesalahan2.innerHTML="Email masih kosong";
            email.focus();
            b=false;
          }
          //email tidak memakai @ dan . pada sting email normalnya
          else if ((email.value.indexOf("@",3) < 0)||(email.value.indexOf(".",5) < 0)){
                kesalahan2.innerHTML="Inputan bukan email";
                email.focus();
                c=false;
          }
          else{
              kesalahan2.innerHTML="";
          }


          //password karakter harus 8 atau lebih
          if(password.value.length<6){ 
             kesalahan3.innerHTML="Pasword minimal 6 karakter";
                password.focus();
                d=false;
          }

          else{
              kesalahan3.innerHTML="";
          }
          //bila password tidak match
          if((repassword.value != password.value) || (repassword.value=="")){
            kesalahan4.innerHTML="Pasword tidak sesuai";
                repassword.focus();
                e=false;
          }
          else{
              kesalahan4.innerHTML="";
          }

        //nomor telepon awal haru s62 atau 08

          if(telepon.value.substring(0,1)!="0" && telepon.value.substring(0,2)!="62"){
            kesalahan5.innerHTML="Nomor telepon tidak benar";
                telepon.focus();
                f=false;
          }
          else{
              kesalahan5.innerHTML="";
          }
          if(a==false || b==false ||c==false ||d==false ||e==false||f==false){
            return false;
          }

        }
    </script>


</body>
</html>