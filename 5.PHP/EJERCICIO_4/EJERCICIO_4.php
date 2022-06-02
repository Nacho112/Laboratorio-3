<!--Ejercicio	4:	formulario	simple

    – Objetivo:	Ilustra	cómo	acceder	a	los	valores	introducidos	desde	un	
    formulario	HTML

    – Tarea: Agregar	un	formulario	HTML	al	ejercicio	de	la	tabla	de	multiplicar,	y	
    que	las	tablas	se	generen	a	partir	de	los	números	enviados.	Deben	existir	3	
    campos	numéricos.
-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    
        <h1>Bienvenido a las Tablas de Multiplicar</h1>

        <br>

        <h5>Ingrese un numero del 1 al 10</h5>
        
        <form action="#" method="post">

           <p> Ingrese primer numero: <input type="text" placeholder="Ingrese numero..." name="numero_1" maxlength="2" pattern="[0-9]+" required> </p> 

           <p> Ingrese segundo numero: <input type="text" placeholder="Ingrese numero..." name="numero_2" maxlength="2" pattern="[0-9]+" required> </p>

           <p> Ingrese tercer numero: <input type="text" placeholder="Ingrese numero..." name="numero_3" maxlength="2" pattern="[0-9]+" required> </p>


           <p> <input type="submit" value="Ver Tabla"> </p>

            <!--------------------------------------------------------------------->

            <?php
            
                $x = $_POST["numero_1"];

                echo"<h5>Tabla de Multiplicar del $x: </h5>";

                if ($x < 1 or $x > 10) {

                    echo"Fuera de Rango <br>";
                    echo"Ingrese un numero entre 1 y 10";

                }else{

                    for ($i=1; $i <= 10; $i++) { 
                        
                        echo"$x X $i = ",$x * $i, "<br>";
                    }
                }

                echo"<br><br>";
                #-------------------------------------------------------------------------------#

                $x = $_POST["numero_2"];

                echo"<h5>Tabla de Multiplicar del $x: </h5>";

                if ($x < 1 or $x > 10) {

                    echo"Fuera de Rango <br>";
                    echo"Ingrese un numero entre 1 y 10";

                }else{

                    for ($i=1; $i <= 10; $i++) { 
                        
                        echo"$x X $i = ",$x * $i, "<br>";
                    }
                }

                echo"<br><br>";
                #-------------------------------------------------------------------------------#

                $x = $_POST["numero_3"];

                echo"<h5>Tabla de Multiplicar del $x: </h5>";

                if ($x < 1 or $x > 10) {

                    echo"Fuera de Rango <br>";
                    echo"Ingrese un numero entre 1 y 10";

                }else{

                    for ($i=1; $i <= 10; $i++) { 
                        
                        echo"$x X $i = ",$x * $i, "<br>";
                    }
                }

            ?>

        </form>

    </body>

</html>