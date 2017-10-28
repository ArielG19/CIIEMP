$(document).ready(function(){
        listarDatos();
});

var id = ($('input:hidden[name = id]').val());
//console.log(id);
var listarDatos = function(){
    $.ajax({
        type:'get',
        url:'/listar-datos/'+id,
        success:function(data){
            $('#listar-Est').empty().html(data);
        }
    });
}
function DatosUsuario(id){
    var route = "/mi-perfil/"+id+"/edit";
        $.get(route, function(data){
        //console.log(data);
        $("#id").val(data.id);
        $("#carnet").val(data.carnet);
        $("#name1").val(data.primer_nombre);
        $("#name2").val(data.segundo_nombre);
        $("#apellido1").val(data.primer_apellido);
        $("#apellido2").val(data.segundo_apellido);
        $("#telefono").val(data.telefono);
        $("#carrera").val(data.careers_id);

    });
}

$("#editar").click(function(event){
        var id = $("#id").val();
        var carnet = $("#carnet").val();
        var primer_nombre = $("#name1").val();
        var segundo_nombre = $("#name2").val();
        var primer_apellido = $("#apellido1").val();
        var segundo_apellido = $("#apellido2").val();
        var telefono = $("#telefono").val();
        var careers_id = $("#carrera").val();
        //var texto = $("#carrera option:selected").text();
        //console.log(carnet,name1,name2,apellido1,apellido2,telefono,careers_id);
                
        //var token = $("input[name=_token]").val();
        //la ruta,formulario a actualizar
        var route = "/mi-perfil/"+id+"";

        var token = $("#token").val();
        
     $.ajax({
            url:route,
                headers:{'X-CSRF-TOKEN':token},
                type:'PUT',
                dataType:'json',
                data:{carnet:carnet,primer_nombre:primer_nombre,segundo_nombre:segundo_nombre,primer_apellido:primer_apellido,segundo_apellido:segundo_apellido,telefono:telefono,careers_id:careers_id},
                success:function(data){
                        if(data.success=='true'){
                            listarDatos();
                            $("#myModalUpdateEst").modal('toggle');
                            //pintamos un mensaje
                            $("#message-update").fadeIn();
                            $("#message-update").show().delay(3000).fadeOut(3);
                            

                            
                        }
                }
     });
});
