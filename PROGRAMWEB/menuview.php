<?php 
include "viewkonfigurasi.php";
$liat = mysqli_query($konek, "select * from perkuliahan");

$data = [];

while($r=mysqli_fetch_assoc($liat)){
    $data[]=$r;
}
$perkuliahan=$data 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data mahasiswa</title>
</head>
<body>
<table>
    <tr>
        <th>NO</th>
        <th>nim</th>
        <th>kd_matkul</th>
        <th>nip</th>
        <th>nilai</th>
    </tr>
    <?php $no=1; foreach($perkuliahan as $l):?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $l['nim']?></td>
        <td><?php echo $l['kd_matkul']?></td>
        <td><?php echo $l['nip']?></td>
        <td><?php echo $l['nilai']?></td>
        

    </tr>
        <?php endforeach ?>
    
</body>
</html>