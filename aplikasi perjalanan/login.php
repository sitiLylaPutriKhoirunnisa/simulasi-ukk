<?php
    include "config.php";
    session_start();
    if(isset($_POST['daftar'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];

        $insert = $koneksi->query("insert into login values('','$nik','$nama')");
        if($innsert){
            echo'<script>alert("Anda Berhasil Mendaftar!");</script>';
        }
    }else if(isset($_POST['masuk'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        
        $insert = $koneksi->query("select * form login where username='$nik' AND password='$nama'");
        $array = $data->fetch_array();
        $sum = $data->num_rows;
        if($sum > 0) {
            if($array['level'] =="user"){
                $_SESSION['user'] = $array;
                header("location:home.php");
            }
        } else{
            echo'<script>alert("NIK Atau Nama Anda Salah!");</script>';
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Aplikasi Perjalanan Sederhana</title>
    </head>
    <body>
        <form action="" method="POST">
            <table align="center"></table>
            <caption style="text-transform:uppercase;">Pakai database SQL</caption>
            <tr>
                <td>
                    <input type="text" name="nik" class="form-control" placeholder="NIK" required="required">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="required">
                </td>
            </tr>
            <tr>
                <input type="submit" name="daftar" value="Saya Pengguna Baru">
                <input type="submit" name="masuk" value="Masuk">
            </tr>
        </form>
        
    </body>
    </html>