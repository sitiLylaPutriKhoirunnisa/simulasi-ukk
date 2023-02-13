<?php

 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $no_telp = $_POST['no_telp'];



    $database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
    $query = $database->query("UPDATE `siswa` SET `nama`='$nama',`alamat`= '$alamat',`no_telp`='$no_telp'  WHERE `nis`=$nis");


 if($query){
    header("Location:Data_siswa.php");
 }