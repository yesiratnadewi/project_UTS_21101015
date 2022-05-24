<?php
    include_once("koneksi2.php");
    
    if(isset($_GET["kode"])){
        $sql = "DELETE FROM pemesanan WHERE kode_pemesan = '".$_GET["kode"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: tampildata.php");