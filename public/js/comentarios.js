$(document).ready(function(){
		listarComentarios();
});

var id_b = ($('input:hidden[name = id_blog]').val());
//console.log(id_b);
var listarComentarios = function(){
	$.ajax({
		type:'get',
		url:'/listar-comentarios/'+id_b,
		success:function(data){
			$('#listar-comentarios').empty().html(data);
		}
	});
}


$("#guardarComentario").click(function(event){
		var comentario = $("#comentario").val();
		//var id_b = ($('input:hidden[name = id_blog]').val());
		//console.log(blog);
		 
  		var token = $("input[name=_token]").val();
  		//la ruta donde se envia la informacion del formulario
  		var route = "/comentarios";
  		
     		$.ajax({
      		url:route,
      		headers:{'X-CSRF-TOKEN':token},
      		type:'post',
      		datatype:'json',
      		data:{comentario:comentario,id_b:id_b},
      			success:function(data){
			          	if(data.success=='true'){
			          		listarComentarios();
							$("#myModalComentario").modal('toggle');
							//pintamos un mensaje
							$("#message-save").fadeIn();
							$("#message-save").show().delay(3000).fadeOut(3);


			                
			            }
        		}
     		});
});



function mostrarComentarios(id){
	var route = "/comentarios/"+id+"/edit";
	$.get(route, function(data){
		//console.log(id);
		$("#id").val(data.id);
		$("#editcomentario").val(data.comentario);
		
	});
}

$("#editarComentario").click(function(event){
				var id = $("#id").val();
				var comentario = $("#editcomentario").val();
				//console.log(id);
				var route = "/comentarios/"+id+"";
				var token = $("#token").val();
     			$.ajax({
	      			url:route,
					headers:{'X-CSRF-TOKEN':token},
					type:'PUT',
					dataType:'json',
					data:{comentario:comentario},

	      			success:function(data){
				          	if(data.success=='true'){
				          		listarComentarios();
								$("#editComentarioModal").modal('toggle');
								//pintamos un mensaje
								$("#message-update").fadeIn();
								$("#message-update").show().delay(3000).fadeOut(3);   
				            }
	        		}
     			});
});