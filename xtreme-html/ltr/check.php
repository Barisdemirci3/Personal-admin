<?php
require_once("function.php");
require_once("connect.php");
$sonuc = [];
if (isset($_POST["array"])) {
  $data = post("array");
  $data = json_decode(stripslashes($data));
  // Kullanıcı ekli mi değil mi kontrol
  $getdata = $db->prepare("SELECT * FROM personeller WHERE personel_nick='$data[2]' OR personel_mail='$data[1]'");
  $getdata->execute();
  if ($getdata->rowCount() > 0) {
  $sonuc["sifremail"] = "Girdiğiniz kullanıcı adı veya mail adresi veritabanında kayıtlı!";
  } else {
    $getdata = null;
    //Eğer kullanıcının nicki veya mail adresi kayıtlı değilse burada kayıt işlemleri yapılacak

    if (strlen($data[3]) < 8) {
    $sonuc["sifresekiz"] = "Şifre 8 karakterden kısa olamaz!";
    } else {
      if(strlen($data[6]) > 10){
      $sonuc["telefon"] = "Telefon numarası 10 karakterden fazl olamaz";
      }
      else{
      $sifre = password_hash($data[3], PASSWORD_BCRYPT);
      $add_data = $db->prepare("INSERT INTO personeller (personel_isim, personel_nick, personel_mail, personel_sifre, personel_evlilik, personel_satis, personel_satis_sayi, personel_dogum_tarihi, personel_tel, personel_ekip, personel_sehir, personel_adres) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $add_data->execute([$data[0], $data[2], $data[1], $sifre, $data[5], 0, 0, $data[4], $data[6], $data[7], $data[8], $data[9]]);
      $sonuc["basarili"] = "Personel başarılı bir şekilde eklendi!";
      
      }
    }
  }
}
echo json_encode($sonuc);
