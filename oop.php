<?php
// Robot ( Warna Kepala, Warna Badan, Warna Kaki, Jumlah Senjata )
// $robot = new Robot("Merah","Biru","Kuning",3);

// $robot->getWarnaBadan(); // Merah, Biru, Kuning, 3

// $robot->changeWarnaBadan("Merah","Hijau","Putih",2);

// $robot->getWarnaBadan(); // Merah, Hijau, Putih, 2

class Robot {
    private $warna_kepala;
    private $warna_badan;
    private $warna_kaki;
    private $jumlah_senjata;
  
    function __construct($warna_kepala, $warna_badan, $warna_kaki, $jumlah_senjata ) {
      $this->warna_kepala = $warna_kepala;
      $this->warna_badan = $warna_badan;
      $this->warna_kaki = $warna_kaki;
      $this->jumlah_senjata = $jumlah_senjata;
    }

    function getWarnaBadan() {
      return "Badan:  $this->warna_kepala <br> Badan: $this->warna_badan <br> Kaki: $this->warna_kaki <br>  Jumlah Senjata: $this->jumlah_senjata ";
    }
    
    function changeWarnaBadan($warna_kepala, $warna_badan, $warna_kaki, $jumlah_senjata ) {
        $this->warna_kepala = $warna_kepala;
        $this->warna_badan = $warna_badan;
        $this->warna_kaki = $warna_kaki;
        $this->jumlah_senjata = $jumlah_senjata;
    }
  }
  
$robot = new Robot("Merah","Biru","Kuning",3);

echo $robot->getWarnaBadan(); // Merah, Biru, Kuning, 3

$robot->changeWarnaBadan("Merah","Hijau","Putih",2);

echo "<br><br>";
echo $robot->getWarnaBadan(); // Merah, Hijau, Putih, 2