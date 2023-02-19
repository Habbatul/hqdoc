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
        element2.innerHTML="Selamat Datang di Website Kami";
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
    element2.innerHTML= "Untuk Apa HqDoc Dibuat?";
    element3.style.borderBottom = "4px solid red";
    pengecualian1.style.border="0px";
    pengecualian2.style.border="0px";
    hitungy++;
    hitungx=0;
    hitungz=0;
    hitung2=true;
    if(hitungy>=2 && hitung2==true){
        element2.innerHTML="Selamat Datang di Website Kami";
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
    element2.innerHTML= "Cara menggunakan HqDoc?";
    element3.style.borderBottom = "4px solid red";
    pengecualian1.style.border="0px";
    pengecualian2.style.border="0px";                    
    hitungz++;
    hitungx=0;
    hitungy=0;
    hitung3=true;
    if(hitungz>=2 && hitung3==true){
        element2.innerHTML="Selamat Datang di Website Kami";
        element.innerHTML = "Silahkan memilih informasi yang anda ingin ketahui dengan cara mengeklik tombol pertanyaan diatas ini.";
        element3.style.borderBottom = "0px";
        hitung3=false;hitungz=0;}  
}