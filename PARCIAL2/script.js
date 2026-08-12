const formulario = document.querySelector("#form-cita");
const aviso = document.querySelector("#aviso-cita");
function validarCita(event) {
    const NOMBRE = document.querySelector("#NOMBRE").value;
    const CORREO = document.querySelector("#CORREO").value;
    const CONSULTA = document.querySelector("#CONSULTA").value;
    if (NOMBRE === "" || CORREO === "") {
        event.preventDefault();
        aviso.textContent = "PON TU NOMBRE COMPLETO Y CORREO PARA CONFIRMAR TU CITA";
        aviso.classList.add("ERROR");
        aviso.classList.remove("EXITO");
    } else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "TU CORREO DEBE TENER UN @gmail.com PARA SER VALIDO";
        aviso.classList.add("ERROR");
        aviso.classList.remove("EXITO");
    } else {
        aviso.textContent = "CITA RESERVADA, TE ATENDERA SILVESTRE M. MELGAR COIMBRA";
        aviso.classList.add("EXITO");
        aviso.classList.remove("ERROR");
    }
}
formulario.addEventListener("submit", validarCita);