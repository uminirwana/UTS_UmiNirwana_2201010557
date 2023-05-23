<?php
    include("konfigurasi.php");
    include("fungsiuser.php");
    $psn = "";
    if(isset($_POST["tNIM"])){
            $nim = $_POST["tNIM"];
            $kd_matkul = $_POST["tMK"];
            $nip = $_POST["tNIP"];
            $nilai = $_POST["tNIL"];
            $psn = registeruser($nim, $kd_matkul, $nip, $nilai);
            
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    
    <form method="POST" action="registrasi.php">
<?php 
echo "<div>$psn</div>";
?>  
        <div>
            NIM
            <input type="text" name="tNIM">
        </div>

        <div> 
            KODE MATAKULIAH
            <input type="text" name="tMK">
        </div>

        <div>
            NIP
            <input type="text" name="tNIP">
        </div>

        <div>
            NILAI
            <input type="text" name="tNIL">
        </div>

        <div>
            <button type="submit"> Registrasi </button>
        </div>
    </form>

</body>
</html>