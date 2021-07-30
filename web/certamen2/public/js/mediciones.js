const cargarTabla = (lecturas)=>{
    let tbody = document.querySelector("#tbody-lectura");
    for(let i=0; i < lecturas.length; ++i){
        let tr = document.createElement("tr");
        let tdFecha = document.createElement("td");
        tdFecha.innerText = lecturas[i].fecha;
        let tdHora = document.createElement("td");
        tdHora.innerText = lecturas[i].hora;
        let tdMedidor = document.createElement("td");
        tdMedidor.innerText = lecturas[i].medidor;
        let tdValor = document.createElement("td");
        tdValor.innerText = lecturas[i].valor;
        let tdAcciones = document.createElement("td");
        let botonDescartar = document.createElement("button");
        botonDescartar.innerText = "Descartar";
        botonDescartar.classList.add("btn", "btn-danger");
        tdAcciones.appendChild(botonDescartar);
        tr.appendChild(tdFecha);
        tr.appendChild(tdHora);
        tr.appendChild(tdMedidor);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let lecturas = await getLecturas();
    cargarTabla(lecturas);
});