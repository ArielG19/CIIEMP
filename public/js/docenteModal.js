function Mostrar(id){
	var route = "docentes-innovadores/"+id+"";
	//console.log(id);
	$.get(route, function(data){
		//console.log(data);
		$("#acerca").text(" "+data[0].primer_nombre +" "+ data[0].primer_apellido);
		$(".media-heading").text(data[0].primer_nombre);

		var imagen = '/perfil/'+ data[0].imagen;
		$("#im").attr("src",''+imagen);		

		$("#label1").text(data[0].profesion1);
		$("#label2").text(data[0].profesion2);
		$("#label3").text(data[0].profesion3);
		$("#label4").text(data[0].profesion4);

		var url = '/listar-blog/'+ data[0].id_usuario;
		$("#blog").attr("href",''+url);	
		//console.log(url);
		var url2 = '/curriculon-docente/'+ data[0].id_usuario;
		//console.log(url2);
		$("#curr").attr("href",''+url2);	

		var url3 = '/publicaciones-docente/'+ data[0].id_usuario;
		//console.log(url3);
		$("#public").attr("href",'' +url3);			
		
		
		
		
	});
}