//variables para el inicio de sesion
let nombre = document.getElementById('usuario');
let clave = document.getElementById('clave');
let respuesta = document.getElementById('respuesta');
respuesta.style.display = 'none';

//variables para el registro de usuarios
let nombreCompleto = document.getElementById('nombre_completo');
let nombreUsuario = document.getElementById('nombre_usuario');
let password = document.getElementById('password');

//funcion de inicio de sesion
function validacion(){
    let nombre2 = nombre.value;
    let clave2 = clave.value;
    if (nombre2 === "") {
        respuesta.innerHTML = "Favor ingrese el nombre de usuario";
        respuesta.style.display = 'flex';
        nombre.focus();
        return false;
    }else if(clave2 === ""){
        respuesta.innerHTML = "Ingrese su clave";
        respuesta.style.display = 'flex';
        clave.focus();
        return false;
    }else{
        return true;
    }

}

//funcion de registro de usuarios
function validacionRegistro(){
    let nombreCompleto2 = nombreCompleto.value;
    let nombreUsuario2 = nombreUsuario.value;
    let password2 = password.value;
    if(nombreCompleto2 === ""){
        respuesta.innerHTML = "Nombre completo es requerido";
        respuesta.style.display = 'flex'
        nombreCompleto.focus();
        return false;
    }else if(nombreUsuario2 === ""){
        respuesta.innerHTML = "Nombre de usuario es requerido";
        respuesta.style.display = 'flex'
        nombreUsuario.focus();
        return false;
    }else if(password2 === ""){
        respuesta.innerHTML = "Contraseña es requerida";
        respuesta.style.display = 'flex';
        password.focus();
        return false;
    }else{
        return true;
    }
}