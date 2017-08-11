function listarUsuario(){
	$.ajax({
		type:'get',
		url:'listar-usuarios',
		success:function(data){
			$('#listar-usuarios').empty().html(data);
		}
	});
}