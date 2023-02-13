<?php

 $tahun = $_POST['tahun'];
 $nominal = $_POST['nominal'];
 $id_spp =$_POST['id_spp'];

$database = new PDO('mysql:host=localhost;dbname=apk_pembayaran_spp','root','');

$query = $database->query("UPDATE `spp` SET `tahun`='$tahun',`nominal`= '$nominal' WHERE `id_spp`='$id_spp'");

header("location:Data_spp.php");