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

function MostrarDatosProf(id){
	var route = "profesor/"+id+"/edit";
	$.get(route, function(data){
		//console.log(data[0].id);
		$("#id").val(data[0].id);
		$("#name1").val(data[0].primer_nombre);
		$("#name2").val(data[0].segundo_nombre);
		$("#apellido1").val(data[0].primer_apellido);
		$("#apellido2").val(data[0].segundo_apellido);
		$("#telefono").val(data[0].telefono);
		$("#profesion1").val(data[0].profesion1);
		$("#profesion2").val(data[0].profesion2);
		$("#profesion3").val(data[0].profesion3);
		$("#profesion4").val(data[0].profesion4);
	
	});
}

$("#editarProfesor").click(function(event){
        var id = $("#id").val();
        var primer_nombre = $("#name1").val();
        var segundo_nombre = $("#name2").val();
        var primer_apellido = $("#apellido1").val();
        var segundo_apellido = $("#apellido2").val();
        var telefono = $("#telefono").val();
        var profesion1 = $("#profesion1").val();
        var profesion2 = $("#profesion2").val();
        var profesion3 = $("#profesion3").val();
        var profesion4 = $("#profesion4").val();

        //console.log(telefono);
                
        var token = $("input[name=_token]").val();
        //la ruta,formulario a actualizar
        var route = "/profesor/"+id+"";
        //console.log(route);
        
        
     $.ajax({
            url:route,
                headers:{'X-CSRF-TOKEN':token},
                type:'PUT',
                dataType:'json',
                data:{primer_nombre:primer_nombre,segundo_nombre:segundo_nombre,primer_apellido:primer_apellido,segundo_apellido:segundo_apellido,telefono:telefono,profesion1:profesion1,profesion2:profesion2,profesion3:profesion3,profesion4:profesion4},
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