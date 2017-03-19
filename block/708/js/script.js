$(function() {
    $('.image img:gt(3)').hide();
    setInterval(function(){
      $('.image :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.image');}, 
      4000);
});