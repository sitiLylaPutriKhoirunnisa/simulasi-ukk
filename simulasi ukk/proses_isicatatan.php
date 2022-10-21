<?php

session_start();

 $id_login = $_SESSION['id_login'];
 $tanggal = $_POST['tanggal'];
 $waktu = $_POST['waktu'];
 $lokasi = htmlentities(trim($_POST['lokasi']));
 $suhu = htmlentities(trim($_POST['suhu']));

 $pesan_eror="";
// echo strlen($lokasi);
// echo empty($lokasi);
// die();
 if(empty($lokasi) OR empty($suhu)){
   $pesan_eror="Data tidak boleh kosong";
 }

 if($pesan_eror !==""){
  // echo $pesan_eror;
  // die();
   header("location:form_catatan_perjalanan.php?error=$pesan_eror");
 }
 if($pesan_eror ==""){

 $database = new PDO("mysql:host=localhost;dbname=perjalanan_db",'root','');
 $query = $database->query("insert into perjalanan values('','$id_login','$tanggal','$waktu','$lokasi','$suhu')");


 if($query){
    header("Location:catatan_perjalanan.php");
 }

 

}