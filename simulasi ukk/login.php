<?php
    session_start();
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
    
$koneksi = new PDO('mysql:host=localhost;dbname=perjalanan_db','root','');
$query = $koneksi->query("select * from login where username='$username'");


$data = $query->fetch();
// var_dump($data['password']);
// die();
if($query->rowCount() > 0){
    // if( password_verify($password, $data['password']) ) {
    //     echo "sss";
    $_SESSION['id_login'] = $data['id_login'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header("location:Home.php");
    // }
}else
{
    header("location:formlogin.php");
}