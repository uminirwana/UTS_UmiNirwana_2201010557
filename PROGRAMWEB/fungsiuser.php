<?php
function registeruser($nim, $kd_matkul, $nip, $nilai){
    $psn = "";
    $sql = "INSERT INTO perkuliahan(nim,kd_matkul,nip,nilai) VAlUES('$nim','$kd_matkul','$nip','$nilai');";
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
    if($cnn){
        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
            $psn = "insert data sukses";
        }
    }
    return $psn;

}