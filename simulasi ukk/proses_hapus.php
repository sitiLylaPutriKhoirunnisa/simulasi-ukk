<?php 

$id_perjalanan = $_GET['id_perjalanan'];

$database = new PDO("mysql:host=localhost;dbname=perjalanan_db",'root','');
$query = $database->query("DELETE FROM perjalanan where id_perjalanan = '$id_perjalanan'");

if($query){
   header("Location:catatan_perjalanan.php");
}