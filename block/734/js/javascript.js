function openSearch() {
    document.getElementById("my_search_box").classList.toggle("show");
}

function changePosition() {
    if ($('#lms_header').length) {
        var scrollTrigger = 45, // px
            changePos = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#lms_header').css('position', 'fixed')
                } else {
                     $('#lms_header').css('display','block');
                    $('#lms_header').css('position', 'absolute')
                }
            };
        changePos();
        $(window).on('scroll', function() {
            changePos();
        });
    }
}

function clipHeader() {
    if ($('.logo_container').length) {
        var scrollTrigger = 45, // px
            clip = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    //alert(scrollTop);
                    $('#lms_header').css('background', '#1a1a1a');
                    $('.logo').css('padding', '8px 0');
                    $('.par_dropdown_toggle').css('padding', '30px 18px');
                    $('.lms_search_toggle').css('top', '55px');

                } else {
                    $('#lms_header').css('display','block');
                    $('#lms_header').css('background', 'rgba(255,255,255,0.1)');
                    $('.logo').css('padding', '25px 0');
                    $('.par_dropdown_toggle').css('padding', '50px 18px');
                    $('.lms_search_toggle').css('top', '74px');

                }
            };
        clip();
        var lastScrollTop = 0;
        $(window).on('scroll', function() {
            clip();
        });
    }
}


$(window).bind('mousewheel', function(event) {
    var scrollToplength = $(window).scrollTop();
            if (event.originalEvent.wheelDelta >= 0) {
               $('#lms_header').css('display','block')
            }
            else {
                if(scrollToplength > 150 && $(window).width() > 972){
                    $('#lms_header').css('display','none');
                }
            }
});

function clickOpenMenu() {
    $('.main_item_click').click(function(e) {

        if (!$('.show_submenu').length) {
            $(this).addClass('show_submenu');
        } else {
            $(this).removeClass('show_submenu');
        }

    });
}

function toggleSlide() {
    if ($(window).width() <= 972) {
        $(".navigation_menu").removeClass('navbar-collapse');
    } else {
        $(".navigation_menu").addClass('navbar-collapse');
    }
}


$(window).resize(function() {
    toggleSlide();
});

$(document).ready(function(e) {


    $('.lms_menu_toggle').click(function(e) {
        $(".navigation_menu").slideToggle("slow");
    });


    $(function() {
        $('.dropdown-menu2').find('> li').click(function() {
            $(this).find('> ul').stop(true, true).slideToggle(1);
            return false;
        });
    });

    clickOpenMenu();
    changePosition();
    clipHeader();
    toggleSlide();
});