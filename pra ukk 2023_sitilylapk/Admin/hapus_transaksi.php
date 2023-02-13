<?php 

$id_pembayaran= $_GET['id_pembayaran'];

$database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
$query = $database->query("DELETE FROM pembayaran where id_pembayaran = '$id_pembayaran'");

if($query){
   header("Location:Data_transaksi.php");
}