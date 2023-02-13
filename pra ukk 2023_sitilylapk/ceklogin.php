<?php
session_start();

//menghubungkan dengan koneksi
include 'database.php';

$db = new database();

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);


// echo $db->cek_login($username,$password);
// die();
if($db->cek_login($username,$password)== "petugas"){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    //   var_dump($db->cek_level($username,$password));
    //   die();
        // $_SESSION ['id_petugas'] = $x['id_petugas'];  

    echo "ini halaman petugas";
    // die();
    // foreach($db->cek_level($username,$password) as $x ){
    
       $x = $db->cek_level($username,$password);
        $_SESSION ['level'] = $x['level'];
        $_SESSION ['id_petugas'] = $x['id_petugas'];   
        echo "ini";
        // die();
        header("location:home_petugas.php");
    // }

}
else if($db->cek_login($username,$password)=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

  $x = $db->cek_level($username,$password);
        $_SESSION ['level'] = $x['level'];
        $_SESSION ['id_petugas'] = $x['id_petugas'];   
        echo $_SESSION['id_petugas'];
        echo $x['nama_petugas']; 
        header("location:home_admin.php");
      
      
   
}else if($db->cek_login($username,$password)=="siswa"){
   
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    // echo "ini halaman siswa";
    // die();
    header("location:home_siswa.php");
}else{
    // echo "ini halaman gagall";
    // die();
    header("location:form_login.php?pesan=gagal");
}