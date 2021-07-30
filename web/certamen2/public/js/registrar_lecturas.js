const cargarMediciones = async ()=>{
    let resultado = await axios.get("api/mediciones/get");
    let mediciones = resultado.data;
    let medicionesSelect = document.querySelector("#medidor-select");
    mediciones.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medicionesSelect.appendChild(option);
    });
};
const cargarTipos = async ()=>{
    let resultado = await axios.get("api/tipos/get");
    let tipos = resultado.data;
    let tiposSelect = document.querySelector("#tipo-select");
    tipos.forEach(t=>{
        let option = document.createElement("option");
        option.innerText = t;
        tiposSelect.appendChild(option);
    });
};

cargarMediciones();
cargarTipos();

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-date").value;
    let hora = document.querySelector("#hora-txt").value;
    let medidor = document.querySelector("#medidor-select").value;
    let direccion = document.querySelector("#direccion-txt").value;
    let valor = document.querySelector("#valor-txt").value;
    let tipo = document.querySelector("#tipo-select").value;
    let lectura = {};
    lectura.fecha = fecha;
    lectura.hora = hora;
    lectura.medidor = medidor;
    lectura.direccion = direccion;
    lectura.valor = valor;
    lectura.tipo = tipo;

    let res = await crearLectura(lectura);

    window.location.href = "mediciones";
});