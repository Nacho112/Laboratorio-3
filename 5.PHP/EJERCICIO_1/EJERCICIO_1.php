<!--Ejercicio	1:	programa	que	muestra	un	mensaje
    – Objetivo:	Ilustra	cómo	incrustar	código	PHP	en	un	documento	HTML	y	cómo	
    imprimir	desde	PHP

    – Tarea:	Crear	un	archivo	PHP	que	contenga	etiquetas	HTML	e	imprima	“Este	
    es	el	título	de	la	página”	con	PHP
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
        
        <?php
        
            echo "<h1>Este es el titulo de la pagina</h1>";
        
        ?>  

    </body>

</html>