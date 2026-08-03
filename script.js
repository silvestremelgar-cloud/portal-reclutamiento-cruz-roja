const botonTema = document.querySelector("#btn-tema");
botonTema.addEventListener("click", function () {
    document.body.classList.toggle("modo-oscuro");
    if(document.body.classList.contains("modo-oscuro")){
        botonTema.textContent="Modo claro"; }else{
        botonTema.textContent="Modo oscuro";}
});