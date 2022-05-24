<?php

include_once("koneksi2.php");

$sql = "CREATE TABLE pemesanan(
    kode_pemesan varchar(10) PRIMARY KEY, 
    nama varchar(20),
    alamat varchar(30),
    start_sewa date,
    close_sewa date,
    DP varchar(40),
    total_bayar varchar(40),
    pembayaran varchar(50)
);";

$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Tabel pemesanan <strong>BERHASIL</strong> Dibuat<br>";
    }else{
        echo "Tabel pemesanan <strong>GAGAL</strong> Dibuat<br>";
    }

mysqli_close($cnn);