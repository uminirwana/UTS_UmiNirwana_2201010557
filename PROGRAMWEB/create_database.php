<?php
include("konfigurasi.php");

$s_db = "CREATE DATABASE ".DBNAME;
echo "SQL: ".$s_db."<br>";

//koneksi ke DBMS MySQL

$cnn = mysqli_connect(DBHOST, DBUSER, DBPASS);
    if ($cnn){
             echo "koneksi ke DBMS MySQL sukses<br>";
    $hasil = mysqli_query($cnn, $s_db);
        if($hasil){
             echo "membuat database ".DBNAME."SUKSES<br>";
        }else{
             echo "membuat database ".DBNAME." GAGAL<br>";
        }
    }else{
        echo "koneksi ke DBMS MySQL GAGAL<br>";
    
    }