<!--Ejercicio	3:	programa	que	muestra	la	fecha	actual

– Objetivo:	Ilustra	cómo	usar	comentarios,	tablas	y	funciones	(propias	y	de	
biblioteca).	También	cómo	usar	el	manual	de	PHP

– Tarea: Realizar	la	tabla	que	se	muestra	a	continuación,	insertando	un	
comentario	PHP	al	lado	de cada	formato de	fecha empleado con	la	
descripción	de	lo	utilizado.

Lunes	06	de	Abril	de	2020
06/04/20
Lun	6 12:02	am
Primer	Semana	del	mes	de	Abril
-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="style.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        
        <?php
        
            date_default_timezone_set("America/Argentina/Mendoza");

            echo"<table>";
            
                echo"<tr>
                
                    <th>form</th>
                    <th>Ejemplo</th>

                </tr>";
                
                echo"<tr>
                
                    <td>" ,date("l dS F Y"), "</td>
                    <td>Lunes	06	de	Abril	de	2020</td>
                
                </tr>";

                echo"<tr>
                
                    <td>" ,date("d/m/y"), "</td>
                    <td>06/04/20</td>
                
                </tr>";

                echo"<tr>
                
                    <td>" ,date("D d h:i a"), "</td>
                    <td>Lun	6 12:02	am</td>
                
                </tr>";

                echo"<tr>
                
                    <td>" ,date("NS")," week of ",date("F"), "</td>
                    <td>Primer	Semana	del	mes	de	Abril</td>
                
                </tr>";

            echo"</table>";
            
        ?>  

    </body>

</html>