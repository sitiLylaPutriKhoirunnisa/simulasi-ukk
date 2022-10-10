<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:form_register.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      
        
        div{
            width: 300px;
            border: 3px solid black;
            padding: 50px;
            margin: 30px;

           
        }
        .container {
            border: 1px solid black;
            text-align: center;
        }
        .selamat {
            margin: 0 auto;
        }
    </style>
</head>
<body>
   <div class="container ">
    <h2>PEDULI DIRI</h2>
    <a href="Home.php">Home</a>|
    <a href="catatan_perjalanan.php">Catatan Perjalanan</a>|
    <a href="form_catatan_perjalanan.php">Isi Data</a>

    <div class="selamat">Selamat Datang Lyla di Peduli diri</div>
        <b>
        <a href="hapus_login.php" class="btn btn-primary mt-5">Logout</a>
        <a href="form_register.php" class="btn btn-primary mt-5">Daftar</a>

        </b>
    
    </div>
</body>
</html>
