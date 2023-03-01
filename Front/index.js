$('.hoverindex').hide();
$('#connexion').hide();
$('#inscription').hide();
$('#mdpOublie').hide();

/* POP UP CONNEXION*/

$('#conne').click(function(){
    $('#connexion').fadeIn(300);
});
$('.close').click(function(){
    $('#connexion').fadeOut(300);
});

/* POP UP INSCRIPTION*/
$('#lienInscription').click(function(){
    $('#inscription').fadeIn(300);
});
$('.close').click(function(){
    $('#inscription').fadeOut(300);
});

/* POP UP CONNEXION DEPUIS INSCRIPTION*/

$('.lienConne').click(function(){
    $('#connexion').fadeIn(300);
    $('#inscription').fadeOut(300);
});
$('.close').click(function(){
    $('#connexion').fadeOut(300);
});

/* POP UP MDP OUBLIE*/

$('#lienMDP').click(function(){
    $('#mdpOublie').fadeIn(300);
    $('#connexion').fadeOut(300);
});
$('.close').click(function(){
    $('#mdpOublie').fadeOut(300);
});

/* POP UP INSCRIPTION 2*/
$('#lienInscription2').click(function(){
    $('#inscription').fadeIn(300);
    $('#mdpOublie').fadeOut(300);
});
$('.close').click(function(){
    $('#inscription').fadeOut(300);
});


/* images du jeux interactives */

$('.imgindex').mouseenter(function() {
    $(this).prev('.hoverindex').fadeIn(300);
    $('.hoverindex').mouseleave(function() {
        $(this).fadeOut(300);
    });
});