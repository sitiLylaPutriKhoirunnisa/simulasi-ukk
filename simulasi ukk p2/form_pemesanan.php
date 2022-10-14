<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 900px;
            border-style: none;
            padding: 20px;
            margin: 30px;
           
        }
        .container{
            border: ridge;
           
        }
        .selamat{
            width: 350px;
            margin: 30px;
            border: ridge;
        }
        .pemesanan {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
        }
        .tombol{
            background: rgb(22,139,130);
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            
            border-radius: 3px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div>
    <h2>HOTEL HEBAT</h2>  


    <div class="container">
      
        <a href="#">Home</a>|
        <a href="#">Kamar</a>|
        <a href="#">Fasilitas</a>

        <div class="selamat">Selamat Datang di Hotel Hebat </div>

        <label>
            Tanggal Cek In :
            <input type="date" name="tanggal cek in" class="home" placeholder="tanggal cek in">
        </label>
        <label>
            Tanggal Cek Out :
            <input type="date" name="tanggal cek out" class="home" placeholder="tanggal cek out">
        </label>
        <label>
            Jumlah Kamar :
            <input type="number" name="jumlah kamar" class="home" placeholder="jumlah kamar">
        </label>
       
        <button type="submit">Pesan</button>

    </div>
    <div class="form">
        <form action="#" method="post">
        <h2>Form Pemesanan</h2>
        <label>
            Nama Pemesan :
            <input type="text" name="nama pemesan" class="pemesanan" placeholder="nama pemesan">
        </label>
        <label>
            email :
            <input type="email" name="email" class="pemesanan" placeholder="email">
        </label>
        <label>
            no handphone :
            <input type="number" name="no handphone" class="pemesanan" placeholder="no handphone">
        </label>
        <label>
            Nama Tamu :
            <input type="text" name="nama tamu" class="pemesanan" placeholder="nama tamu">
        </label>
        <label>
            Tipe Kamar :
        <select>
            <option value="Supperior">Supperior</option>
            <option value="deluxe">Deluxe</option>
            <option value="VVIP">VVIP</option>
        </select>
        </label>

        <button type="submit" class="tombol">Konfirmasi Pesanan</button>
    </form>
    </div>

    </div>
</body>
</html>