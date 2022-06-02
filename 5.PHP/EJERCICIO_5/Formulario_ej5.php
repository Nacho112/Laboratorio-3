<?php

    $nombre         = $_GET["nombre"];
    $apellidos      = $_GET["apellidos"];
    $email           = $_GET["email"];
    $DNI            = $_GET["dni"];
    $edad           = $_GET["edad"];
    $pais           = $_GET["pais"];
    $provincia      = $_GET["provincia"];
    $localidad      = $_GET["localidad"];
    $calle          = $_GET["calle"];
    $numero         = $_GET["numero"];
    $torre          = $_GET["torre"];
    $piso           = $_GET["piso"];
    $departamento   = $_GET["departamento"];
    $sexo           = $_GET["sexo"];
    $estado         = $_GET["estado"];
    $hijos          = $_GET["hijos"];
    $hobbies        = $_GET["hobbies"];

    echo "<strong> Nombre: </strong>" . $nombre;
    echo "</br>";

    echo "<strong> Apellido: </strong>" . $apellidos;
    echo "</br>";

    echo "<strong> E-mail: </strong>" . $email;
    echo "</br>";

    echo "<strong> DNI: </strong>" . $DNI;
    echo "</br>";

    echo "<strong> Edad: </strong>" . $edad;
    echo "</br>";

    echo "<strong> Pais: </strong>" . $pais;
    echo "</br>";

    echo "<strong> Provincia: </strong>" . $provincia;
    echo "</br>";

    echo "<strong> Localidad: </strong>" . $localidad;
    echo "</br>";

    echo "<strong> Calle: </strong>" . $calle;
    echo "</br>";

    echo "<strong> Numero: </strong>" . $numero;
    echo "</br>";

    echo "<strong> Torre: </strong>" . $torre;
    echo "</br>";

    echo "<strong> Piso: </strong>" . $piso;
    echo "</br>";

    echo "<strong> Departamento: </strong>" . $departamento;
    echo "</br>";

    echo "<strong> Sexo: </strong>" . $sexo;
    echo "</br>";

    echo "<strong> Estado Civil: </strong>" . $estado;
    echo "</br>";

    echo "<strong> Hijos: </strong>" . $hijos;
    echo "</br>";

    echo "<strong> Hobbie: </strong>" . $hobbies;
?>