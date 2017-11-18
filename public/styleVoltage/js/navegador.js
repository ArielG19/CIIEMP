$(document).ready(function() {

	$("#navegador").click(function(event){

	  console.log("hiciste click");

		if($('#navegador').has('hover')){
			console.log("tiene hover");
			$('nav.navbar-findcond ul.navbar-nav li > a:hover').css({background:"transparent"});
			/*if ( $('nav.navbar-findcond ul.navbar-nav li > a:hover').is('active') ) {
				console.log("presionado");
				$('.navbar').css({background:"rgb(30,30,32)"});
				
			$(this).css('background:red');
			} else {
			console.log("no presionado");
				$('nav.navbar-findcond ul.navbar-nav li > a:hover').css({background:"red"});
			}*/
		}
		
	});
});