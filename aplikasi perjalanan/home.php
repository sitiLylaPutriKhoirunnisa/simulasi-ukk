<?php
    session_start();
    include "header.php";
?>

<table border="1" width="52%" align="center" style="border-collapse: collapse;">
    <tr style="height:300px; vertical-align:top;">
        <td style="padding: 10px;">Selamat Datang
        <b style="text-transform: uppercase;color: blue">

            <?php
            @session_start();
            include "config.php";
            if($_SESSION['user']) {
                $kode = $_SESSION['user']['id_login'];
            }
                $ambil = $koneksi->query("select * form login where id_login='$kode'");
                $semua = $ambil->fetch_array();
                echo $semua['password'];
                ?>
        </b>di aplikasi peduli diri
        </td>
    </tr>
</table>
<?php include "footer.php"; ?>