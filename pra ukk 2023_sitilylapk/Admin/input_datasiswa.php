<?php


 $nisn = $_POST['nisn'];
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $id_kelas = $_POST['id_kelas'];
 $password = md5($_POST['password']);
 $alamat = $_POST['alamat'];
 $no_telp = $_POST['no_telp'];
 $id_spp =$_POST['id_spp'];


    $database = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp",'root','');
    $query = $database->query("insert into siswa values('$nisn','$nis','$nama','$id_kelas','$password','$alamat','$no_telp','$id_spp')");


 if($query){
    header("Location:Data_siswa.php");
 }