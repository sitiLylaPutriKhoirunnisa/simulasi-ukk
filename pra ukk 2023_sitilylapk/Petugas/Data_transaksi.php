<?php

    $koneksi = new PDO("mysql:host=localhost;dbname=apk_pembayaran_spp","root","");
    $query = $koneksi->query("select * from pembayaran");

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Data SPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu Admin</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <ion-icon name="speedometer-outline"></ion-icon> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                       
                    </li>
                    
                        <a href="Data_transaksi.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Transaksi Pembayaran</span></a>
                    </li>
                    <li>
                        <a href="history.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">History Pembayaran</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <ion-icon name="layers-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Laporan</span></a>
                    </li>
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                  
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3 bg-light">
        <div class="container">
        <h3>Data Transaksi</h3>

        <a href="form_transaksi.php" class="btn btn-warning">Tambah Data</a>

        <table class="table table-striped table-bordered mt-5">
    <tr >
        <td>id Pembayaran</td>
        <td>id petugas</td>
        <td>nisn</td>
        <td>tgl bayar</td>
        <td>bulan dibayar</td>
        <td>tahun dibayar</td>
        <td>id spp</td>
        <td>jumlah bayar</td>
        <td>opsi</td>
        
    </tr>
    <?php
     while ($data = $query->fetch()){ ?>
        <tr >
            <td><?php echo $data["id_pembayaran"] ?></td>
            <td><?php echo $data["id_petugas"] ?></td>
            <td><?php echo $data["nisn"]?></td>
            <td><?php echo $data["tgl_bayar"]?></td>
            <td><?php echo $data["bulan_dibayar"]?></td>
            <td><?php echo $data["tahun_dibayar"]?></td>
            <td><?php echo $data["id_spp"]?></td>
            <td><?php echo $data["jumlah_bayar"]?></td>
            <td><a href="" class="btn btn-primary btn-sm"><ion-icon name="brush"></ion-icon>Edit</a>
                <a href= "Admin/hapus_transaksi.php?id_pembayaran=<?= $data['id_pembayaran'] ?>"class="btn btn-danger btn-sm"><ion-icon name="trash-outline"></ion-icon>Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    </div>
    
        </div>
    </div>
</div>
   

    
</body>
</html>