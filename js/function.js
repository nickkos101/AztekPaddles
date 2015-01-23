jQuery(document).ready(function(){

  function scrollY() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  //When the page loads animate the paddles at the top

  jQuery( ".top-anim" ).animate({top:'0px'}, 1000);
  jQuery( ".bot-anim" ).animate({bottom:'0px'}, 1000);
  jQuery('.glow').fadeIn(1500);

  jQuery('.drawing button').click(function(){
    jQuery('.drawing button').removeClass('active');
    jQuery(this).addClass('active');
  });

  //Provide Zoom Functionality for the Homepage

  jQuery(".paddle img").elevateZoom({zoomType : "lens", lensShape : "round", lensSize : 200});
  jQuery(".complete-paddle img").elevateZoom({zoomType : "lens", lensShape : "round", lensSize : 200});
  jQuery(".product-type-simple .images img.wp-post-image").elevateZoom({zoomType : "lens", lensShape : "round", containLensZoom : true, lensFadeIn : 200, lensSize : 200});
  jQuery(".product-type-composite .images img.wp-post-image").elevateZoom({zoomType : "lens", lensShape : "round", lensFadeIn : 200, lensSize : 200});
  //Initialize Factory Slider 

  jQuery('.factory').slick({
    infinite: false,
    autoplay: false,
    arrows: true,
    dots: true,
    autoplaySpeed:5000,
    speed: 500,
    fade: false,
    slide: 'div',
    cssEase: 'linear',
    adaptiveHeight: true
  });

  jQuery('.endorsement').slick({
    infinite: false,
    autoplay: false,
    arrows: true,
    dots: true,
    autoplaySpeed:5000,
    speed: 500,
    fade: false,
    slide: 'div',
    cssEase: 'linear',
    adaptiveHeight: true
  });

   //Initialize Social Slider 

   jQuery('.social-carousel').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    dots: false
  });

   //Responsive Menu Actions

   jQuery('header .responsive .fa').click(function(){
    jQuery('header .responsive ul').slideToggle();
  });

   //Fit Config UI - Male Female Buttons

   jQuery('.male').click(function(){
    var femalehoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/female.png';
    jQuery('.female').find('img').attr('src', femalehoverStateUrl);

    var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/male-selected.png';
    var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/male.png'; 
    if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
     jQuery(this).find('img').attr('src', hoverStateUrl);
   }
 });

   jQuery('.female').click(function(){
    var malehoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/male.png';
    jQuery('.male').find('img').attr('src', malehoverStateUrl);

    var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/female-selected.png';
    var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/female.png'; 
    if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
     jQuery(this).find('img').attr('src', hoverStateUrl);
   }
 });

   //Fit Config UI - Number Input State Changes

   jQuery('.number').blur(function(){
    jQuery(this).addClass('active');
  });

   //Fit Config UI - ToolTip System

   jQuery('.toolTipWrap input').focus(function(){
    jQuery(this).parent().find('.toolTip').fadeIn();
  });

   jQuery('.toolTipWrap input').blur(function(){
    jQuery(this).parent().find('.toolTip').fadeOut();
  });

   jQuery('.toolTip li').click(function(){
    jQuery(this).parent().parent().parent().find('input').val(jQuery(this).text());
    // jQuery(this).parent().parent().parent().find('input').focus();
  });

   //Fit Config UI - Create Range Inputs

   jQuery( ".skill-level-slider" ).slider({
    value:2,
    min: 1,
    max: 3,
    step: 1,
    slide: function( event, ui ) {
      jQuery(this).parent().find('input[type=hidden]').val( ui.value );
      jQuery(this).parent().find('input[type=hidden]').change();
    },
      });

  //Fit Config UI - Select Boxes

  jQuery( ".fit-config select" ).selectmenu();

  jQuery(".ui-selectmenu-text").prepend('<i class="fa fa-angle-down"></i> ');

  //Fit Config UI - Check Boxes

  jQuery( ".fit-config .checkbox").click(function(){
    jQuery(this).toggleClass('active');
  });

   //Fit Config UI - Check Boxes on Boards

   jQuery('.surf').click(function(){
     var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf-selected.png';
     var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf.png'; 
     if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
     jQuery(this).find('img').attr('src', hoverStateUrl);
   }
 });

   jQuery('.flat-water').click(function(){
     var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/flat-water-selected.png';
     var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/flat-water.png'; 
     if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
     jQuery(this).find('img').attr('src', hoverStateUrl);
   }
 });

   jQuery('.race').click(function(){
     var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race-selected.png';
     var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race.png'; 
     if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
     jQuery(this).find('img').attr('src', hoverStateUrl);
   }
 });

   //Board Thickness Selection States

   function resetallThickness() {
     var surfURL = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf-boardtype.png';
     var raceURL =  'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race-boardtype.png';
     var inflatableURL = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/inflatable-boardtype.png';
     jQuery('.board-thickness button[value=thin] img').attr('src', surfURL);
     jQuery('.board-thickness button[value=medium] img').attr('src', raceURL);
     jQuery('.board-thickness button[value=thick] img').attr('src', inflatableURL);
   }

   jQuery('.board-thickness button[value=thin]').click(function(){
     var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf-boardtype-selected.png';
     var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf-boardtype.png'; 
     if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
      resetallThickness();
      jQuery(this).find('img').attr('src', hoverStateUrl);
    }
  });
   jQuery('.board-thickness button[value=medium]').click(function(){
     var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race-boardtype-selected.png';
     var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race-boardtype.png'; 
     if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
      resetallThickness();
      jQuery(this).find('img').attr('src', hoverStateUrl);
    }
  });
   jQuery('.board-thickness button[value=thick]').click(function(){
     var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/inflatable-boardtype-selected.png';
     var origStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/inflatable-boardtype.png'; 
     if(jQuery(this).find('img').attr('src') === hoverStateUrl) {
      jQuery(this).find('img').attr('src', origStateUrl);
    }
    else {
      resetallThickness();
      jQuery(this).find('img').attr('src', hoverStateUrl);
    }
  });


// Blade Swap Homepage Technique

setInterval(function(){
  jQuery('.blade-1').fadeToggle();
  jQuery('.blade-2').fadeToggle();
},3000);

// Thumbnail to main image swap
jQuery('.thumbnails .img-swap').click(function(){
  var photo_fullsize =  jQuery(this).find('img').attr('src').replace('-150x213','');
  var photo_zoom =  jQuery(this).find('img').attr('src').replace('-150x213','').replace('http', 'url(http').replace('.png', '.png)');
  var photo_swapback =  jQuery('.product .images').find('img').attr('src').replace('.png', '-150x213.png');
  jQuery(this).find('img').attr('src', photo_swapback);
  jQuery('.product .images img.wp-post-image').attr('src', photo_fullsize);
  jQuery('.zoomLens').css('background-image', photo_zoom);
  return false;
}); 
});