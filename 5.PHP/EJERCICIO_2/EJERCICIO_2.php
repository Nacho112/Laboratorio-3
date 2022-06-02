<!--Ejercicio	2:	programa	que	calcula	una	tabla	de	multiplicar
    – Objetivo:	Ilustra	cómo	manejar	variables	y	cómo	usar	bucles
    – Tarea:	Dentro	de	un	archivo	PHP	realizar 3	trablas	de	multiplicar	de	cualquier	
    número,	utilizando	un	bucle	for,	while	y	do	while,	mostrarlo	en	una	tabla HTML
-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EJERCICIO_2</title>

        <link rel="stylesheet" type="text/css" href="style.css" title="style" />

    </head>

    <body>
        
       <?php

            $valor = 3;
            $x = "X";

            echo"<table>";

                echo"<tr> <th colspan = 2> <strong>Tabla del 3 (For)</strong> </th> </tr>";

                for ($i = 1; $i <= 3; $i++) { 
                    
                    echo "<tr>

                        <td>", $valor, $x, $i,"</td>
                        <td>",$i * $valor, "</td>

                    </tr>";
                }

                echo "<tr>
                
                    <td> <strong>Multiplicacion</strong> </td>
                    <td> <strong>Resultado</strong> </td>
                
                </tr>";
                
            echo"</table>";

            echo"<br>";
            #----------------------------------------------------------------------------------------
            echo"<br>";

            echo"<table>";

                echo"<tr> <th colspan = 2> <strong>Tabla del 3 (While)</strong> </th> </tr>";

                $a = 1;
                while ($a <= 3) {

                    echo "<tr>
                    
                        <td>", $valor, $x, $a,"</td>
                        <td>", $a * $valor ,"</td>

                    </tr>";

                    $a = $a + 1;
                }

                echo "<tr>
                
                    <td> <strong>Multiplicacion</strong> </td>
                    <td> <strong>Resultado</strong> </td>
                
                </tr>";
                
            echo"</table>";

            echo"<br>";
            #----------------------------------------------------------------------------------------
            echo"<br>";

            echo"<table>";

            echo"<tr> <th colspan = 2> <strong>Tabla del 3 (Do While)</strong> </th> </tr>";

            $b = 1;
            do {
                
                echo "<tr>
                    
                    <td>", $valor, $x, $b,"</td>
                    <td>", $b * $valor ,"</td>

                </tr>";

                $b = $b + 1;

            } while ($b <= 3);

            echo "<tr>
            
                <td> <strong>Multiplicacion</strong> </td>
                <td> <strong>Resultado</strong> </td>
            
            </tr>";
            
        echo"</table>";
       ?>

    </body>

</html>