$(document).ready(function (e) {
    $('.small-img').eq(0).click(function (e) {
        $('#img').attr('src', 'images/img-chitiet-1.png');
    });
    $('.small-img').eq(1).click(function (e) {
        $('#img').attr('src', 'images/img-chitiet-2.png');
    });
    $('.small-img').eq(2).click(function (e) {
        $('#img').attr('src', 'images/img-chitiet-3.png');
    });
});