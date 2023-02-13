<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "apk_pembayaran_spp";
    var $koneksi ="";

    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    if (mysqli_connect_error()){
        echo "koneksi database gagal : " . mysqli_connect_error();
    }
    }

    function cek_login($username,$password){
      echo $password;
        $data = mysqli_query($this->koneksi, "select * from siswa where nis='$username' and password='$password'");
        $cek = mysqli_num_rows($data);
      
        if($cek>0){
            $jenis= "siswa";
            return $jenis;
        }else{
            
            $data2 =mysqli_query($this->koneksi, "select * from petugas where username='$username' and  password='$password'");
            $cek2 = mysqli_num_rows($data2);
           
            if($cek2>0){
                $data = mysqli_fetch_array($data2);
                if($data['level'] == 'admin'){
                    $jenis = 'admin';
                }else{
                    $jenis = 'petugas';
                }
                return $jenis;
            }
        }
        
        
    }

    function cek_level($username,$password){
        $data = mysqli_query($this->koneksi,"select * from petugas where username='$username' and password='$password'");
        $d = mysqli_fetch_assoc($data);
        // var_dump($d);
        foreach($d as $key => $value){
            // echo "key : " . $data ." value :". $value ."<br />";

            $hasil[$key] = $value;
        }
        // var_dump($d);
        // die();
        // while($d = mysqli_fetch_array($data)){ 
        //     $hasil[] =$d;
        // }

        // var_dump($hasil);
        // die();
        return $hasil;
    }

    function status($x){
        switch ($x) {
            case "0":
                echo'<button type="button" class="btn btn-block btn-danger btn-sm">Baru</button>';
            break;
            case "proses";
        }
    }
}

