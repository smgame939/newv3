$(document).ready(function () {
    // Browser detection mobile or desktop using user agents
    if (/Mobi|Android/i.test(navigator.userAgent)) {
        // User is on a mobile device
        console.log('Mobile device detected');
    } else {
        // User is on a desktop
        console.log('Desktop detected');
    }

    var currentPage = window.location.pathname.split('/').pop().split('.').slice(0, -1).join('.');

    if (currentPage == 'index' || currentPage == 'slot' || currentPage == 'footer') {
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

    $("[class^=s]").on('mouseenter', function () {
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

    $('#loginBtn').on('click', function () {
        $('#login-container').load('/inc/login_pop.php', function () {
            $('#closePop').on('click', function () {
                $('#login-container').empty();
            });
        });
    });
    $('#regBtn').on('click', function () {
        $('#login-container').load('/inc/reg_pop.php', function () {
            $('#closePop').on('click', function () {
                $('#login-container').empty();
            });
        });
    });
    $('#contactBtn').on('click', function () {
        $('#login-container').load('/inc/contact_pop.php', function () {
            $('#closePop').on('click', function () {
                $('#login-container').empty();
            });
        });
    });

    $('.arrow-zone').on('click', function () {
        $(this).toggleClass('arrowGO');
        $('.all-game').toggle();
    });

    $('.all-3party ul li').on('mouseenter', function () {
        $(this).children('.pic').addClass('aniTab');
    });

    $('.game-frame').on('mouseenter', function () {
        $(this).children('.pic').addClass('aniTab');
    });

    $('.all-3party ul li').on('mouseleave', function () {
        $(this).children('.pic').removeClass('aniTab');
    });

    $('.game-frame').on('mouseleave', function () {
        $(this).children('.pic').removeClass('aniTab');
    });

});


