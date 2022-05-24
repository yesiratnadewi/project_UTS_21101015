<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO pemesanan (kode_pemesan, nama, alamat, start_sewa, close_sewa, DP, total_bayar, pembayaran) 
    VALUES('".$pdata["KODE"]."', '".$pdata["NAMA"]."', '".$pdata["ALAMAT"]."', '".$pdata["START"]."', '".$pdata["CLOSE"]."', '".$pdata["DP"]."', '".$pdata["TOTAL"]."', '".$pdata["PEMBAYARAN"]."');";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE pemesanan SET
        kode_pemesan = '".$pdata["KODE2"]."',
        nama = '".$pdata["NAMA"]."',
        alamat = '".$pdata["ALAMAT"]."',
        start_sewa = '".$pdata["START"]."',
        close_sewa = '".$pdata["CLOSE"]."',
        DP = '".$pdata["DP"]."',
        total_bayar = '".$pdata["TOTAL"]."',
        pembayaran = '".$pdata["PEMBAYARAN"]."'
        WHERE kode_pemesan = '".$pdata["KODE1"]."';";

    include_once("koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}

function tampildata(){
    include_once("koneksi2.php");
    $sql = "SELECT * FROM pemesanan;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $i = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$i.'</td>
        <td class="text-center">'.$h["kode_pemesan"].'</td>
        <td class="text-center">'.$h["nama"].'</td>
        <td class="text-center">'.$h["alamat"].'</td>
        <td class="text-center">'.$h["start_sewa"].'</td>
        <td class="text-center">'.$h["close_sewa"].'</td>
        <td class="text-center">'.$h["DP"].'</td>
        <td class="text-center">'.$h["total_bayar"].'</td>
        <td class="text-center">'.$h["pembayaran"].'</td>
        <td class = "text-center">
            <a class="btn btn-primary px-3 fw-bold" href="edit.php?kode='.$h["kode_pemesan"].'">Edit</a>
        </td>
        <td class = "text-center">
            <a class="btn btn-danger px-3 fw-bold" href="delete.php?kode='.$h["kode_pemesan"].'" onClick=\'return confirm("Hapus Data?");\'>Delete</a>
        </td>
    </tr>';
    $i++;
    }
    return $hsl1;
}