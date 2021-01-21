<?php
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['admingiris'])) {
  $kullanici_mail=$_POST['kullanici_mail'];
  $kullanici_password=md5($_POST['kullanici_password']);

  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password");
 $kullanicisor->execute(array(
'mail'=> $kullanici_mail,
'password'=> $kullanici_password,

 ));

  echo $say=$kullanicisor->rowCount();
  if ($say==1) {

    $_SESSION['kullanici_mail']=$kullanici_mail;
    header("Location:..//production/index.php");
          exit;
    
  }else{

          header("Location:..//production/login.php?durum=no");
          exit;
  }
   

}
if (isset($_POST['genelayarkaydet'])) {
  
  $ayarkaydet=$db->prepare("UPDATE ayar SET 
           #tablo güncelleme işlemi kodları
         ayar_title=:ayar_title,
         ayar_description=:ayar_description,
         ayar_keywords=:ayar_keywords,
         ayar_author=:ayar_author
       WHERE ayar_id=0");

          $uptade=$ayarkaydet->execute(array(
              
              'ayar_title' => $_POST['ayar_title'],
              'ayar_description' => $_POST['ayar_description'],
              'ayar_keywords' => $_POST['ayar_keywords'],
              'ayar_author' => $_POST['ayar_author']
              )); 

          if ($update) {
            header("Location:../production/genel-ayar.php?durum=ok");
          }
             else{
              header("Location:../production/genel-ayar.php?durum=no");
             }}


if (isset($_POST['iletisimayarkaydet'])) {
  
  $ayarkaydet=$db->prepare("UPDATE ayar SET 
           #tablo güncelleme işlemi kodları
         ayar_tel=:ayar_tel,
         ayar_gsm=:ayar_gsm,
         ayar_faks=:ayar_faks,
         ayar_mail=:ayar_mail,
         ayar_ilce=:ayar_ilce,
         ayar_il=:ayar_il,
         ayar_adres=:ayar_adres,
         ayar_mesai=:ayar_mesai
       WHERE ayar_id=0");

          $uptade=$ayarkaydet->execute(array(
              
              'ayar_tel' => $_POST['ayar_tel'],
              'ayar_gsm' => $_POST['ayar_gsm'],
              'ayar_faks' => $_POST['ayar_faks'],
              'ayar_mail' => $_POST['ayar_mail'],
              'ayar_ilce' => $_POST['ayar_ilce'],
              'ayar_il' => $_POST['ayar_il'],
              'ayar_adres' => $_POST['ayar_adres'],
              'ayar_mesai' => $_POST['ayar_mesai']
              )); 

          if ($update) {
            header("Location:../production/iletisim-ayarlar.php?durum=ok");
          }
             else{
              header("Location:../production/iletisim-ayarlar.php?durum=no");
             }}

             if (isset($_POST['apiayarkaydet'])) {
  
  $ayarkaydet=$db->prepare("UPDATE ayar SET 
           #tablo güncelleme işlemi kodları
         ayar_analystic=:ayar_analystic,
         ayar_maps=:ayar_maps,
         ayar_zopim=:ayar_zopim
       WHERE ayar_id=0");

          $uptade=$ayarkaydet->execute(array(
              
              'ayar_analystic' => $_POST['ayar_analystic'],
              'ayar_maps' => $_POST['ayar_maps'],
              'ayar_zopim' => $_POST['ayar_zopim']
              
              )); 

          if ($update) {
            header("Location:../production/api-ayarlar.php?durum=ok");
          }
             else{
              header("Location:../production/api-ayarlar.php?durum=no");
             }}

             if (isset($_POST['sosyalayarkaydet'])) {
  
  $ayarkaydet=$db->prepare("UPDATE ayar SET 
           #tablo güncelleme işlemi kodları
         ayar_facebook=:ayar_facebook,
         ayar_twitter=:ayar_twitter,
         ayar_youtube=:ayar_youtube,
         ayar_google=:ayar_google
       WHERE ayar_id=0");

          $uptade=$ayarkaydet->execute(array(
              
              'ayar_facebook' => $_POST['ayar_facebook'],
              'ayar_twitter' => $_POST['ayar_twitter'],
              'ayar_youtube' => $_POST['ayar_youtube'],
              'ayar_google' => $_POST['ayar_google']
              )); 

          if ($update) {
            header("Location:../production/sosyal-ayarlar.php?durum=ok");
          }
             else{
              header("Location:../production/sosyal-ayarlar.php?durum=no");
             }}

             if (isset($_POST['mailayarkaydet'])) {
  
  $ayarkaydet=$db->prepare("UPDATE ayar SET 
           #tablo güncelleme işlemi kodları
         ayar_smtpuser=:ayar_smtpuser,
         ayar_smtphost=:ayar_smtphost,
         ayar_smtppassword=:ayar_smtppassword,
         ayar_smtpport=:ayar_smtpport
       WHERE ayar_id=0");

          $uptade=$ayarkaydet->execute(array(
              
              'ayar_smtpuser' => $_POST['ayar_smtpuser'],
              'ayar_smtphost' => $_POST['ayar_smtphost'],
              'ayar_smtppassword' => $_POST['ayar_smtppassword'],
              'ayar_smtpport' => $_POST['ayar_smtpport']
              )); 

          if ($update) {
            header("Location:../production/mail-ayarlar.php?durum=ok");
          }
             else{
              header("Location:../production/mail-ayarlar.php?durum=no");
             }}

             if (isset($_POST['hakkimizdakaydet'])) {
  
  $ayarkaydet=$db->prepare("UPDATE hakkimizda SET 
           #tablo güncelleme işlemi kodları
         hakkimizda_baslik=:hakkimizda_baslik,
         hakkimizda_icerik=:hakkimizda_icerik,
         hakkimizda_video=:hakkimizda_video,
         hakkimizda_vizyon=:hakkimizda_vizyon,
         hakkimizda_misyon=:hakkimizda_misyon
       WHERE hakkimizda_id=0");

          $uptade=$ayarkaydet->execute(array(
              
              'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
              'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
              'hakkimizda_video' => $_POST['hakkimizda_video'],
              'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
              'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
              )); 

          if ($update) {
            header("Location:../production/hakkimizda.php?durum=ok");
          }
             else{
              header("Location:../production/hakkimizda.php?durum=no");
             }}
 ?>