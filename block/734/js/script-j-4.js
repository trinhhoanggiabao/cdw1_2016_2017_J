
function slide4() {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        breakpoints: {
            1400: {
                slidesPerView: 1,
                loopedSlides: 1,
                spaceBetween: 10
            }
        }
    });
}

$(document).ready(function () {
    $('a').tooltip();
    slide4();
});
