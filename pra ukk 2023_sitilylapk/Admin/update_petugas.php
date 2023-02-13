<?php

 $id_petugas = $_POST['id_petugas'];
 $username = $_POST['username'];
 $nama_petugas = $_POST['nama_petugas'];
 $level = $_POST['level'];

$database = new PDO('mysql:host=localhost;dbname=apk_pembayaran_spp','root','');

$query = $database->query("UPDATE `petugas` SET `username`='$username',`nama_petugas`= '$nama_petugas',`level`='$level' WHERE `id_petugas`='$id_petugas'");

header('location:Data_petugas.php');