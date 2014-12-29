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

  function progressBar() {
    var totalQuestion = $('.question').length;
    var QuestionPercentage = 1 / (totalQuestion - 1) * 100;
    $('.combinator-load-bar .progress').animate({'width':'+='+QuestionPercentage+'%'});
  }

  window.startpage = 1;

  function goToNextQuestion(eve) {
    window.startpage++;
    console.log(startpage);
    $(eve).parent().parent().parent('.question').hide();
    $(eve).parent().parent().parent('.question').next('.question').css('display', 'inline-block');
    $('.startQuestion').text(window.startpage);
  }

  function formProcessor() {
    $('.question button').click(function(){
      event.preventDefault();
      goToNextQuestion(this);
      progressBar(this);
    });

    $('.question select').change(function(){
      event.preventDefault();
      if (!$(this).hasClass('existing')) {
        goToNextQuestion(this);
        progressBar(this);
      }
    });

    $('.question input[type=number]').change(function(){
      event.preventDefault();
      if(isNaN($(this).val())) {
        alert('You must enter your weight as a number!');
      }
      else {
        goToNextQuestion(this);
        progressBar(this);
      }
    });

    $('.existing').change(function(){
      event.preventDefault();
      if ($('.existing').val() === 'yes') {
        $(this).fadeOut();
        $('.subquestion:first-of-type').fadeIn();
        $('.subquest').text('What type of paddle?');
      }
      else {
        goToNextQuestion(this);
        progressBar(this);
      }
    });

    //Subquestions

    $('.subquestion select').change(function(){
      $(this).parent().hide();
      $(this).parent().next().show();
    });

    $('.subquestion input[type=text]').change(function(){
      var qtext = $(this).parent().next().find('label').text();
      $(this).parent().hide();
      $(this).parent().next().show();
      $('.subquest').text(qtext);
    });

    $('.bladetype').text($('.paddleuse').val());
    $('.shaftlength').text($('.tall').val());
  }

  formProcessor();

});