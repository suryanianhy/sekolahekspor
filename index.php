<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            echo $a+$b;
        ?>
    </h1>

    <h1>
        Contoh array : <br>
        <?
            $arr = ['One',2,'Tiga'];
            echo $arr[0] . '<br>';
            echo $arr[1] . '<br>';
            echo $arr[2] . '<br>';
        ?>
    </h1>
</body>
</html>