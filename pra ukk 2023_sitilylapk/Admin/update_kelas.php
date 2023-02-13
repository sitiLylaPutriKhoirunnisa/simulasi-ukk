<?php
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

$database = new PDO('mysql:host=localhost;dbname=apk_pembayaran_spp','root','');

$query = $database->query("UPDATE `kelas` SET `nama_kelas`='$nama_kelas',`kompetensi_keahlian`='$kompetensi_keahlian' WHERE `id_kelas`='$id_kelas'");

header('location:Data_kelas.php');