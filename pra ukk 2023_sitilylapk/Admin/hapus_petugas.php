<?php 

$id_petugas= $_GET['id_petugas'];

$database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
$query = $database->query("DELETE FROM petugas where id_petugas = '$id_petugas'");

if($query){
   header("Location:Data_petugas.php");
}