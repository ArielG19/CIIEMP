function checkScroll(){
    var startY = $('.navbar').height() * 3.5; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");

         $('.navbar').css({background:"rgb(30,30,32)"});


         $("nav.navbar-findcond ul.dropdown-menu").css({background:"rgba(30,30,32,0.8)"});

    }else{
        $('.navbar').removeClass("scrolled");
       $('.navbar').css({background:"rgba(71,152,185,0.3)"});
       $("nav.navbar-findcond ul.dropdown-menu").css({background:"transparent"});
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();

    });
}