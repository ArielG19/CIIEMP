$(document).ready(function(){
        listarProf();
});

var id = ($('input:hidden[name = id]').val());
//console.log(id);
var listarProf = function(){
    $.ajax({
        type:'get',
        url:'/datos-profesor/'+id,
        success:function(data){
            $('#listar-Prof').empty().html(data);
        }
    });
}

function DatosProfesor(id){
    var route = "/profesor/"+id+"/edit";
        //console.log(route);
        $.get(route, function(data){
        //console.log(data[0].id);
        $("#id").val(data[0].id);
        $("#profesion").val(data[0].profesion);
        

    });
}

$("#editarProfesor").click(function(event){
        var id = $("#id").val();
        var profesion = $("#profesion").val();
        
        console.log(profesion);
                
        var token = $("input[name=_token]").val();
        //la ruta,formulario a actualizar

        var route = "/profesor/"+id+"";
        //console.log(route);
        
        
     $.ajax({
            url:route,
                headers:{'X-CSRF-TOKEN':token},
                type:'PUT',
                dataType:'json',
                data:{profesion:profesion},
                success:function(data){
                        if(data.success=='true'){
                            listarProf();
                            $("#myModalUpdateProf").modal('toggle');
                            //pintamos un mensaje
                            $("#message-update").fadeIn();
                            $("#message-update").show().delay(3000).fadeOut(3);
                            

                            
                        }
                }
     });
});
