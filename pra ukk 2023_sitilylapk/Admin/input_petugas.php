<?php



 $id_petugas = $_POST['id_petugas'];
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $nama_petugas = $_POST['nama_petugas'];
 $level = $_POST['level'];
 


    $database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
    $query = $database->query("insert into petugas values('$id_petugas','$username',' $password ','$nama_petugas','$level')");


 if($query){
    header("Location:Data_petugas.php");
 }