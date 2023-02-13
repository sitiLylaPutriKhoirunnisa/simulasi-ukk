<?php 

$nis= $_GET['nis'];

$database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
$query = $database->query("DELETE FROM siswa where nis = 'nis'");

if($query){
   header("Location:Data_siswa.php");
}