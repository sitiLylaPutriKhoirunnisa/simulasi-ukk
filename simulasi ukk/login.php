<?php
 session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];


$koneksi = new PDO('mysql:host=localhost;dbname=perjalanan_db','root','');
$query = $koneksi->query("select * from login where username='$username' AND password='$password'");


if($query->rowCount() > 0){
   
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    header("location:index.php");
 
}else
{
    header("location:formlogin.php");
}