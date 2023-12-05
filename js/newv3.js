$(document).ready(function () {

    
    var swiper = new Swiper(".banner_swiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $("[class^=s]").on('mouseenter',function() {
        var classNumber = $(this).attr('class').match(/\d+/)[0];
            $('.slotLeft').hide();
            $('.slotLeft.slot' + classNumber).toggle();
      });
});

