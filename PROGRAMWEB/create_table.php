<?php
include("konfigurasi.php");
$s_db = "CREATE TABLE perkuliahan(
    nim varchar (12)PRIMARY KEY,
    kd_matkul varchar(50),
    nip varchar(50),
    nilai varchar (100)

);";
echo "SQL: ".$s_db."<br>";

//koneksi ke DBMS MySQL

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT);
if ($cnn){
    echo "koneksi ke DBMS MySQL sukses <br>";
    $hsl = mysqli_query($cnn, $s_db);
    if($hsl){
        echo "membuat tabel perkuliahan sukses <br>";
    }else{
        echo "membuat tabel perkuliahan gagal<>br";
    }
        
}else{
        echo "koneksi ke MySQL GAGAL<br>";
           
}
