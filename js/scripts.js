// function menuResponsive() {
           
//             document.getElementById("nav").classList.toggle("responsive");

// }

//JQUERY

$(document).ready(function () {


    //mostrar ocultar boton de menu en responsive
    $(".nav-responsive").click(function (e) { 
        $("#nav").toggleClass("responsive"); 
    });

    //desaparecer menu responsive al seleccionar opcion
    $("#item2").click(function (e) { 
        $("#nav").removeClass("responsive"); 
    });
    $("#item").click(function (e) { 
        $("#nav").removeClass("responsive"); 
    });
    $("#item3").click(function (e) { 
        $("#nav").removeClass("responsive"); 
    });
    $("#item4").click(function (e) { 
        $("#nav").removeClass("responsive"); 
    });

});

//Funcion que aplica las animaciones de las habilidades
function efectoHabilidades(){
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
    if(distancia_skills >= 300){
        let habilidades = document.getElementsByClassName("progreso");
        habilidades[0].classList.add("javascript");
        habilidades[1].classList.add("html");
        habilidades[2].classList.add("css");
        habilidades[3].classList.add("php");
        habilidades[4].classList.add("react");
        habilidades[5].classList.add("sql");
        habilidades[6].classList.add("comunicacion");
        habilidades[7].classList.add("tequipo");
        habilidades[8].classList.add("creatividad");
        habilidades[9].classList.add("dedicacion");
        habilidades[10].classList.add("autodidacta");
        habilidades[11].classList.add("responsabilidad");

    }
}


//detecto el scrolling para aplicar la animacion de la barra de habilidades
window.onscroll = function(){
    efectoHabilidades();
} 

