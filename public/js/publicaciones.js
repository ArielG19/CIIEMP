$(document).ready(function(){
		listarPublicaciones();
});
	var listarPublicaciones = function(){
	$.ajax({
		type:'get',
		url:'listar-publicaciones',
		success:function(data){
			$('#listar-publicaciones').empty().html(data);
		}
	});
}
$("#guardar").click(function(event){
		var publicado = $("#publicado").val();
	    var fecha = $("#fecha").val();
	    var link = $("#enlace").val();

	     var id = $("#select_id option:selected").val();

	    if(id == 0)
            {
                alert("No hay ninguna opcion seleccionada");
            }else{
                console.log(id);

        }

        //console.log(publicado,fecha,link,id);

  		var token = $("input[name=_token]").val();
  		//la ruta donde se envia la informacion del formulario
  		var route = "publicaciones";
  		
     $.ajax({
      		url:route,
      		headers:{'X-CSRF-TOKEN':token},
      		type:'post',
      		datatype:'json',
      		data:{publicado:publicado,fecha:fecha,link:link,id:id},

      			success:function(data){
			          	if(data.success=='true'){
			          		listarPublicaciones();
							$("#modalCreate").modal('toggle');
							//pintamos un mensaje
							$("#message-save").fadeIn();
							$("#message-save").show().delay(3000).fadeOut(3);
							

			                
			            }
        		}
     });
});

function Publicaciones(id){
    var route = "/publicaciones/"+id+"/edit";
        $.get(route, function(data){
        //console.log(data);
      	$("#id").val(data.id);
      	$("#select_id_edit").val(data.id_autor);
      	$("#publicado_edit").val(data.publicado_en);
      	$("#fecha_edit").val(data.fecha);
      	$("#enlace_edit").val(data.link);
      
    });
}

$("#editar").click(function(event){

	var id = $("#id").val();
	var id_autor = $("#select_id_edit option:selected").val();
    var publicado_en = $("#publicado_edit").val();
    var fecha = $("#fecha_edit").val();
    var link = $("#enlace_edit").val();

	var route = "/publicaciones/"+id+"";
	var token = $("#token").val();
  		
     $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'PUT',
				dataType:'json',
				data:{id_autor:id_autor,publicado_en:publicado_en,fecha:fecha,link:link},


      			success:function(data){
			          	if(data.success=='true'){
			          		listarPublicaciones();
							$("#ModalEditar").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
							$("#message-update").show().delay(3000).fadeOut(3);
							

			                
			            }
        		}
     });
});