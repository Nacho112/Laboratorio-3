<!--Ejercicio	5:	programa	que	muestra	los	datos	introducidos	desde	un	formulario

    – Objetivo:	Ilustra	cómo	acceder	a	los	valores	introducidos	desde	todos	los	
    tipos	de	elementos	de	entrada	de	un	formulario,	con	excepción	de	los	tipos	
    BUTTON	y	FILE,	que	se	tratan	en	ejercicios	posteriores

    – Tarea: Crear	un	formulario	de	registración	de	personas,	el	mismo	debe	
    contener: nombre,	apellido,	DNI,	email,	sexo,	dirección	(Calle,	numero,	torre,	
    piso,	departamento,	país,	provincia,	localidad),	edad,	estado	civil,	hijos,	
    hobbies.	Mostrar	todos	los	datos	ingresados	en	la	misma	página.	

    Consideraciones:
        • todos	los	campos	deben	ser	obligatorios	excepto	torre,	piso, departamento	e	hijos
        • sexo	debe ser	seleccionado	de	un	radio
        • estado	civil	debe	ser	un	select
        • los	campos	numéricos	debe	ser	number
        • hobbies	deben	ser	checkbox
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
    
        <h1> <strong>FORMULARIO</strong> </h1>

        <form action="Formulario_5.php" method = "GET">

            
            Datos Personales: <br>

            Nombre:   <input type="text"   placeholder="nombre..."   name="nombre"   size="10" pattern="[a-zA-Z]+" required> 
            Apellido: <input type="text"   placeholder="apellido..." name="apellido" size="10" pattern="[a-zA-Z]+" required> <br>
            DNI:      <input type="number" placeholder="dni..."      name="dni"      size="8"  pattern="[0-9]+"    required> <br> 
            Email:    <input type="email"  placeholder="email..."    name="email"    size="35" pattern="[a-zA-Z]+" required> <br>
            Edad:     <input type="number" placeholder="edad..."     name="edad"     size="1"  pattern="[0-99]+"   required> 

            <br><!--##############################################################################################################################--><br>
            Domicilio: <br>

            Pais:           <input type="text"   placeholder="pais..."        name="pais"         size="15"   pattern="[a-zA-Z]+" required>
            Provincia:      <input type="text"   placeholder="provincia..."   name="provincia"    size="15"   pattern="[a-zA-Z]+" required>
            Localidad:      <input type="text"   placeholder="localidad..."   name="localidad"    size="15"   pattern="[a-zA-Z]+" required> <br>
            Calle:          <input type="text"   placeholder="calle..."       name="calle"        size="15"                       required>
            Numero:         <input type="number" placeholder="numero..."      name="numero"       size="4"    pattern="[0-9999]+" required>
            Torre:          <input type="number" placeholder="torre..."       name="torre"        size="2"    pattern="[1-2]+" >
            Piso:           <input type="number" placeholder="piso..."        name="piso"         size="10"   pattern="[1-10]+">
            Departamento:   <input type="number" placeholder="departamento..."name="departamento" size="10"   pattern="[1-10]+">

            <br><!--##############################################################################################################################--><br>

            Sexo: 

            <input type="radio" name="sexo" value="Hombre">Hombre
            <input type="radio" name="sexo" value="Mujer">Mujer

            <br><!--##############################################################################################################################--><br>

            Estado Civil: <select name="estadoCivil">

                <option value="Soltero"   >Soltero</option>
                <option value="Casado"    >Casado</option>
                <option value="Viudo"     >Viudo</option>
                <option value="Divorciado">Divorciado</option>

            </select>

            <br><!--##############################################################################################################################--><br>

            Hijos:

            <input type="number" name="hijos" size="1">

            <br><!--##############################################################################################################################--><br>

            Hobbies: <br>

            <input type="checkbox" name="hobbies" value="Deportes">Deportes
            <input type="checkbox" name="hobbies" value="Cine"    >Cine
            <input type="checkbox" name="hobbies" value="Libros"  >Libros
            <input type="checkbox" name="hobbies" value="Ciencia" >Ciencia

            <br><!--##############################################################################################################################--><br>

            <input type="submit" value="Enviar">

        </form>

    </body>

</html>