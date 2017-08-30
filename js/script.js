
$(document).ready(function() {

    /* Quand je clique sur l'icône hamburger je rajoute une classe au body */
    $(".burger").click(function(){
        if($('#menu').hasClass("show")){
            $('#menu').removeClass("show");
        }else{
            $('#menu').addClass("show");
        }

    });

    $("#menu").click(function(){

        $('#menu').removeClass("show");


    });







    $('body').append('<div id="returnOnTop" title="Retour en haut">&nbsp;</div>');

    // On button click, let's scroll up to top
    $('#returnOnTop').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });



    var position_top_raccourci = $('#menu').offset().top;
    var position_top_comp = $('#competences').offset().top;
    var position_top_acc = $('header').offset().top;
    var position_top_pers = $('#infos_perso').offset().top;
    var position_top_con = $('#contact').offset().top;
    var position_top_propos = $('#propos').offset().top;
    var test = position_top_acc + 50 ;



    $(window).scroll(function () {


        if ( $(window).scrollTop() < position_top_propos )
            $('#returnOnTop').fadeOut();
        else
            $('#returnOnTop').fadeIn();






    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    var items = document.querySelectorAll(".timeline li");


    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
        }
    }

    window.addEventListener("load", callbackFunc);
    window.addEventListener("scroll", callbackFunc);

});




