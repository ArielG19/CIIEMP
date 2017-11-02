$(document).ready(function(){
		listarCurriculon();
});

var listarCurriculon = function(){
		$.ajax({
			type:'get',
			url:'listar-curriculum',
			success:function(data){
				$('#listar-curriculon').empty().html(data);
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
			$("#listar-curriculon").empty().html(data);
		}
	});
});


$("#guardar").click(function(event){
		var resumen = $("#resumen").val();
	    var titulos = $("#titulos_aca").val();
	    var estudios = $("#estudios_doctorales").val();
	    var experiencia_lab = $("#experiencia").val();
	    var nac = $("#nacionalidad").val();
	    var dir = $("#direccion").val();
	    var estado = $("#estado_ci").val();

	    var id = $("#select_id option:selected").val();

	    if(id == 0)
            {
                alert("No hay ninguna opcion seleccionada");
            }else{
                console.log(id);

        }
	    
  		var token = $("input[name=_token]").val();
  		//la ruta donde se envia la informacion del formulario
  		var route = "curriculum";
  		
     $.ajax({
      		url:route,
      		headers:{'X-CSRF-TOKEN':token},
      		type:'post',
      		datatype:'json',
      		data:{resumen:resumen,titulos:titulos,estudios:estudios,experiencia_lab:experiencia_lab,nac:nac,dir:dir,estado:estado,id:id},

      			success:function(data){
			          	if(data.success=='true'){
			          		listarCurriculon();
							$("#myModal").modal('toggle');
							//pintamos un mensaje
							$("#message-save").fadeIn();
							$("#message-save").show().delay(3000).fadeOut(3);
							

			                
			            }
        		}
     });
     
});

function DatosCurriculons(id){
    var route = "/curriculum/"+id+"/edit";
        $.get(route, function(data){
        //console.log(data);
      	$("#id").val(data.id);
      	$('#resumen_edit').trumbowyg('html', '<p>'+data.resumen+'</p>');
	   	$("#titulos_aca_edit").trumbowyg('html', '<p>'+data.titulos_academicos+'</p>');
	    $("#estudios_doc_edit").trumbowyg('html', '<p>'+data.estudios_doctorales+'</p>');
	    $("#experiencia_edit").trumbowyg('html', '<p>'+data.experiencia_laboral+'</p>');
		$("#nacionalidad_edit").val(data.nacionalidad);
		$("#direccion_edit").val(data.direccion);
	  	$("#estado_ci_edit").val(data.estado_civil);
	  	$("#select_id_edit").val(data.id_usuario);

    });
}

$("#actualizar").click(function(event){

	var id = $("#id").val();
	var resumen = $("#resumen_edit").val();
	var titulos_academicos = $("#titulos_aca_edit").val();
	var estudios_doctorales = $("#estudios_doc_edit").val();
	var experiencia_laboral = $("#experiencia_edit").val();
	var nacionalidad = $("#nacionalidad_edit").val();
	var direccion = $("#direccion_edit").val();
	var estado= $("#estado_ci_edit").val();
	var id_usuario = $("#select_id_edit option:selected").val();

	var route = "/curriculum/"+id+"";
	var token = $("#token").val();
  		
     $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'PUT',
				dataType:'json',
				data:{resumen:resumen,titulos_academicos:titulos_academicos,estudios_doctorales:estudios_doctorales,experiencia_laboral:experiencia_laboral,nacionalidad:nacionalidad,direccion:direccion,estado:estado,id_usuario:id_usuario},


      			success:function(data){
			          	if(data.success=='true'){
			          		listarCurriculon();
							$("#ModalEditar").modal('toggle');
							//pintamos un mensaje
							$("#message-update").fadeIn();
							$("#message-update").show().delay(3000).fadeOut(3);
							

			                
			            }
        		}
     });
});

var Eliminar = function(id,nombre){
	$.alertable.confirm("<span>Estas seguro de eliminar el curriculum vitae de? </span>"+
		"<strong><span><br>" +nombre+"</span></strong>",{
		html:true
	}).then(function(){
		var route = "curriculum/"+id+"";
		var token = $("#token").val();

		 $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'Delete',
				dataType:'json',
      			success:function(data){
			          	if(data.success=='true')
			          	{
			          		listarCurriculon();
							$("#message-delete").fadeIn();
							$("#message-delete").show().delay(3000).fadeOut(3);   
			            }
        		}
    	});
		

	});
}