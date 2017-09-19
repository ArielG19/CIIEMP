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
        $("#namep1").val(data[0].primer_nombre);
        $("#namep2").val(data[0].segundo_nombre);
        $("#apellidop1").val(data[0].primer_apellido);
        $("#apellidop2").val(data[0].segundo_apellido);
        $("#telefonop").val(data[0].telefono);
        $("#descripcionp").val(data[0].descripcion);
        //$("#carrera").val(data.careers_id);

    });
}

$("#editarProfesor").click(function(event){
        var id = $("#id").val();
        var primer_nombre = $("#namep1").val();
        var segundo_nombre = $("#namep2").val();
        var primer_apellido = $("#apellidop1").val();
        var segundo_apellido = $("#apellidop2").val();
        var telefono = $("#telefonop").val();
        var descripcion = $("#descripcionp").val();
        //var careers_id = $("#carrera").val();
        //var texto = $("#carrera option:selected").text();
        console.log(primer_nombre);
                
        var token = $("input[name=_token]").val();
        //la ruta,formulario a actualizar

        //var id = ($('input:hidden[name = id]').val());
        var route = "/profesor/"+id+"";
        console.log(route);
        
        
     $.ajax({
            url:route,
                headers:{'X-CSRF-TOKEN':token},
                type:'PUT',
                dataType:'json',
                data:{primer_nombre:primer_nombre,segundo_nombre:segundo_nombre,primer_apellido:primer_apellido,segundo_apellido:segundo_apellido,telefono:telefono,descripcion:descripcion},
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
