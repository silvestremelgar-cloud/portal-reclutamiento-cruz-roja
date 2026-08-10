const botonTema = document.querySelector("#btn-tema");
botonTema.addEventListener("click", function () {
    document.body.classList.toggle("modo-oscuro");
    if(document.body.classList.contains("modo-oscuro")){
        botonTema.textContent="Modo claro"; }else{
        botonTema.textContent="Modo oscuro";}
});

const formulario = document.querySelector(".contact-form");
const nombre = document.querySelector("#nombre");
const correo = document.querySelector("#correo");
const mensajeFormulario = document.querySelector("#mensaje-formulario");
formulario.addEventListener("submit", function(event) {
    event.preventDefault();
    const nombreValor = nombre.value.trim();
    const correoValor = correo.value.trim();
    mensajeFormulario.classList.remove("error");
    mensajeFormulario.classList.remove("exito");
    if(nombreValor === ""){
        mensajeFormulario.textContent = "Por favor, ingresa tu nombre.";
        mensajeFormulario.classList.add("error");
        return;
    }
    if(!correoValor.includes("@")){
        mensajeFormulario.textContent = "El correo debe contener una arroba (@).";
        mensajeFormulario.classList.add("error");
        return;
    }
    mensajeFormulario.textContent = "¡Mensaje enviado correctamente!";
    mensajeFormulario.classList.add("exito");
});