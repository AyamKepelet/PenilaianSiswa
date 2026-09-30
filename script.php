<?php 
    $Nama_Siswa = "Akhmad Rafi Haidar rahman";
    $Kelas = "XII RPL 3";
    $Nilai_Tugas = 85;
    $Nilai_UTS = 80;
    $Nilai_UAS = 90;

    $Nilai_Akhir = $Nilai_Tugas * 0.3 + $Nilai_UTS * 0.3 + $Nilai_UAS * 0.4;

    if($Nilai_Akhir >= 75){
        $Status = "LULUS";
    }else{
        $Status = "TIDAK LULUS";
    }

    if($Nilai_Akhir >= 90){
        $predikat = "A";
    }elseif($Nilai_Akhir >= 80){
        $predikat = "B";
    }elseif($Nilai_Akhir >= 75){
        $predikat = "C";
    }elseif($Nilai_Akhir >= 60){
        $predikat = "D";
    }else{
        $predikat = "E";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hasil Penilaian Siswa</h2>
    <section>
        <span>Nama : <?= $Nama_Siswa ?></span>
        <span>Kelas : <?= $Kelas ?></span>
        <hr>
        <span>Nilai Tugas : <?= $Nilai_Tugas ?></span>
        <span>Nilai UTS : <?= $Nilai_UTS ?></span>
        <span>Nilai UAS : <?= $Nilai_UAS ?></span>
        <hr>
        <span>Nilai Akhir : <?= $Nilai_Akhir ?></span>
        <span>Predikat : <?= $predikat ?></span>
        <span>Status : <?= $Status ?></span>
    </section>
</body>
</html>