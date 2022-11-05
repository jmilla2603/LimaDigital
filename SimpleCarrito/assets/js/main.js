$(document).ready(function(){

    function cargarCarrito(){
        let contenido=$("#cart_content");

        $.ajax({
            url:'controllers/carritoController.php',
            type:'GET',
            dataType:'JSON',
            beforeSend:function(){
                contenido.waitMe({effect:'facebook',text:'Cargando...'});
            }
        }).done(function(resp){
            contenido.html(resp.data);
            //console.log(resp);
        }).fail(function(jsXHR,textStatus,errorThrown){
            if(jsXHR.status===0){
                msj="No tiene conexion a internet verificar.";
            }else if(jsXHR.status===404){
                msj="Pagina no encontrada [404]";
            }else if(jsXHR.status===500){
                msj="Error externo del servidor";
            }else if(textStatus==='parseerror'){
                msj="Fallos JSON parse.";
            }else if(textStatus==='timeout'){
                msj="Error fuera de tiempo limite";
            }else if(textStatus==='abort'){
                msj="La respuesta fue abortada.";
            }else {
                msj="Error en : " + jsXHR.errorThrown;
            }

            swal('Error',msj,'error');
        }).always(function(){
            setTimeout(function(){
                contenido.waitMe('hide');
            },2500);
            //contenido.waitMe();
        });
    }

    cargarCarrito();
});
