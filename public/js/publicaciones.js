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

$(document).on("click",".pagination li a",function(e){
	//se produce un evento
	e.preventDefault();
	var url = $(this).attr("href");
	$.ajax({
		type:'get',
		url:url,
		success:function(data){ //data contiene toda la informacion generada
			$("#listar-publicaciones").empty().html(data);
		}
	});
});

$("#guardar").click(function(event){
		var colaboradores = $("#coloraboradores").val();
		//console.log(colaboradores);
		var publicado = $("#publicado").val();
		var titulo = $("#titulo").val();
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
      		data:{publicado:publicado,colaboradores:colaboradores,titulo:titulo,fecha:fecha,link:link,id:id},

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
      	$("#coloraboradores_edit").val(data.colaboradores);
      	$("#publicado_edit").val(data.publicado_en);
      	$("#titulo_edit").val(data.titulo_trabajo);
      	$("#fecha_edit").val(data.fecha);
      	$("#enlace_edit").val(data.link);
      
    });
}

$("#editar").click(function(event){

	var id = $("#id").val();
	var id_autor = $("#select_id_edit option:selected").val();
	var colaboradores = $("#colaboradores_edit").val();
    var publicado_en = $("#publicado_edit").val();
    var titulo_trabajo = $("#titulo_edit").val();
    var fecha = $("#fecha_edit").val();
    var link = $("#enlace_edit").val();

	var route = "/publicaciones/"+id+"";
	var token = $("#token").val();
  		
     $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'PUT',
				dataType:'json',
				data:{id_autor:id_autor,colaboradores:colaboradores,publicado_en:publicado_en,titulo_trabajo:titulo_trabajo,fecha:fecha,link:link},


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

var Eliminar = function(id,nombre){
	$.alertable.confirm("<span>Estas seguro de eliminar las publicaciones de? </span>"+
		"<strong><span><br>" +nombre+"</span></strong>",{
		html:true
	}).then(function(){
		var route = "publicaciones/"+id+"";
		var token = $("#token").val();

		 $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'Delete',
				dataType:'json',
      			success:function(data){
			          	if(data.success=='true')
			          	{
			          		listarPublicaciones();
							$("#message-delete").fadeIn();
							$("#message-delete").show().delay(3000).fadeOut(3);   
			            }
        		}
    	});
		

	});
}