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
        fade: true,
        speed: 1000,
        cssEase: 'linear',
        arrows: true,
        asNavFor: '.single-product-slider-bot'
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
        asNavFor: '.single-product-slider',
      });
})

// Relevant Product slider
$(document).ready(function(){
    $('.relevant-product-slider').slick({
        // dots: true,
        arrows: true,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 2000,
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
            sticky_bread = $('.bread-crumb')
            scroll = $(window).scrollTop();
      
        if (scroll >= 50) {
            sticky.addClass('fixed')
            sticky_bread.addClass('fixed_b')
        }
        else { 
            sticky.removeClass('fixed')
            sticky_bread.removeClass('fixed_b')
        }
        // if (scroll >= 50) sticky_bread.addClass('fixed');
        // else sticky_bread.removeClass('fixed');
      });
})
// Show sub menu image
$(document).ready(function(){
    var des = $('.menu-child-img')
    $('.menu-child-items-a').mouseover(function(e){
        des.html($(this).data('img'))
    })
}) 
// sale card icon 
$(document).ready(function(){
    $('i.sale-person').click(function(){
        var sibling_parent = $(this).parent().siblings()
        // console.log(sibling_parent)
        sibling_parent.toggle('hide')
        $(this).siblings().toggle('show')
    })
})


