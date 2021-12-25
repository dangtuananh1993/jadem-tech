// Banner slider
$(document).ready(function(){
    $('.banner').slick({
        dots: true
    })
})
// Partner slider
$(document).ready(function(){
    $('.partner-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
})
