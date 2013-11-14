$(document).ready(function(){
    
    
    //PreProcess Slides Order
    $(function () {
        $('.slider .slide:first').before($('.slider .slide:last'));
        
        //Set the Looping interval for sliding
        setInterval(
            function () {
                $('.slider').find('.slide:last').animate({
                    "top":  "0px"
                }, 700, function () {
                    $('.slider .slide:first').css({
                        "top": '-100%'
                    });
                    $('.slider .slide:first').before($('.slider .slide:last'));          
                });
            },4000
            );
    });
    
}); 