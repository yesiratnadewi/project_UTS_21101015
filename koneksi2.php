<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASSCODE","");
    define("DBNAME","rental_mobil");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASSCODE, DBNAME, DBPORT) or die("Koneksi ke DBMS MySQL GAGAL<br>");