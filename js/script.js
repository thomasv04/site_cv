
$(document).ready(function() {

     $(".trait_gauche").click(function(){

        if(!$('.trait_gauche').hasClass("extend_left"))
        {
            $(this).addClass("extend_left");
        }else{
            $('.trait_gauche').removeClass("extend_left");
        }

        if(!$('.contenu').hasClass("scroll")){

            $('.contenu').addClass("scroll");

        }else{
            $('.contenu').removeClass("scroll");
        }

    });
    
    
    $(".trait_droit").click(function(){
        if(!$('.trait_droit').hasClass("extend_droit"))
        {
            $('.trait_droit').addClass("extend_droit");
        }else{
            $('.trait_droit').removeClass("extend_droit");
        }

        if(!$('.page_droite').hasClass("enable")){

            $('.page_droite').removeClass("disable");
            $('.page_droite').addClass("enable");

        }else{
            $('.page_droite').removeClass("enable");
            $('.page_droite').addClass("disable");
        }
    });


    $(".trait_bas").click(function(){
        if(!$('.trait_bas').hasClass("extend_bas"))
        {
            $('.trait_bas').addClass("extend_bas");
        }else{
            $('.trait_bas').removeClass("extend_bas");
        }
    });

    

    $(".ajouter").click(function(){

        if(!$('.nouveau_contenu').hasClass("apparaitre"))
        {
            $('.nouveau_contenu').addClass("apparaitre");
        }

        if(!$('.ajouter').hasClass("disparaitre"))
        {
            $('.ajouter').addClass("disparaitre");
        }

    });

    $(".nouveau_croix").click(function(){

        if($('.nouveau_contenu').hasClass("apparaitre"))
        {
            $('.nouveau_contenu').removeClass("apparaitre");
        }

        if($('.ajouter').hasClass("disparaitre"))
        {
            $('.ajouter').removeClass("disparaitre");
        }

    });

    $(".croix").click(function(){

        if(!$('.alerte_supp').hasClass("apparaitre"))
        {
            $('.alerte_supp').addClass("apparaitre");
        }
    });

    $(".non").click(function(){

        if($('.alerte_supp').hasClass("apparaitre"))
        {
            $('.alerte_supp').removeClass("apparaitre");
        }
    });









});






