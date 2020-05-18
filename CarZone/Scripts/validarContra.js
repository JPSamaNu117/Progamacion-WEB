var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var telefono = document.getElementById("telefono");
var correo = document.getElementById("correo");
var contra = document.getElementById("contra");
var nombre = document.getElementById("recontra");

var sentinela = 0;
var mensaje;

function validar(nombre, apellido, telefono, correo, contra, recontra){
    
    if(nombre.nodeValue === null || nombre.nodeValue === ""){
        mensaje += "falta nombre ";    
    }
    if(apellido.nodeValue === null || apellido.nodeValue === ""){
        mensaje += "falta apellido ";    
    }
    if(telefono.nodeValue === null || telefono.nodeValue === ""){
        mensaje += "falta telefono ";    
    }
    if(correo.nodeValue === null || correo.nodeValue === ""){
        mensaje += "falta correo ";    
    }
    if(contra.nodeValue === null || contra.nodeValue === ""){
        mensaje += "falta contraseña ";    
        sentinela += 1;
    }
    if(recontra.nodeValue === null || recontra.nodeValue === ""){
        mensaje += "falta repetir contraseña";    
        sentinela += 1;
    }
    
    if(sentinela === 2){
        if(contra === recontra){
            //contraseñas coinsiden
        }else{
            mensaje += "contraseñas no coinsiden"
        }
    }
    
    if(mensaje === ""){
        alert("Registro completo");
    }else{
        alert(mensaje)
    }
    
}