function checkScroll(){
    var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

    if($(window).scrollTop() > startY){
        $('.navbar').addClass("scrolled");
         $('.navbar').css({background:"rgb(30,30,32)"});
    }else{
        $('.navbar').removeClass("scrolled");
       $('.navbar').css({background:"rgba(71,152,185,0.3)"});
    }
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();

    });
}