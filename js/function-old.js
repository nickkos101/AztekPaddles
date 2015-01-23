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

   //Initialize Social Slider 

   jQuery('.social-carousel').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
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
    }
  });

  //Fit Config UI - Tooltips on Range Input
  
  jQuery(document).tooltip({
    items: ".ui-slider-handle",
    content: function() {
      return '<img src="http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/bikini.jpg" >';
    },
    position: { my: "center center", at: "center bottom" }
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



   //Prototyping for screen changing in the fit thing

   var currentScreen = 0;
   var totalScreens = jQuery(".screen").length;

   jQuery('.ui-bar button').click(function(){
    //Progression to the next screen
    currentScreen++;
    jQuery('.screen.active').fadeOut(function(){
      jQuery('.screen.active').removeClass('active');
      console.log(currentScreen);
      jQuery( '.screen:eq('+currentScreen+')' ).fadeIn(function(){
        jQuery(this).addClass('active');
      });;

         //Progress Bar functions

         jQuery('.progress-bar div.current').removeClass('current');
         jQuery('.progress-bar div:eq('+currentScreen+')').addClass('current');

         jQuery('.progress-bar div').each(function(index) {

           if (index < currentScreen) {
            jQuery(this).addClass('finished');
          }

        });

       });

          //Fade the button out until security is validated
          jQuery(this).hide();
        });

   console.log(currentScreen);

   //FORM PROCESSING AND DEBUGGING!

   function ListenForSecurityChanges() {
        //CURRENT SCREEN = 0
        if (currentScreen === 0) {
          if (gender != undefined && age != undefined && height != undefined && weight != undefined) {
            jQuery('.ui-bar button').fadeIn();
          }
        }
        else if (currentScreen === 1) {
         //CURRENT SCREEN = 1
         if (handSize != undefined) {
          jQuery('.ui-bar button').fadeIn();
        }
      }
      else if (currentScreen === 2) {
        //CURRENT SCREEN = 2
        if (intendedUse.length > 0) {
          jQuery('.ui-bar button').fadeIn();
        }
        else {
          jQuery('.ui-bar button').hide();
        }
      }
      else if (currentScreen === 3) {
         //CURRENT SCREEN = 3
         if (boardThickness != undefined) {
          jQuery('.ui-bar button').fadeIn();
        }
      }
      else if (currentScreen === 4) {
         //CURRENT SCREEN = 4
         if (skillLevel != undefined && paddleStyle != undefined) {
          jQuery('.ui-bar button').fadeIn();
          add_items_to_cart();
          changeResults();
        }
      }
    }

    /* GENDER */

    var gender;
    console.log(gender);
    jQuery('.male').click(function(){
      gender = 'male';
      console.log('Gender has been set to: '+gender);
      ListenForSecurityChanges();
    });

    jQuery('.female').click(function(){
      gender = 'female';
      console.log('Gender has been set to: '+gender);
      ListenForSecurityChanges();
    });

    /* AGE */

    var age;

    jQuery('.age .toolTip li').click(function(){
     age = jQuery(this).val();
     console.log('Age has been set to: '+age);
     ListenForSecurityChanges();
   });

    /* HEIGHT */

    var height;

    jQuery('.height .toolTip li').click(function(){
      height = jQuery(this).val();
      console.log('Height has been set to: '+height);
      ListenForSecurityChanges();
    });

    /* WEIGHT */

    var weight;

    jQuery('.weight .toolTip li').click(function(){
      weight = jQuery(this).val();
      console.log('Weight has been set to: '+weight);
      ListenForSecurityChanges();
    });

    /* HAND SIZE */

    var handSize;

    jQuery('.hand-size .toolTip li').click(function(){
      handSize = jQuery(this).text();
      console.log('Hand Size has been set to: '+handSize);
      ListenForSecurityChanges();
    });

    /* INTENDED USE */
    var intendedUse = [];

    jQuery('.intended-use button').click(function(){
      if(jQuery.inArray(jQuery(this).val(), intendedUse) === -1) {
        intendedUse.push(jQuery(this).val());
      }
      else {
        intendedUse.splice(jQuery.inArray(jQuery(this).val(), intendedUse),1);
      }
      console.log('Intended Use has been set to: '+intendedUse);
      ListenForSecurityChanges();
    });

    /* BOARD THICKNESS */
    var boardThickness;

    jQuery('.board-thickness button').click(function(){
      boardThickness = jQuery(this).val();
      console.log('Board Thickness has been set to: '+boardThickness);
      ListenForSecurityChanges();
    });

    /* SKILL LEVEL */

    var skillLevel;

    jQuery('input[name=skilllvl]').change(function(){
      skillLevel = jQuery(this).val();
      console.log('Skill Level has been set to: '+skillLevel);
      ListenForSecurityChanges();
    });

    /* PADDLE STYLE */

    var paddleStyle;

    jQuery('input[name=paddlestyle]').change(function(){
      paddleStyle = jQuery(this).val();
      console.log('Paddle Style has been set to: '+paddleStyle);
      ListenForSecurityChanges();
    });

    // ADD BLADE TO CART

    //Intended Use Calculation extends into Blade Calculation

    var SurfBlade;
    var RaceBlade;

    if (jQuery.inArray('Surf', intendedUse)) {
      SurfBlade = true;
    }
    else if (jQuery.inArray('Flat Water', intendedUse)) {
      SurfBlade = true;
    }
    else if (jQuery.inArray('Surf', intendedUse)) {
      RaceBlade = true;
    }
    else {
      alert('Something went wrong error: Intended Use Calculation');
    }

    //WHAT BLADES TO ADD??

    var FlexRating;
    var BladeFlex;

    if (skillLevel === 'beginner'){
      FlexRating = 225;
    }
    else if (skillLevel === 'beginner' && paddleStyle === 'fast') {
      FlexRating = 250;
    }
    else if (skillLevel === 'intermediate') {
      FlexRating = 225;
    }
    else if (skillLevel === 'intermediate' && paddleStyle === 'medium') {
      FlexRating = 250;
    }
    else if (skillLevel === 'intermediate' && paddleStyle === 'fast') {
      FlexRating = 275;
    }
    else if (skillLevel === 'advanced') {
      FlexRating = 250;
    }
    else if (skillLevel === 'advanced' && paddleStyle === 'medium') {
      FlexRating = 250;
    }
    else if (skillLevel === 'advanced' && paddleStyle === 'fast') {
      FlexRating = 275;
    }

    //Total Paddle Length

    var totalPaddleLength;

    if (gender === 'Male') {

      if (Weight === '100') {
       totalPaddleLength = 70;
     }
     else if (Weight === '125') {
       totalPaddleLength = 80;
     }
     else if (Weight === '150') {
       totalPaddleLength = 85;
     }
     else if (Weight === '180') {
       totalPaddleLength = 90;
     }
     else if (Weight === '210') {
       totalPaddleLength = 90;
     }
     else if (Weight === '250') {
       totalPaddleLength = 95;
     }
     else if (Weight === '251') {
       totalPaddleLength = 95;
     }
     else if (boardThickness === 'Medium') {
      totalPaddleLength = totalPaddleLength+1;
    }
    else if (boardThickness === 'Thick') {
      totalPaddleLength = totalPaddleLength+2;
    }

  }
  else if (gender === 'Female') {
    if (Weight === '100') {
     totalPaddleLength = 70;
   }
   else if (Weight === '125') {
     totalPaddleLength = 70;
   }
   else if (Weight === '150') {
     totalPaddleLength = 80;
   }
   else if (Weight === '180') {
     totalPaddleLength = 85;
   }
   else if (Weight === '210') {
     totalPaddleLength = 85;
   }
   else if (Weight === '250') {
     totalPaddleLength = 90;
   }
   else if (Weight === '251') {
     totalPaddleLength = 90;
   }
   else if (boardThickness === 'Medium') {
    totalPaddleLength = totalPaddleLength+1;
  }
  else if (boardThickness === 'Thick') {
    totalPaddleLength = totalPaddleLength+2;
  }
}

var handleSize;

if (handSize === '< 4.5"') {
  handleSize = 'small';
  console.log(handleSize);
}
else if (handSize === '4.5" - 5.5"') {
  handSize = 'medium';
  console.log(handleSize);
}
else if (handSize === '5.5" - 6.5"') {
  handSize = 'medium';
  console.log(handleSize);
}
else if (handSize === '6.5" +') {
  handSize = 'large';
  console.log(handleSize);
}

function add_items_to_cart() {

//Shaft
jQuery.get( "http://staging.inspyregroup.com/aztek/?add-to-cart=25&variation_id=48&attribute_pa_plength="+totalPaddleLength+"&attribute_pa_flex="+FlexRating);

//HandleSize
jQuery.get( "http://staging.inspyregroup.com/aztek/?add-to-cart=30&variation_id=52&attribute_pa_hsize="+handSize);

//Blade
if (SurfBlade === true) {
  jQuery.get( "http://staging.inspyregroup.com/aztek/?add-to-cart=24&variation_id=49&attribute_pa_surf-flex="+FlexRating);
  console.log('added');
}
else if (RaceBlade === true) {
  jQuery.get( "http://staging.inspyregroup.com/aztek/?add-to-cart=19&variation_id=51&attribute_pa_race-flex="+FlexRating);
  console.log('added');
}
else if (RaceBlade === true && SurfBlade === true) {
  jQuery.get( "http://staging.inspyregroup.com/aztek/?add-to-cart=24&variation_id=49&attribute_pa_surf-flex="+FlexRating);
  jQuery.get( "http://staging.inspyregroup.com/aztek/?add-to-cart=19&variation_id=51&attribute_pa_race-flex="+FlexRating);
  console.log('added x2');
}

}

function changeResults() {
  jQuery('.bladeType').append(intendedUse);
  jQuery('.bladeSize').append(FlexRating);
  jQuery('.paddleLength').append(totalPaddleLength);
  jQuery('.flexRating').append(FlexRating);
  jQuery('.handleSize').append(handleSize);
}




});