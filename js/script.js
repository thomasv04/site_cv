
$(document).ready(function() {


    $(".trait_gauche").click(function(){

        if(!$('.trait_gauche').hasClass("extend_left"))
        {
            $('.trait_gauche').addClass("extend_left");
        }

        if(!$('.page_gauche').hasClass("enable")){

            $('.page_gauche').removeClass("disable");
            $('.page_gauche').addClass("enable");

        }

        if(!$('.retour img').hasClass("enable")){

            $('.retour img').addClass("enable");

        }
    });

    $(".trait_haut").click(function(){
        if(!$('.trait_haut').hasClass("extend_haut"))
        {
            $('.trait_haut').addClass("extend_haut");
        }

        if(!$('.page_haut').hasClass("enable")){

            $('.page_haut').removeClass("disable");
            $('.page_haut').addClass("enable");

        }

        if(!$('.retour img').hasClass("enable")){

            $('.retour img').addClass("enable");

        }
    });

    $(".trait_bas").click(function(){
        if(!$('.trait_bas').hasClass("extend_bas"))
        {
            $('.trait_bas').addClass("extend_bas");
        }

        if(!$('.page_bas').hasClass("enable")){

            $('.page_bas').removeClass("disable");
            $('.page_bas').addClass("enable");

        }

        if(!$('.retour img').hasClass("enable")){

            $('.retour img').addClass("enable");

        }
    });

    $(".trait_droit").click(function(){
        if(!$('.trait_droit').hasClass("extend_droit"))
        {
            $('.trait_droit').addClass("extend_droit");
        }

        if(!$('.page_droite').hasClass("enable")){

            $('.page_droite').removeClass("disable");
            $('.page_droite').addClass("enable");

        }

        if(!$('.retour img').hasClass("enable")){

            $('.retour img').addClass("enable");

        }
    });

    $(".retour").click(function(){

        if($('.trait_gauche').hasClass("extend_left")){
            $('.trait_gauche').removeClass("extend_left");
        }

        if($('.trait_haut').hasClass("extend_haut")){
            $('.trait_haut').removeClass("extend_haut");
        }

        if($('.trait_bas').hasClass("extend_bas")){
            $('.trait_bas').removeClass("extend_bas");
        }

        if($('.trait_droit').hasClass("extend_droit")){
            $('.trait_droit').removeClass("extend_droit");
        }

        if($('.page_gauche').hasClass("enable")){

            $('.page_gauche').removeClass("enable");
            $('.page_gauche').addClass("disable");
        }

        if($('.page_haut').hasClass("enable")){

            $('.page_haut').removeClass("enable");
            $('.page_haut').addClass("disable");
        }

        if($('.page_bas').hasClass("enable")){

            $('.page_bas').removeClass("enable");
            $('.page_bas').addClass("disable");
        }

        if($('.page_droite').hasClass("enable")){

            $('.page_droite').removeClass("enable");
            $('.page_droite').addClass("disable");
        }


        if($('.retour img').hasClass("enable"))
        {

            $('.retour img').removeClass("enable");

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




