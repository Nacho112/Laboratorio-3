window.onload = function () {

    if (!confirm("¿Quiere iniciar?")) {
        alert("Gracias por haber venido");
        return window.location.href = "https://www.netflix.com/browse";
    }
  
    let isNaN = false;
    let integrantes = 0;
  
    do {
        let ingreso = parseInt(prompt("¿Cuántos integrantes tiene la familia?"));

        if (Number.isNaN(ingreso)) {
            alert("¡Debe ingresar un número!");
            isNaN = false;
        } else if (ingreso < 3) {
            alert("¡Debe ser mayor a 3!");
        } else if (ingreso >= 3) {
            isNaN = true;
            integrantes = ingreso;
        }
    } while (!isNaN)
  
    let datosIntegrantes = [];
  
    for (let i = 0; i < integrantes; i++) {

      let nombre = prompt("Ingrese el nombre del familiar " + (i + 1));

        if (nombre === "") {
            alert("Debe ingresar un nombre");
            i--;
            continue;
        }
  
        let gastos = parseInt(prompt("Ingrese los gastos del familiar " + (i + 1)));

        if (Number.isNaN(gastos)) {
            alert("Debe ingresar un número");
            i--;
            continue;
        }
  
      datosIntegrantes.push({ nombre: nombre, gastos: gastos })
    }
  
    console.log(datosIntegrantes);  
};