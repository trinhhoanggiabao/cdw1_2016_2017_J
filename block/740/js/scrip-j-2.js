
function slide2() {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        nextButton: '.next',
        prevButton: '.prev',
        breakpoints: {
            1400: {
                slidesPerView: 2,
                loopedSlides: 2,
                spaceBetween: 10
            },
            717: {
                slidesPerView: 1,
                loopedSlides: 1,
                spaceBetween: 20
            }
        }
    });
}
$(document).ready(function () {
    $('a').tooltip();
    slide2();
});
