$(document).ready(function () {
    if ($('.hero-slider').length > 0) {
        $('.hero-slider').owlCarousel({
            items:1,
            loop:true,
            nav:true,
            dots:false,
            navText:['', '']
        });
    }
});


