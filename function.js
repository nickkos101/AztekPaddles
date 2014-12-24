$(document).ready(function(){

  $('.cart').hover(function(){
    $('.cart').animate({'height' : '90px'})
  }, function(){
    $('.cart').animate({'height' : '86px'})
  });

  $('.slider').slick({});
  $('.blog-slider .post-wrap').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});

  function moveSlider() {
    $('.slider-load-bar .progress').animate({'width' : '+=100%'}, 3000, function(){
      $('.slider').slickNext();
      $('.slider-load-bar .progress').css('width', '0px');
    });
  }


  setInterval(function(){ 
    moveSlider();
  },
  5000);

  //Prototype JS

  $('.question input, .question textarea, .question select').click(function(){
    $(this).parent('.question').hide();
    $(this).parent('.question').next('.question').css('display', 'inline-block');
    $('.combinator-load-bar .progress').animate({'width':'+=10%'});
  });

});