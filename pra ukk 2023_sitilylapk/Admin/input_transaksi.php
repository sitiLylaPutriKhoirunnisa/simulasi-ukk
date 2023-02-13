<?php

session_start();
// var_dump($_POST);
// die();
 $id_pembayaran =  $six_digit_random_number = random_int(100000, 999999);
 $id_petugas = $_SESSION['id_petugas'];
 $nisn = $_POST['nisn'];
 $tgl_bayar = $_POST['tgl_bayar'];
 $bulan_dibayar = $_POST['bulan_dibayar'];
 $tahun_dibayar = $_POST['tahun_dibayar'];
 $id_spp = $_POST['id_spp'];
 $jumlah_bayar =$_POST['jumlah_bayar'];


    $database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
    $query = $database->query("insert into pembayaran values('','$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar')");

   //  INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES ('12', '2', '234567', '2023-02-14', 'agustus', '2022', '1', '1000');


 if($query){
    header("Location:Data_transaksi.php");
 }