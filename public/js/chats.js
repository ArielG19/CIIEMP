$(document).ready(function(){
        listarChat();
    });
    var listarChat = function(){
    $.ajax({
        type:'get',
        url:'/listar-chat/'+usuario_activo,
        success:function(data){
            $('#mensajes').empty().html(data);
        }
    });
}

var usuario_activo = $('input:hidden[name = usuario]').val();
console.log(usuario_activo);

$("#Enviar").click(function(event){


        var mensaje = $("#mensaje").val();
        var usuario_to = $("#usuario_to").val();
        var id_to = usuario_to[0];
        //console.log(id_to);
        
        var token = $("input[name=_token]").val();
        //la ruta donde se envia la informacion del formulario
        var route = "/chat";
        
            $.ajax({
                url:route,
                headers:{'X-CSRF-TOKEN':token},
                type:'post',
                datatype:'json',
                data:{mensaje:mensaje,id_to:id_to},
                success:function(data){
                        if(data.success=='true'){
                            listarChat();
                        }
                }
            });
});

