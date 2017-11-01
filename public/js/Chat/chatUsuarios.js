
$("a#a-nombre").click(function(event){

   var id = $(this).attr("data-id");
   $(document).ready(function(){
        listarConversacion();
	});
    var listarConversacion = function(){
	    $.ajax({
	        type:'get',
	        url:'/listar-coversacion/'+ id,
	        success:function(data){
	            $('#chats').empty().html(data);
	        }
	    });
	}
});

$(document).on("click",".pagination li a",function(e){
		//se produce un evento
		e.preventDefault();
		var url = $(this).attr("href");
		$.ajax({
			type:'get',
			url:url,
			success:function(data)
			{ 
				$("#chats").empty().html(data);
			}
		});
	});


var Eliminar = function(id){
	$.alertable.confirm("<span>Estas seguro de eliminar esta conversacion? </span>",{
		html:true
	}).then(function(){
		var route = "chat/"+id+"";
		var token = $("#token").val();

		 $.ajax({
      		url:route,
				headers:{'X-CSRF-TOKEN':token},
				type:'Delete',
				dataType:'json',
      			success:function(data){
			          	if(data.success=='true')
			          	{
			          		//listarConversacion();
							//$("#message-delete").fadeIn();
							//$("#message-delete").show().delay(2000).fadeOut(2);   
			            }
        		}
    	});
		

	});
}


//console.log(id);
