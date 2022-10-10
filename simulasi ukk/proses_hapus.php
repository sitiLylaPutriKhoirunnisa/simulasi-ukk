<?php 

$id = $_POST['id'];

$database = new PDO("mysql:host=localhost;dbname=pbo12",'root','');
$query = $database->query("DELETE FROM siswa where id='$id'");

if($query){
   header("Location:Home.php");
}