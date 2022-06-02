//Ej-1
const estudiante = {
    nombre: "Ignacio",
    curso: "Segundo Año",
    dni: 43958954,
    email: "ignaciomello20029@gmail.com",
    fromObjectToArray(param) {
        const propiedades = [];
        for (let element in param) {
          propiedades.push(element);
        }
        return propiedades;
    }
}
console.log(estudiante.fromObjectToArray(estudiante));

//Ej-2
function cambiarColorDeFondoDelBody(color) {
    if ((color !== "green") & (color !== "#0f0") & (color !== "#00ff00")) {
      let body = document.getElementById("body");
      body.style.backgroundColor = color;
      return true;
    } else {
      return false;
    }
}
cambiarColorDeFondoDelBody("white");

//Ej-3
const parrafos = document.getElementsByClassName("parrafos");
function cambiarColorParrafos(elementos) {
  let parrafosNoAfectados = 0;
  for (let i = 0; i < elementos.length; i++) {
        if (i % 2 !== 0) {
            elementos[i].style.color = "red";
            elementos[i].style.fontWeight = "bold";
            elementos[i].style.justifyText = "center";
        }
        if (i % 2 === 0) {
            parrafosNoAfectados++;
        }
    }
    console.log("Parrafos no afectados: " + parrafosNoAfectados)
}
cambiarColorParrafos(parrafos)