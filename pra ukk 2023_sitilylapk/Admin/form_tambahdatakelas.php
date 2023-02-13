<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>

    </style>
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
                    <li>
                        <a href="Data_spp.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Data SPP</span></a>
                    </li>
                    <li>
                        <a href="Data_kelas.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Data Kelas</span></a>
                    </li>
                    <li>
                        <a href="Data_siswa.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Data Siswa</span></a>
                    </li>
                    <li>
                        <a href="Data_petugas.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Data Petugas</span></a>
                    </li>
                    <li>
                        <a href="Data_transaksi.php" class="nav-link px-0 align-middle">
                        <ion-icon name="document-outline"></ion-icon><span class="ms-1 d-none d-sm-inline">Transaksi Pembayaran</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
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
   
    <form action="input_datakelas.php" method="post">
        <h3>Tambah Data Kelas</h3>
 
   
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
    <input type="text" name="nama_kelas" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kompetensi Keahlian</label>
    <input type="text" name="kompetensi_keahlian" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    
</body>
</html>