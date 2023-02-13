<?php 

$id_kelas= $_GET['id_kelas'];

$database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
$query = $database->query("DELETE FROM kelas where id_kelas = '$id_kelas'");

if($query){
   header("Location:Data_kelas.php");
}