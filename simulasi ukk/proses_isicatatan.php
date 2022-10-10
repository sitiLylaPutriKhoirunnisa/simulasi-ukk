<?php

session_start();
$id_login = $_SESSION['id_login'];
 $tanggal = $_POST['tanggal'];
 $waktu = $_POST['waktu'];
 $lokasi = $_POST['lokasi'];
 $suhu = $_POST['suhu'];

 $database = new PDO("mysql:host=localhost;dbname=perjalanan_db",'root','');
 $query = $database->query("insert into perjalanan values('','$id_login','$tanggal','$waktu','$lokasi','$suhu')");



 if($query){
    header("Location:catatan_perjalanan.php");
 }
 

 