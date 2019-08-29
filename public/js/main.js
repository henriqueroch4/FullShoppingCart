$(document).ready(function (){
 $('.owl-carousel').owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoWidth: true,
    responsive:{
        1000:{
            items:1
        }
    }
});