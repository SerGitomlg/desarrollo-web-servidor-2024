<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos</title>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors",1);
    ?>
</head>
<body>

/**
* TODOS LOS ARRAYS EN PHP SON ASOCIATIVOS, COMO LOS MAP DE JAVA
*/


    <?php
    echo "<br><br>";
        $numeros = [5,10,9,6,7,4];
        $numeros1 = array(6,10,9,4,3);
        print_r($numeros1);
    echo "<br><br>";

        $animales = ["Perro", "Gato", "Ornitorrinco", "Suricato", "Capibara"];

        $animales1 = [
            "A01" => "Perro",
            "A02" => "Gato",
            "A03" => "Capibara",
        ];
        print_r($animales);
    ?>



    
</body>
</html>