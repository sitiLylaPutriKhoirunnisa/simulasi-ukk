<?php
    include "header.php";

    @session_start();
    include "config.php";
    if($_SESSION['user']) {
        $kode = $_SESSION['user']['id_login'];
    }
        $ambil = $koneksi->query("'select * form login where id_login='$kode'");
        $semua = $amnil->fetch_array();

        if(isset($_POST['simpan'])) {
            $tanggal = $_POST['tanggal'];
            $jam = $_POST['jam'];
            $lokasi = $_POST['lokasi'];
            $suhu = $_POST['suhu'];
            $id_login = $_POST['id_login'];

            $insert = $koneksi->query("insert into perjalanan values('','$id_login','$tanggal','$jam','$lokasi','$suhu')");
        if($insert){
            echo '<script>alert("Catatan Berhasil Disimpan!");</script>';
            header('location:catatan.php');
        }
    }
?>
<style type="text/css">
    input {
        width: 100%;
        padding: 5px 7px;
    }
</style>
<table border="1" align="center" width="52%" style="border-collapse: collapse; min-height:300px;">
    <tr>
        <td>
            <form action="" method="POST">
                <input type="hidden" name="id_login" value="<?php echo $semua['id_login']; ?>">
                <table align="center">
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Jam</td>
                        <td><input type="time" name="jam"></td>
                    </tr>
                    <tr>
                        <td>Lokasi Yang Di Kunjungi</td>
                        <td><input type="text" name="lokasi"></td>
                    </tr>
                    <tr>
                        <td>Suhu</td>
                        <td><input type="text" name="suhu"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right">
                            <input type="submit" name="simpan" value="simpan">
                        </td>
                    </tr>

                </table>
            </form>
        </td>
    </tr>
</table>
<?php include "footer.php"; ?>





