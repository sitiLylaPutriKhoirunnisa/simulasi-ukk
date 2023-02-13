<?php




 $tahun = $_POST['tahun'];
 $nominal = $_POST['nominal'];

 $database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
 $query = $database->query("insert into spp values('','$tahun','$nominal')");


 if($query){
    header("Location:Data_spp.php");
 }