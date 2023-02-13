<?php 

$id_spp= $_GET['id_spp'];

$database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
$query = $database->query("DELETE FROM spp where id_spp = '$id_spp'");

if($query){
   header("Location:Data_spp.php");
}