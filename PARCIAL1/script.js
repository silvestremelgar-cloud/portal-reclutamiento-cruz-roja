function confirmarTurno() {
    const mensaje = document.querySelector("#mensaje");
    mensaje.textContent =
        "Turno recibido - te atiende Silvestre Mauricio Melgar Coimbra";
    mensaje.classList.remove("oculto");
}
const boton = document.querySelector("#btn-confirmar");
boton.addEventListener("click", confirmarTurno);