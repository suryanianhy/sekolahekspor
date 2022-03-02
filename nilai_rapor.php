<?php
    $nilai = 85;
    $hasil = "";

    if($nilai >= 80){
        $hasil = "A";
    }else if($nilai >= 60){
        $hasil = "B";
    }else{
        $hasil = "C";
    }

    $print = $nilai >= 0 && $nilai <= 100 ? "Kamu mendapatkan nilai $hasil" : "Nilai yang dimasukkan salah";
    echo $print;
?>