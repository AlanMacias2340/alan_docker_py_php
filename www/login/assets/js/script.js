document.getElementById("btn_register").addEventListener("click", register);
document.getElementById("btn_sesion").addEventListener("click", login);
window.addEventListener("resize",anchoPagina);

//DECLARAR VARIABLES
var contenedor_login_register = document.querySelector(".contenedor_login_register");

var formulario_login = document.querySelector(".formulario_login");
var formulario_register = document.querySelector(".formulario_register");

var caja_login = document.querySelector(".caja_login");
var caja_register = document.querySelector(".caja_register");


function anchoPagina(){
    if(window.innerWidth > 850){
        caja_login.style.display = "block";
        caja_register.style.display = "block";
    }else{
        caja_register.style.display = "block";
        caja_register.style.opacity = "1";
        caja_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px" 
    }
}
anchoPagina();

function register() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px"
        formulario_login.style.display = "none";
        caja_register.style.opacity = "0";
        caja_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px"
        formulario_login.style.display = "none";
        caja_register.style.display = "none";
        caja_login.style.display = "block";
        caja_login.style.opacity = "1";
    }

}

function login() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px"
        formulario_login.style.display = "block";
        caja_register.style.opacity = "1";
        caja_login.style.opacity = "0";
    } else {
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px"
        formulario_login.style.display = "block";
        caja_register.style.display = "block";
        caja_login.style.display = "none";
    }

}