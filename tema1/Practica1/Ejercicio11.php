<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $array = array();

        $fila = array();
        $columna = array();
        $cont = 0;


        for($i = 0; $i < 7; $i++){

            for($j = 0; $j < 7; $j++){
                if($i == $j){
                    $array[$i][$j] = 1;
                }else{
                    $array[$i][$j] = rand(1,9); 
                }
            }

        }

        for($i = 0; $i < 7; $i++){

            for($j = 0; $j < 7; $j++){
                echo $array[$i][$j] . "   ";
            }

            echo "</br>";

        }

        echo "</br>";

        for($i = 0; $i < 7; $i++){

            for($j = 0; $j < 7; $j++){
                $cont += $array[$i][$j];
            }

            $fila[$i] = $cont;
            echo $fila[$i] . " ";
            $cont = 0;

        }

        echo "</br>";
        echo "</br>";

        for($i = 0; $i < 7; $i++){

            for($j = 0; $j < 7; $j++){
                $cont += $array[$j][$i];
            }

            $columna[$i] = $cont;
            echo $columna[$i] . " ";
            $cont = 0;

        }

    ?>
</body>
</html>