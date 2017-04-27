$(document).ready(function () {
    $(".jq-selectbox_select").click(function () {
        $(".jq-selectbox_dropdown").slideToggle();
        $(".jq-selectbox_trigger").css("transform", "rotateX(180deg)");
    });
});


