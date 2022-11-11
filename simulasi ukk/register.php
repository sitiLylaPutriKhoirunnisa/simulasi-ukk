<?php
    // session_start();
    // if(isset($_SESSION['username'])){
    //     header("location:register.php");
    // }

    $koneksi = new PDO("mysql:host=localhost;dbname=perjalanan_db","root","");

    $query = $koneksi->query("select * from login");

    if(isset($_GET['search'])){
        $search = $_GET['search'];
        $query = $koneksi->query("select * from login where username LIKE '%$search%'");
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
</head>
<body>
    <div class="container">
    <span class="logo">
            <img src="img/logo2.jpg" width="100" height="100" alt="logo">
        </span>
        <h2>PEDULI DIRI</h2>
        <a href="Home.php">Home</a>|
    <a href="catatan_perjalanan.php">Catatan Perjalanan</a>|
    <a href="form_catatan_perjalanan.php">Isi Data</a>|
    <a href="register.php">Data Pengguna</a>
    <table class="table table-striped table-bordered mt-5"><br/>
    <form>
    <input type="text" name="search">
            <button type="submit">Cari</button>
    </form>
        
        <tr>
            <td>id login</td>
            <td>username</td>
            <td>password</td>
            <td>foto</td>
        </tr>
        <?php
        while ($data = $query->fetch()){?>
        <tr>
            <td><?php echo $data["id_login"] ?></td>
            <td><?php echo $data["username"] ?></td>
            <td><?php echo $data["password"] ?></td>
            
        </tr>

        <?php } ?>
    </table>

    </div>
</body>
</html>