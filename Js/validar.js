function validar(id){
    var elemento = document.getElementById(id);
if (elemento.checkValidity()){
    elemento.style.borderColor="blue";
    }else{
        elemento.style.borderColor="red";
    }
}
function enviarValidar(){
    var codigovalido = document.getElementById('codigo').checkValidity();
    var nombrevalido = document.getElementById('nombre').checkValidity();
    var emailvalido = document.getElementById('correo').checkValidity();
    var direccionvalida = document.getElementById('direccion').checkValidity();
    var tipovalido = document.getElementById('tipo').checkValidity();
    var marcavalido = document.getElementById('marca').checkValidity();

    if(codigovalido && nombrevalido && emailvalido && direccionvalida && tipovalido && marcavalido){
        alert("Formulario procesado exitosamente")
    }else{
        alert("No se ha podido procesar el formulario")
    }
}