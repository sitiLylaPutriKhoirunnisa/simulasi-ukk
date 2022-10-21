<?php

$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$id_perjalan = $_POST['id_perjalanan'];

$database = new PDO('mysql:host=localhost;dbname=perjalanan_db','root','');

$query = $database->query("UPDATE `perjalanan` SET `lokasi`='$lokasi',`suhu`='$suhu' WHERE `id_perjalanan`='$id_perjalan'");

header('location:catatan_perjalanan.php');