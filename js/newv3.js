$(document).ready(function () {

    var currentPage = window.location.pathname.split('/').pop().split('.').slice(0, -1).join('.');
    
    if (currentPage == 'index') {
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
    }

    $("[class^=s]").on('mouseenter', function() {
        var classAttribute = $(this).attr('class');
    
        // Check if classAttribute is not null
        if (classAttribute !== undefined && classAttribute !== null) {
            var matchResult = classAttribute.match(/\d+/);
    
            // Check if matchResult is not null and has elements
            if (matchResult !== null && matchResult.length > 0) {
                var classNumber = matchResult[0];
                $('.slotLeft').hide();
                $('.slotLeft.slot' + classNumber).toggle();
            }
        }
    });

    $('#loginBtn').on('click', function() {
        $('#login-container').load('/inc/login_pop.php', function() {
            $('#closePop').on('click', function() {
                $('#login-container').empty();
            });
        });
    });
    $('#regBtn').on('click', function() {
        $('#login-container').load('/inc/reg_pop.php', function() {
            $('#closePop').on('click', function() {
                $('#login-container').empty();
            });
        });
    });
    $('#contactBtn').on('click', function() {
        $('#login-container').load('/inc/contact_pop.php', function() {
            $('#closePop').on('click', function() {
                $('#login-container').empty();
            });
        });
    });
    
});

