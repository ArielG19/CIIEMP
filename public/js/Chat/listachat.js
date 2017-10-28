$(document).ready(function(){
        listarConversacion();
    });
    var listarConversacion = function(){
    $.ajax({
        type:'get',
        url:'/listar-coversacion/'+ id,
        success:function(data){
            $('#chats').empty().html(data);
        }
    });
}