<?php


 $id_kelas = $six_digit_random_number = random_int(100000, 999999);
 $nama_kelas = $_POST['nama_kelas'];
 $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

 $database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
 $query = $database->query("insert into kelas values('$id_kelas','$nama_kelas','$kompetensi_keahlian')");


 if($query){
    header("Location:Data_kelas.php");
 }

 
