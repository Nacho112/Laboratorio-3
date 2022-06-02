let title = document.createElement("h1");
title.innerText = "Reporte de gastos familiares";

let mayorGasto = ["", 0];
let menorGasto = [datosIntegrantes[0].nombre, datosIntegrantes[0].gastos];
let gastoTotal = 0;

for (let i = 0; i < datosIntegrantes.length; i++) {

    if(datosIntegrantes[i].gastos > mayorGasto[1]) {
        mayorGasto[1] = datosIntegrantes[i].gastos;
        mayorGasto[0] = datosIntegrantes[i].nombre;
    }

    if(datosIntegrantes[i].gastos < menorGasto[1]) {
        menorGasto[1] = datosIntegrantes[i].gastos;
        menorGasto[0] = datosIntegrantes[i].nombre;
    }

    gastoTotal += datosIntegrantes[i].gastos;
}

let masGastos = document.createElement("li");
masGastos.innerText = "El que más gastó fue " + mayorGasto[0] + " que gastó " + mayorGasto[1] + "$";
masGastos.title     = "El que más gastó fue " + mayorGasto[0] + " que gastó " + mayorGasto[1] + "$";

let menosGastos       = document.createElement("li");
menosGastos.innerText = "El que menos gastó fue " + menorGasto[0] + " que gastó " + menorGasto[1] + "$";
menosGastos.title     = "El que menos gastó fue " + menorGasto[0] + " que gastó " + menorGasto[1] + "$";

let totalDeFamilia       = document.createElement("li");
totalDeFamilia.innerText = "El gasto total fue de " + gastoTotal + "$";
totalDeFamilia.title     = document.createElement("li").innerText = "El gasto total fue de " + gastoTotal + "$";

let promedio       = document.createElement("li");
promedio.innerText = "El gasto promedio fue de " + gastoTotal / datosIntegrantes.length + "$";
promedio.title     = "El gasto promedio fue de " + gastoTotal / datosIntegrantes.length + "$";

const body = document.getElementById("body");
body.appendChild(title);

let lista = document.createElement("ul");

body.appendChild(lista);
lista.appendChild(masGastos);
lista.appendChild(menosGastos);
lista.appendChild(totalDeFamilia);
lista.appendChild(promedio);

let boton = document.createElement("button");
boton.innerText = "¿Nos pasamos del presupuesto?";

body.appendChild(boton);

boton.onclick = function () {
    if (gastoTotal > 1200) {
      alert("¡Nos pasamos del presupuesto!")
    } else {
      alert("Estamos dentro del presupuesto")
    }
};

let botonTemaOscuro = document.createElement("button");
botonTemaOscuro.innerText = "Activar tema oscuro";
body.appendChild(botonTemaOscuro)

botonTemaOscuro.onclick = function() {
    const body = document.getElementById("body");
    body.style.backgroundColor("black");
    body.style.color("white");
}