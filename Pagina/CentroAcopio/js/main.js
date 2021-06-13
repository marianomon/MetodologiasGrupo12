var botonAbrir = document.querySelectorAll("#btn-editar");
var overlay = document.getElementById("overlay");
var popup = document.getElementById("popup");
var botonCerrar = document.getElementById("btn-cerrar-popup");

document.addEventListener("DOMContentLoaded",load);

function load(){
    for (var i = 0; i < botonAbrir.length; i++) {
        botonAbrir[i].addEventListener('click',activarOverlay);
    } 
    botonCerrar.addEventListener('click',function(){
        overlay.classList.remove('active');
        popup.classList.remove('active');
    });
}


function activarOverlay(){  
    overlay.classList.add('active');
    popup.classList.add('active');
    document.querySelector('#idMaterial').value = this.value;
}



