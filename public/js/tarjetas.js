$(document).ready(function(){
    $('.tarjeta').click(function(){
        $(this).slideToggle();
    })

    $("#verMapa").click(function(){
        $("#mapa").removeClass("float-left");
    })
})
function verMapaGrande(){
document.getElementById('map').className="container col-xl-12 col-lg-12 col-md-12 col-sm-12 center-block";
document.getElementById('cards').className="d-none"

}
function verMapaPeque(){
    document.getElementById('map').className="container col-xl-8 col-lg-8 col-md-12 col-sm-12 float-left";
    document.getElementById('cards').className="container row addScroll col-xl-4 col-lg-4 col-md-12 col-sm-12 float-left"

    }