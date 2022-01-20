let formulario = document.getElementById('formularioContacto');
let nombre = formulario.nombre;
let correo = formulario.email;
let mensaje = formulario.mensaje;
let enviar = formulario.submit;

// Se valida que el campo nombre no este vaicio
const validarNombre = (e) => {
    if(nombre.value == '' || nombre.value == null){
        console.log('cargar nombre');
        nombre.style.border = '3px solid red'
        e.preventDefault();
    } else {
        nombre.style.border = 'none';
    }
}
// Se valida que el campo email no este vaicio
const validarEmail = (e) => {
    if(email.value == '' || email.value == null){
        console.log('cargar email');
        email.style.border = '3px solid red'
        e.preventDefault();
    }else {
        email.style.border = 'none';
    }
}

// Se valida que el campo Mensaje no este vaicio
const validarMensaje = (e) => {
    if(mensaje.value == "" || mensaje.value == null){
        console.log('cargar mensaje');
        mensaje.style.border = '3px solid red'
        e.preventDefault();
    }else {
        mensaje.style.border = 'none';
    }
}

//Funciones
const validarDatos = (e) => {
    validarNombre(e);
    validarEmail(e);
    validarMensaje(e);
}

// Evento
formulario.addEventListener('submit', validarDatos)