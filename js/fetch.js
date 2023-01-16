$(document).ready(function () {
    
    let formulario = document.getElementById('form-contact');
    let alerta = document.getElementById('alerta');

    formulario.addEventListener('submit', function (e) { //Addeventlistener obtiene el evento de un elemtno en html
        e.preventDefault();//cancela el envio del formulario

        var datos = new FormData(formulario); // obtiene los datos del formulario en un json

        //console.log(datos.get('nombre'));//con el get obtengo el nombre del dato enviado por fomulario
        fetch('php/fetch.php', {
            method: 'POST',
            body: datos
        })
            .then(res => res.json()) // lo mismo que hacer funcion(response){ response.json()} USAMOS FUNCION DE FLECHA
            .then(data => { 
                console.log(data);
                if (data == 'error') { 
                    alerta.innerHTML=`<div class="alert alert-danger" role="alert" id="alerta-error">
                    Complete los campos
                  </div>`
                    setTimeout(() => {
                        $('#alerta-error').hide();
                    }, 2000);
                }
                if (data == 'mensaje_ok') { 
                    alerta.innerHTML=`<div class="alert alert-success" role="alert" id="alerta-ok">
                    Mensaje Enviado
                  </div>`
                  setTimeout(() => {
                    $('#alerta-ok').hide();
                }, 2000);
                }
            })
 
        
    })
   
});