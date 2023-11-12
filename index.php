<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hola Mundo";
    $nombre="Victor Mercado";
    echo "Bienvenido ".$nombre;
    ?>
    <br>
    <?php
    $num1=10;
    $num2=6;
    $suma=$num1+$num2;
    echo "el resultado de la suma es ".$suma;
    $resta=$num1-$num2;
    echo "<br>  el resultado de la resta es ".$resta;
    $multiplicacion=$num1*$num2;
    echo "<br>  el resultado de la multiplicacion es ".$multiplicacion;
    $division=$num1/$num2;
    echo "<br>  el resultado de la division es ".$division;
    ?>
    <br>
    <?php
    $nota=3.1;
    if ($nota>=3.0){
        echo "Aprobo la materia";
    }
    else{
        echo "No aprobo la materia";
    }

    ?>
</body>
</html>