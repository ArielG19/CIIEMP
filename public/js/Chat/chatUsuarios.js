

$("a#a-nombre").click(function(event){

   var id = $(this).attr("data-id");
   //console.log(id);

    var listarConversacion = function(){
	    $.ajax({
	        type:'get',
	        url:'/listar-coversacion/'+ id,
	        success:function(data){
	            $('#chats').empty().html(data);
	        }
	    });
	}

	$(document).ready(function(){
        listarConversacion();
	});

});

//console.log(id);
