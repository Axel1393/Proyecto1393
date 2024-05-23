document.getElementById("btn_registrarse").addEventListener("click", register);
document.getElementById("btn_iniciar-sesion").addEventListener("click", login);
window.addEventListener("resize", anchopagina);

var contenedor_login_register =document.querySelector(".contenedor_login-register")
var formulario_login = document.querySelector(".formulario_login")
var formulario_register = document.querySelector(".formulario_register")
var cajatrasera_login = document.querySelector(".caja_trasera-login")
var cajatrasera_register = document.querySelector(".caja_trasera-register")

function anchopagina(){
    if(window.innerWidth > 850){
        cajatrasera_login.style.display = "block";
        cajatrasera_register.style.display = "block";
    }else{
        cajatrasera_register.style.display = "block";
        cajatrasera_register.style.opacity = "1";
        cajatrasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}
anchopagina();
function register(){
    if(window.innerWidth > 850){
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    cajatrasera_register.style.opacity = "0";
    cajatrasera_login.style.opacity = "1";
}else{
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "0px";
    formulario_login.style.display = "none";
    cajatrasera_register.style.display = "none";
    cajatrasera_login.style.display = "block"; 
    cajatrasera_login.style.opacity = "1";
}
}
function login(){
    if(window.innerWidth > 850){
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display = "block";
    cajatrasera_register.style.opacity = "1";
    cajatrasera_login.style.opacity = "0";
    }else{
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "0px";
    formulario_login.style.display = "block";
    cajatrasera_register.style.display = "block";
    cajatrasera_login.style.display = "none"; 
    }
}
