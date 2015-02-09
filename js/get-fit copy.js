jQuery(document).ready(function(){

//Variables

var gender;
var age; 
var height;
var weight;
var handSize;
var boardThickness;
var skillLevel;
var paddleStyle;

var allVars = [];

//Recomendation Variables
var SurfBlade;
var RaceBlade;

var Surf = false;
var Flat_Water = false;
var Race = false;

//Input Mapping and Logging

//Gender Input Map

jQuery('.male').click(function(){
	if (gender != 'male') {
		gender = 'male';
	}
	else {
		gender = undefined;
	}
	validation();
});

jQuery('.female').click(function(){
	if (gender != 'female') {
		gender = 'female';
	}
	else {
		gender = undefined;
	}
	validation();
});

//Age Input Map

jQuery('.age .toolTip li').click(function(){
	age = jQuery(this).val();
	validation();
});

//Height Input Map

jQuery('.height .toolTip li').click(function(){
	height = jQuery(this).val();
	validation();
});

//weight Input Map

jQuery('.weight .toolTip li').click(function(){
	weight = jQuery(this).val();
	validation();
});

//Hand Size Input Map

jQuery('.hand-size .toolTip li').click(function(){
	handSize = jQuery(this).text();
	validation();
});

//Intended Use Input Map

jQuery('.surf').click(function(){
	if (Surf == false) {
		Surf = true;
	}
	else {
		Surf = false;
	}
	validation();
});

jQuery('.flat-water').click(function(){
	if (Flat_Water == false) {
		Flat_Water = true;
	}
	else {
		Flat_Water = false;
	}
	validation();
});

jQuery('.race').click(function(){
	if (Race == false) {
		Race = true;
	}
	else {
		Race = false;
	}
	validation();
});

//Board Thickness Input Map

jQuery('.board-thickness button').click(function(){
	if (boardThickness != jQuery(this).val()){
		boardThickness = jQuery(this).val();
	}
	else {
		boardThickness = undefined;
	}
	validation();
});


//Skill Level Input Map (Also set the values on load just because...)

skillLevel =  jQuery('input[name=skilllvl]').val();
paddleStyle =  jQuery('input[name=paddlestyle]').val();

jQuery('input[name=skilllvl]').change(function(){
	skillLevel = jQuery(this).val();
	validation();
});

//Paddle Style Input Map

jQuery('input[name=paddlestyle]').change(function(){
	paddleStyle = jQuery(this).val();
	validation();
});

//Calculation Functions

function calculateHandleSize() {

	var handleSize;

	if (handSize == '< 3"') {
		handleSize = 'Small';
		return handleSize;
	}
	else if (handSize == '3" - 3 ½') {
		handleSize = 'Medium';
		return handleSize;
	}
	else if (handSize == '> 3 ½"') {
		handleSize = 'Large';
		return handleSize;
	}
	else {
		console.log('Something is wrong with handle size calculation.');
	}
}

function calculateTotalPaddleLength() {

	var totalPaddleLength;

	//Calculate the Base Length based on Paddlers Height

	if (height <= 45) {

		if (Race == true) {
			totalPaddleLength = 58;
		}
		else if (Surf == true) {
			totalPaddleLength = 58;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 58;
		}	

	}

	if (height == 46) {

		if (Race == true) {
			totalPaddleLength = 59;
		}
		else if (Surf == true) {
			totalPaddleLength = 58;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 60;
		}	

	}

	if (height == 47) {

		if (Race == true) {
			totalPaddleLength = 61;
		}
		else if (Surf == true) {
			totalPaddleLength = 59;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 60;
		}	

	}

	if (height == 48) {

		if (Race == true) {
			totalPaddleLength = 62;
		}
		else if (Surf == true) {
			totalPaddleLength = 60;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 63;
		}	

	}

	if (height == 49) {

		if (Race == true) {
			totalPaddleLength = 63;
		}
		else if (Surf == true) {
			totalPaddleLength = 62;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 64;
		}	

	}

	if (height == 410) {

		if (Race == true) {
			totalPaddleLength = 64;
		}
		else if (Surf == true) {
			totalPaddleLength = 63;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 66;
		}	

	}

	if (height == 411) {

		if (Race == true) {
			totalPaddleLength = 65;
		}
		else if (Surf == true) {
			totalPaddleLength = 64;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 67;
		}	

	}

	if (height == 5) {

		if (Race == true) {
			totalPaddleLength = 65;
		}
		else if (Surf == true) {
			totalPaddleLength = 64;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 67;
		}	

	}
	else if (height == 51) {

		if (Race == true) {
			totalPaddleLength = 67;
		}
		else if (Surf == true) {
			totalPaddleLength = 66;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 69;
		}	

	}

	else if (height == 52) {

		if (Race == true) {
			totalPaddleLength = 68;
		}
		else if (Surf == true) {
			totalPaddleLength = 70;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 70;
		}	

	}

	else if (height == 53) {

		if (Race == true) {
			totalPaddleLength = 69;
		}
		else if (Surf == true) {
			totalPaddleLength = 68;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 71;
		}	

	}

	else if (height == 54) {

		if (Race == true) {
			totalPaddleLength = 70;
		}
		else if (Surf == true) {
			totalPaddleLength = 69;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 72;
		}	

	}

	else if (height == 55) {

		if (Race == true) {
			totalPaddleLength = 72;
		}
		else if (Surf == true) {
			totalPaddleLength = 70;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 73;
		}	

	}

	else if (height == 56) {

		if (Race == true) {
			totalPaddleLength = 73;
		}
		else if (Surf == true) {
			totalPaddleLength = 71;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 75;
		}	

	}

	else if (height == 57) {

		if (Race == true) {
			totalPaddleLength = 74;
		}
		else if (Surf == true) {
			totalPaddleLength = 72;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 76;
		}	

	}

	else if (height == 58) {

		if (Race == true) {
			totalPaddleLength = 75;
		}
		else if (Surf == true) {
			totalPaddleLength = 73;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 77;
		}	

	}

	else if (height == 59) {

		if (Race == true) {
			totalPaddleLength = 76;
		}
		else if (Surf == true) {
			totalPaddleLength = 75;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 78;
		}	

	}

	else if (height == 510) {

		if (Race == true) {
			totalPaddleLength = 77;
		}
		else if (Surf == true) {
			totalPaddleLength = 76;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 79;
		}	

	}

	else if (height == 511) {

		if (Race == true) {
			totalPaddleLength = 78;
		}
		else if (Surf == true) {
			totalPaddleLength = 77;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 80;
		}	

	}

	else if (height == 6) {

		if (Race == true) {
			totalPaddleLength = 79;
		}
		else if (Surf == true) {
			totalPaddleLength = 78;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 81;
		}	

	}

	else if (height == 61) {

		if (Race == true) {
			totalPaddleLength = 80;
		}
		else if (Surf == true) {
			totalPaddleLength = 79;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 82;
		}	

	}

	else if (height == 62) {

		if (Race == true) {
			totalPaddleLength = 81;
		}
		else if (Surf == true) {
			totalPaddleLength = 80;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 84;
		}	

	}

	else if (height == 63) {

		if (Race == true) {
			totalPaddleLength = 83;
		}
		else if (Surf == true) {
			totalPaddleLength = 81;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 85;
		}	

	}

	else if (height == 64) {

		if (Race == true) {
			totalPaddleLength = 84;
		}
		else if (Surf == true) {
			totalPaddleLength = 82;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 86;
		}	

	}

	else if (height == 65) {

		if (Race == true) {
			totalPaddleLength = 85;
		}
		else if (Surf == true) {
			totalPaddleLength = 83;
		}
		else if (Flat_Water == true) {
			totalPaddleLength = 87;
		}	

	}

	//ADD LENGTH BASED ON BOARD THICKNESS

	if (boardThickness == 'thin') {
		totalPaddleLength += 1;
	}
	else if (boardThickness == 'thick') {
		totalPaddleLength += 2;
	}

	//DONT RECOMEND A PADDLE THAT WE CANT BUILD (THE MAX PADDLE LENGTH IS 86)

	if (totalPaddleLength > 86) {
		totalPaddleLength = 86;
	}

	return totalPaddleLength;
}

function calculateBladeSize() {	

	var BladeSize;

	//TO DO USE BOARD THICKNESS IN CALCULATION

	if (gender == 'male') {
		if (weight == '100') {
			BladeSize = 70;
			return BladeSize;
		}
		else if (weight == '125') {
			BladeSize = 80;
			return BladeSize;
		}
		else if (weight == '150') {
			BladeSize = 85;
			return BladeSize;
		}
		else if (weight == '180') {
			BladeSize = 90;
			return BladeSize;
		}
		else if (weight == '210') {
			BladeSize = 90;
			return BladeSize;
		}
		else if (weight == '250') {
			BladeSize = 95;
			return BladeSize;
		}
		else if (weight == '251') {
			BladeSize = 95;
			return BladeSize;
		}
	}
	else if (gender == 'female') {
		if (weight == '100') {
			BladeSize = 70;
			return BladeSize;
		}
		else if (weight == '125') {
			BladeSize = 70;
			return BladeSize;
		}
		else if (weight == '150') {
			BladeSize = 80;
			return BladeSize;
		}
		else if (weight == '180') {
			BladeSize = 85;
			return BladeSize;
		}
		else if (weight == '210') {
			BladeSize = 85;
			return BladeSize;
		}
		else if (weight == '250') {
			BladeSize = 90;
			return BladeSize;
		}
		else if (weight == '251') {
			BladeSize = 90;
			return BladeSize;
		}
	}
	else {
	}
}

function calculateBladeTypes() {

	if (Race == true && Surf == true && Flat_Water == true) {
		return 'Race and Surf';
	}
	else if (Race == true) {
		return 'Race';
	}
	else {
		return 'Surf';
	}
}

function calculateShaftFlex() {
	var FlexRating;

	if (skillLevel == 1){
		FlexRating = 225;
		return FlexRating;
	}
	else if (skillLevel == 1 && paddleStyle == 3) {
		FlexRating = 250;
		return FlexRating;
	}
	else if (skillLevel == 2) {
		FlexRating = 225;
		return FlexRating;
	}
	else if (skillLevel == 2 && paddleStyle == 2) {
		FlexRating = 250;
		return FlexRating;
	}
	else if (skillLevel == 2 && paddleStyle == 3) {
		FlexRating = 275;
		return FlexRating;
	}
	else if (skillLevel == 3) {
		FlexRating = 250;
		return FlexRating;
	}
	else if (skillLevel == 3 && paddleStyle == 2) {
		FlexRating = 250;
		return FlexRating;
	}
	else if (skillLevel == 3 && paddleStyle == 3) {
		FlexRating = 275;
		return FlexRating;
	}
}

//Screen Progression

var currentScreen = 0;
var totalScreens = jQuery(".screen").length;

jQuery('.ui-bar button').click(function(){
	setScreen();
	jQuery("html, body").animate({ scrollTop: 0 }, "slow");
});

function setScreen() {
	    //Progression to the next screen
	    currentScreen++;
	    jQuery('.screen.active').fadeOut(function(){
	    	jQuery('.screen.active').removeClass('active');
	    	jQuery( '.screen:eq('+currentScreen+')' ).show(function(){
	    		jQuery(this).addClass('active');
	    	});;

         //Progress Bar functions

         jQuery('.progress-bar div.current').removeClass('current');
         jQuery('.progress-bar div:eq('+currentScreen+')').addClass('current');

     });
          //Fade the button out until security is validated also dont hide for skill lvl
          
          jQuery(this).hide();
          console.log(currentScreen);
          validation();
      }


//Main functions


function validation() {
        //CURRENT SCREEN = 0
        if (currentScreen == 0) {
        	if (gender != undefined && age != undefined && height != undefined && weight != undefined) {
        		jQuery('.ui-bar button').fadeIn();
        	}
        	else {
        		jQuery('.ui-bar button').hide();
        	}
        }
        else if (currentScreen == 1) {
	         //CURRENT SCREEN = 1
	         if (handSize != undefined) {
	         	jQuery('.ui-bar button').fadeIn();
	         }
	         else {
	         	jQuery('.ui-bar button').hide();
	         }
	     }
	     else if (currentScreen == 2) {
	        //CURRENT SCREEN = 2
	        if (Race != false || Surf != false || Flat_Water != false) {
	        	jQuery('.ui-bar button').fadeIn();
	        }
	        else {
	        	jQuery('.ui-bar button').hide();
	        }
	    }
	    else if (currentScreen == 3) {
	         //CURRENT SCREEN = 3
	         if (boardThickness != undefined) {
	         	jQuery('.ui-bar button').fadeIn();
	         }
	         else {
	         	jQuery('.ui-bar button').hide();
	         }
	     }
	     else if (currentScreen == 4) {
	         //CURRENT SCREEN = 4
	         skillLevel = 2;
	         paddleStyle = 2;
	         if (skillLevel != undefined && paddleStyle != undefined) {
	         	change_results_page();
	         }
	         else {
	         	jQuery('.ui-bar button').hide();
	         }
	     }
	     else if (currentScreen == 7) {
	     	jQuery('.fit-config').hide();
	     	jQuery('.ui-bar').hide();
	     }
	     jQuery('.progress-bar div').each(function(index) {

	     	if (index < currentScreen) {
	     		jQuery(this).addClass('finished');
	     	}

	     });

	     jQuery('.progress-bar .finished').click(function(){
	     	currentScreen = jQuery(this).index() - 1;
	     	setScreen();
	     });
	 }

	 function change_results_page() {

	 	//Complete Paddle Recomendation

	 	jQuery('.complete .bladeType').empty().append(calculateBladeTypes());
	 	jQuery('.complete .bladeSize').empty().append(calculateBladeSize());
	 	jQuery('.complete .paddleLength').empty().append(calculateTotalPaddleLength());
	 	jQuery('.complete .flexRating').empty().append(calculateShaftFlex());
	 	jQuery('.complete .handleSize').empty().append(calculateHandleSize());

	 	var surfPaddleImgURL = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/surf-paddle-display.png';
	 	var racePaddleImgURL = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/race-paddle-display.png';
	 	var raceBladeURL = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/raceb.png';
	 	
	 	if (calculateBladeTypes() == 'Race') {
	 		jQuery('.complete-paddle-img').attr('src',racePaddleImgURL);
	 	}
	 	if (calculateBladeTypes() == 'Surf') {
	 		jQuery('.complete-paddle-img').attr('src',surfPaddleImgURL);
	 	}

	 	if (calculateBladeTypes() == 'Race and Surf') {
	 		jQuery('.complete .bladeType').empty().append('Surf');
	 		jQuery('.complete-paddle-img').attr('src',surfPaddleImgURL);
	 		jQuery('.paddle-blade').attr('src',raceBladeURL);
	 		jQuery('.added-blade').show();
	 		jQuery('.added-blade .bladeType').empty().append('Race');
	 		if (calculateBladeSize() <= 80) {
	 			jQuery('.added-blade .bladeSize').empty().append(80);
	 		}
	 	}

	 }

	 function ResetUIChanges() {

 	//Gender

 	if (gender == 'male') {
 		var malehoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/male-selected.png';
 		jQuery('.male').find('img').attr('src', malehoverStateUrl);
 	}
 	else if (gender == 'female') {
 		var femalehoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/female-selected.png';
 		jQuery('.female').find('img').attr('src', femalehoverStateUrl);
 	}

 	//Return Value to Age - Height - Weight Inputs

 	jQuery('.age input').val(age);
 	jQuery('.weight input').val(weight);
 	jQuery('.height input').val(height);

	//Return Value to Hand Size Input

	jQuery('.hand-size input').val(handSize);

	//Return Intended Use Options to their former selves & also convert the values back to booleans

	if (Surf == 'true') {
		Surf = true;
		var hoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/surf-selected.png';
		jQuery('.surf').find('img').attr('src', hoverStateUrl);
	}
	else {
		Surf = false;
	}
	
	if (Flat_Water == 'true') {
		Flat_Water = true;
		var hoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/flat-water-selected.png';
		jQuery('.flat-water').find('img').attr('src', hoverStateUrl);
	}
	else {
		Flat_Water = false;
	}

	if (Race == 'true') {
		Race = true;
		var hoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/race-selected.png';
		jQuery('.race').find('img').attr('src', hoverStateUrl);
	}
	else {
		Race = false;
	}

	//Return Board Thickness to its former value

	if (boardThickness == 'thin') {
		var hoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/surf-boardtype-selected.png';
		jQuery('.board-thickness button[value=thin]').find('img').attr('src', hoverStateUrl);
	}
	else if (boardThickness == 'medium') {
		var hoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/race-boardtype-selected.png';
		jQuery('.board-thickness button[value=medium]').find('img').attr('src', hoverStateUrl);
	}
	else if (boardThickness == 'thick') {
		var hoverStateUrl = 'http://'+window.location.hostname+'/wp-content/themes/aztek/images/inflatable-boardtype-selected.png';
		jQuery('.board-thickness button[value=thick]').find('img').attr('src', hoverStateUrl);
	}

	//Return Skill and Style to their former values

	jQuery('input[name=skilllvl]').val(skillLevel);

	if (skillLevel == 1) {
		jQuery('input[name=skilllvl]').parent().find('.skill-level-slider .ui-slider-handle').css('left', '0%');
	}
	else if (skillLevel == 2) {
		jQuery('input[name=skilllvl]').parent().find('.skill-level-slider .ui-slider-handle').css('left', '50%');
	}
	else if (skillLevel == 3) {
		jQuery('input[name=skilllvl]').parent().find('.skill-level-slider .ui-slider-handle').css('left', '100%');
	}

	jQuery('input[name=paddlestyle]').val(skillLevel);

	if (paddleStyle == 1) {
		jQuery('input[name=paddlestyle]').parent().find('.skill-level-slider .ui-slider-handle').css('left', '0%');
	}
	else if (paddleStyle == 2) {
		jQuery('input[name=paddlestyle]').parent().find('.skill-level-slider .ui-slider-handle').css('left', '50%');
	}
	else if (paddleStyle == 3) {
		jQuery('input[name=paddlestyle]').parent().find('.skill-level-slider .ui-slider-handle').css('left', '100%');
	}
}

function add_to_cart(isCompletePaddle) {

	var completePaddle = isCompletePaddle;

	var baseURL = 'http://'+window.location.hostname;
	var actionURL = '?add-to-cart=';
	var productID;

	var shaftProductID = 25;
	var bladeProductID = 24;
	var handleProductID = 30;

	var shaftVariationID;
	var bladeVariationID;
	var handleVariationID;

	//Get Singular Items Attributes

	var pbladeType = jQuery('.c-paddle-add').parent().parent().find('.bladeType').text();
	var pbladeSize = jQuery('.c-paddle-add').parent().parent().find('.bladeSize').text();

	var ptotalpaddleLength = jQuery('.c-paddle-add').parent().parent().find('.paddleLength').text();

	var pshaftFlex = jQuery('.c-paddle-add').parent().parent().find('.flexRating').text();

	var phandleSize = jQuery('.c-paddle-add').parent().parent().find('.handleSize').text();

	//Determine if the Product is a complete paddle or a blade

	if (completePaddle == true) {

		//Add the shaft

		//Set the Shaft Variation ID

		if (pshaftFlex == '225') {
			shaftVariationID = 42;
		}
		else if (pshaftFlex == '250') {
			shaftVariationID = 264;
		}
		else if (pshaftFlex == '275') {
			shaftVariationID = 265;
		}

		var shaftURL = baseURL+actionURL+shaftProductID+'&variation_id='+shaftVariationID+'&attribute_pa_plength='+ptotalpaddleLength+'&attribute_pa_flex='+pshaftFlex;

		//Add the Blade

		//Set the Blade Variation ID

		if (pbladeType == 'Surf') {
			if (pbladeSize == 70) {
				bladeVariationID = 72;
			}
			else if (pbladeSize == 80) {
				bladeVariationID = 73;
			}
			else if (pbladeSize == 85) {
				bladeVariationID = 257;
			}
			else if (pbladeSize == 90) {
				bladeVariationID = 258;
			}
			else if (pbladeSize == 95) {
				bladeVariationID = 263;
			}
		}
		else if (pbladeType == 'Race') {
			if (pbladeSize <= 80) {
				bladeVariationID = 260;
				pbladeSize = 80;
			}
			else if (pbladeSize == 85) {
				bladeVariationID = 261;
			}
			else if (pbladeSize == 90) {
				bladeVariationID = 262;
			}
			else if (pbladeSize == 95) {
				bladeVariationID = 263;
			}
		}

		var bladeURL = baseURL+actionURL+bladeProductID+'&variation_id='+bladeVariationID+'&attribute_pa_blade-type='+pbladeType+'&attribute_pa_bsize='+pbladeSize;

		//Add the Handle

		if (phandleSize == 'Large') {
			handleVariationID = 52;
		}
		else if (phandleSize == 'Medium') {
			handleVariationID = 53;
		}
		else if (phandleSize == 'Small') {
			handleVariationID = 54;
		}

		var handleURL = baseURL+actionURL+handleProductID+'&variation_id='+handleVariationID+'&attribute_pa_hsize='+phandleSize;
		
		saveToDatabase();
		displayMessage('Configuring paddle, please wait!');

		jQuery.get(baseURL+'?clear-cart').done(function( data ) {
			jQuery.get(bladeURL).done(function( data ) {
				jQuery.get(handleURL).done(function(data){
					jQuery.get(shaftURL).done(function(data){
						window.location.href = 'http://aztekpaddles.com/cart';
					});
				});
			});
		});

	}
	else {
		pbladeType = jQuery('.added-blade li .bladeType').text();
		pbladeSize = jQuery('.added-blade li .bladeSize').text();

		if (pbladeType == 'Surf') {
			if (pbladeSize == 70) {
				bladeVariationID = 72;
			}
			else if (pbladeSize == 80) {
				bladeVariationID = 73;
			}
			else if (pbladeSize == 85) {
				bladeVariationID = 257;
			}
			else if (pbladeSize == 90) {
				bladeVariationID = 258;
			}
			else if (pbladeSize == 95) {
				bladeVariationID = 263;
			}
		}
		else if (pbladeType == 'Race') {
			if (pbladeSize <= 80) {
				bladeVariationID = 260;
				pbladeSize = 80;
			}
			else if (pbladeSize == 85) {
				bladeVariationID = 261;
			}
			else if (pbladeSize == 90) {
				bladeVariationID = 262;
			}
			else if (pbladeSize == 95) {
				bladeVariationID = 263;
			}
		}

		var bladeURL = baseURL+actionURL+bladeProductID+'&variation_id='+bladeVariationID+'&attribute_pa_blade-type='+pbladeType+'&attribute_pa_bsize='+pbladeSize;
		jQuery.get(bladeURL).done(function( data ) {
			window.location.href = 'http://aztekpaddles.com/cart';
		});
	}




}

function add_all_to_cart() {

}

function loadFromDataBase() {
	var url = 'http://'+window.location.hostname+'?load_fit=true';

	jQuery.get(url, function( data ) {
		if (data != '') {
			allVars = data.split(',');

			gender = allVars[0];
			age = allVars[1];
			height = allVars[2];
			weight = allVars[3];
			handSize = allVars[4];
			Surf = allVars[5];
			Flat_Water = allVars[6];
			Race = allVars[7];
			boardThickness = allVars[8];
			skillLevel = allVars[9];
			paddleStyle = allVars[10];

			validation();
			ResetUIChanges();
		}
		else {
			//displayLogin();
		}
	});

}

loadFromDataBase();

function saveToDatabase() {

	var pbladeType = jQuery('.c-paddle-add').parent().parent().find('.bladeType').text();
	var pbladeSize = jQuery('.c-paddle-add').parent().parent().find('.bladeSize').text();

	var url = 'http://'+window.location.hostname;
	allVars = [];
	allVars.push(gender);
	allVars.push(age);
	allVars.push(height);
	allVars.push(weight);
	allVars.push(handSize);
	allVars.push(Surf);
	allVars.push(Flat_Water);
	allVars.push(Race);
	allVars.push(boardThickness);
	allVars.push(skillLevel);
	allVars.push(paddleStyle);
	allVars.push(calculateTotalPaddleLength());
	allVars.push(pbladeType);
	allVars.push(pbladeSize);
	allVars = allVars.toString();
	jQuery.get( url, { save_fit: "true", fit_profile_one: allVars, fit_profile_gender: gender, fit_profile_age: age, fit_profile_height: height, fit_profile_weight: weight, fit_profile_hsize: handSize, fit_profile_boardthickness: boardThickness, fit_profile_skilllvl: skillLevel, fit_profile_paddlestyle: paddleStyle }, function( data ) {
		if (data != '') {

		}
		else {
			displayLogin();
		}
		displayMessage('Your fit profile has been saved!');
	});
}

function displayMessage(msg) {
	jQuery('.msg-bar .container').empty().prepend('<p>'+msg+'</p>');
	jQuery('.msg-bar').fadeIn('fast', function(){
		jQuery('.msg-bar').delay(3000).fadeOut('fast');
	});
}

function resetData() {
	gender = undefined;
	age = undefined; 
	height = undefined;
	weight = undefined;
	handSize = undefined;
	boardThickness = undefined;
	skillLevel = undefined;
	paddleStyle = undefined;

	allVars = [];

	SurfBlade = false;
	RaceBlade = false;

	Surf = false;
	Flat_Water = false;
	Race = false;
}

jQuery('.savefit').click(function(event){
	event.preventDefault();
	saveToDatabase();
});

function displayLogin() {
	jQuery('.login').fadeToggle();
	jQuery('.lightbox-bg').fadeToggle();
}

jQuery('.actions .loadRegForm').click(function(){
	window.location.href = 'http://aztekpaddles.com/my-account';
});

jQuery('.contButton').click(function(){
	displayLogin();
	resetData();
});

jQuery('.login button.close').click(function(){
	displayLogin();
});

jQuery('.c-paddle-add').click(function(event){
	event.preventDefault(event);
	add_to_cart(true);
});

jQuery('.s-product-add').click(function(event){
	event.preventDefault(event);
	add_to_cart(false);
});




//Debugger Functions

});