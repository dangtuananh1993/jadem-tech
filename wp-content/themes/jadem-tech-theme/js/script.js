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
        arrows: false,
      });
})
// Single Product slider
$(document).ready(function(){
    $('.single-product-slider').slick({
        // dots: true,
        arrows: true,
        // asNavFor: '.single-product-slider-bot'
    })
})
$(document).ready(function(){
    $('.single-product-slider-bot').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        // asNavFor: '.slider-for',
        // dots: true,
        // centerMode: true,
        focusOnSelect: true,
        // asNavFor: '.single-product-slider',
      });
})

// Relevant Product slider
$(document).ready(function(){
    $('.relevant-product-slider').slick({
        // dots: true,
        arrows: true,
        slidesToShow: 4,
    })
})
// Tab Category Product
$(document).ready(function(){
    // $('.tab-content').click(function(e) {
    //     $(this).addClass('tab-content-active')
    //     $(this).siblings().removeClass('tab-content-active')
    //     // console.log('hello')
    //     var idp = $(this).data('tab')
    //     // console.log(idp)
    //     $(idp).addClass('active')
    //     $(idp).siblings().removeClass('active')
    // })
    
})
// Sticky Header $(window).scroll(function(){
$(document).ready(function(){
    $(window).scroll(function(){
        var sticky = $('.header-bot'),
            scroll = $(window).scrollTop();
      
        if (scroll >= 50) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
      });
})
    
