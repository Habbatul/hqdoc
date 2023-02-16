<?php
include "conn.php";
$random_alpha = md5(rand());
$judul_captcha = "tulis captcha dibawah tanpa spasi";
$captcha_code = substr($random_alpha, 0, 2);
$captcha_code1 = substr($random_alpha, 0, 3);
$captcha_code2 = substr($random_alpha, 0, 2);
$_SESSION["captcha_code"] = $captcha_code.$captcha_code1.$captcha_code2;
$target_layer = imagecreatetruecolor(250,80);
$captcha_background = imagecolorallocate($target_layer, 0, 0, 0);
imagefill($target_layer,0,0,$captcha_background);

$captcha_text_color = imagecolorallocate($target_layer, 255, 255, 255);

//generate warna captcha random 1
$random_warna1 = random_int(200, 255);
$random_warna1_2 = random_int(0, 255);
$random_warna1_3 = random_int(0, 255);
$captcha_text_color1 = imagecolorallocate($target_layer, $random_warna1, $random_warna1_2, $random_warna1_3);

//generate warna captcha random 2
$random_warna2 = random_int(200, 255);
$random_warna2_2 = random_int(0, 255);
$random_warna2_3 = random_int(0, 255);
$captcha_text_color2 = imagecolorallocate($target_layer, $random_warna2, $random_warna2_2, $random_warna2_3);

//generate warna captcha random 3
$random_warna3 = random_int(200, 255);
$random_warna3_2 = random_int(0, 255);
$random_warna3_3 = random_int(0, 255);
$captcha_text_color3 = imagecolorallocate($target_layer, $random_warna3, $random_warna3_2, $random_warna3_3);


//generate tinggin captcha random
$random_tinggi1 = random_int(25, 40);
$random_tinggi2 = random_int(25, 40);
$random_tinggi3 = random_int(25, 40);
//judul
imagestring($target_layer, 3, 6, 7, $judul_captcha, $captcha_text_color);

imagestring($target_layer, 10, 80, $random_tinggi1, $captcha_code, $captcha_text_color1);
imagestring($target_layer, 10, 110, $random_tinggi2, $captcha_code1, $captcha_text_color2);
imagestring($target_layer, 10, 150, $random_tinggi3, $captcha_code2, $captcha_text_color3);

//made by 240
imagestring($target_layer, 2, 45, 60, "Captcha created by @hq.han", $captcha_text_color);
imagerotate($target_layer, 10, 0);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>