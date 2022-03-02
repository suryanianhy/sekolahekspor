<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>
        Halo, nama saya 
        <? $nama ="Suca";
            echo $nama;
        ?>
    </h1>

    <h1>
        <?
            $a = 26;
            $b = 7;
            echo $a + $b;
        ?>
    </h1>

    <h1>
        Contoh array : <br>
        <?
            $arr = ['One', 2, 'Tiga'];

            echo $arr[0] . '<br>';
            echo $arr[1] . '<br>';
            echo $arr[2] . '<br>';
        ?>
    </h1>


    <h1>
        Kalimat dari Array, Integer dan String: <br>
        <?
            $arr = ['Suca', 28, 'Jakarta'];

            // pakai petik satu dan operator titik
            echo 'Nama saya ' . $arr[0] . ', umur '. $arr[1] . ' tahun. Saya tinggal di ' . $arr[2] . '<br>';


            // pakai petik dua
            echo "Nama saya $arr[0], umur $arr[1] tahun. Saya tinggal di $arr[2]";
        ?>
    </h1>

    <h1>
        Contoh Penggunaan Operator <br>
        <?
            $a = 10;
            $b = 2;
            $tambah         = $a + $b; 
            $kurang         = $a - $b; 
            $kali           = $a * $b; 
            $bagi           = $a / $b; 
            $mod            = $a % $b; 
            $pow            = $a ** $b; 
            $equal          = $a == $b ? 'True' : 'False'; 
            $identical      = $a === $b ? 'True' : 'False'; 
            $not_eq         = $a != $b ? 'True' : 'False'; 
            $not_identical  = $a !== $b ? 'True' : 'False'; 
            $increment_a    = $a++; 
            $decrement_a    = $a--; 

            echo "a = $a                        <br>";
            echo "b = $b                        <br>";
            echo "a + b = $tambah               <br>";
            echo "a - b = $kurang               <br>";
            echo "a x b = $kali                 <br>";
            echo "a % b = $mod                  <br>";
            echo "a ** b = $pow                 <br>";
            echo "a == b = $equal               <br>";
            echo "a === b = $identical          <br>";
            echo "a != b = $not_eq              <br>";
            echo "a !== b = $not_identical      <br>";
            echo "a++ = $increment_a            <br>";
            echo "a-- = $increment_a            <br>";


        ?>
    </h1>




    
</body>
</html>