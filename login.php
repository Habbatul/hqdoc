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
      <a href="login.php"style="border-bottom: 4px solid red;">Login (Admin)</a>
      <a href="register.php">Register (Admin)</a>
</div>
<div id="main">
    <div style="background-color:darkgray;">
        <div class="header">
        <div class="HeaderFont"><b>HqDoc</b></div>
          <p>HqDoc memberikan saran kesehatan anda.</p>
        </div><br><br>
            <form class="formReg" name="login" action="fungsilogin.php" onsubmit="return validasiDulz()" method="POST">
            <div class="llabel">
                <label>Email:</label>
                <input type="text" id="email"  name="email"><p style="color: red;font-size: 12px;" id="2"></p>
               <label>Password:</label>
                <input type="Password" id="password"  name="password"><p style="color: red;font-size: 12px;" id="3"></p>
          </div>
              <br><br><br>
              <div class="nengah">
                <input type="submit" value="login" name="login">
                <input type="reset" value="Reset" name="Reset">
              </div>
            </form>
    </div>
</div>

    <script>
        function validasiDulz() {
            //variabel untuk mengecek kondisi form agar tersubmit
            var b,c,d=true;
            //id-Email-Password-ulangi password (bandingkan)-no telepon (harus diawali 62 atau 08)
            //pendefinisan variabel

          let email = document.forms["registrasi"]["email"];
          var kesalahan2 =document.getElementById("2");    

          let password = document.forms["registrasi"]["password"];
          var kesalahan3 =document.getElementById("3");  


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
          if(password.value.length<8){ 
             kesalahan3.innerHTML="Pasword minimal 8 karakter";
                password.focus();
                d=false;
          }

          else{
              kesalahan3.innerHTML="";
          }
          if(b==false ||c==false ||d==false){
            return false;
          }

        }
    </script>


</body>
</html>