<?php
    include "header.php";
    session_start();
    @session_start();
    include "config.php";

    if($_SESSION['user']) {
        $kode = $_SESSION['user']['id_login'];
    }
        $ambil = $koneksi->query("select *form login where id_login='$kode'");
    if($sum > 0) {
    
?>
    <table border="1" align="center" width="52%" style="border-collapse: collapse; ">
    <td>
        <a>Urutkan Berdasarkan</a>
        <select id="urut" onclick="urutkan(this)">
            <option value="0">Tanggal</option>
            <option value="1">Waktu</option>
            <option value="2">Lokasi</option>
            <option value="3">Suhu</option>
        </select>
        <input type="submit" value="urutkan">
    </td>
    </table>
    <br>
    <table border="1" align="center" width="52%" style="border-collapse: collapse; ">
    <tr>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Lokasi Yang Di Kunjungi</th>
        <th>Suhu Tubuh</th>
    </tr>
    <?php
        $ambildata = $koneksi->query("select * form perjalanan where id_login='$kode'");
        while($tampil = $ambildata->fetch_array()){
    ?>
    <tr>
        <td style="text-alignt:center;padding:5px;"><?php echo $tampil['tanggal']; ?></td>
        <td style="text-alignt:center;padding:5px;"><?php echo $tampil['waktu']; ?></td>
        <td style="text-alignt:center;padding:5px;"><?php echo $tampil['lokasi']; ?></td>
        <td style="text-alignt:center;padding:5px;"><?php echo $tampil['suhu']; ?></td>
    </tr>
    <?php } ?>
</table>
<?php
}else {
    echo '<center>Kamu Belum Mempunyai Catatan</center>';
}
?>
<?php include "footer.php"; ?>

   