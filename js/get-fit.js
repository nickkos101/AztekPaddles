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
	console.log('Gender has been set to: '+gender);
});

jQuery('.female').click(function(){
	if (gender != 'female') {
		gender = 'female';
	}
	else {
		gender = undefined;
	}
	validation();
	console.log('Gender has been set to: '+gender);
});

//Age Input Map

jQuery('.age .toolTip li').click(function(){
	age = jQuery(this).val();
	validation();
	console.log('Age has been set to: '+age);
});

//Height Input Map

jQuery('.height .toolTip li').click(function(){
	height = jQuery(this).val();
	validation();
	console.log('Height has been set to: '+height);
});

//weight Input Map

jQuery('.weight .toolTip li').click(function(){
	weight = jQuery(this).val();
	validation();
	console.log('weight has been set to: '+weight);
});

//Hand Size Input Map

jQuery('.hand-size .toolTip li').click(function(){
	handSize = jQuery(this).text();
	validation();
	console.log('Hand Size has been set to: '+handSize);
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
	console.log('Surf is'+Surf);
});

jQuery('.flat-water').click(function(){
	if (Flat_Water == false) {
		Flat_Water = true;
	}
	else {
		Flat_Water = false;
	}
	validation();
	console.log('Flat_Water is'+Flat_Water);
});

jQuery('.race').click(function(){
	if (Race == false) {
		Race = true;
	}
	else {
		Race = false;
	}
	validation();
	console.log('Race is'+Race);
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
	console.log('Board Thickness has been set to: '+boardThickness);
});


//Skill Level Input Map

jQuery('input[name=skilllvl]').change(function(){
	skillLevel = jQuery(this).val();
	validation();
});

//Paddle Style Input Map

jQuery('input[name=paddlestyle]').change(function(){
	paddleStyle = jQuery(this).val();
	validation();
	console.log('Paddle Style has been set to: '+paddleStyle);
});



//Calculation Functions

function calculateHandleSize() {

	var handleSize;

	if (handSize == '< 4.5"') {
		handleSize = 'Small';
		return handleSize;
	}
	else if (handSize == '4.5" - 5.5"') {
		handleSize = 'Medium';
		return handleSize;
	}
	else if (handSize == '5.5" - 6.5"') {
		handleSize = 'Medium';
		return handleSize;
	}
	else if (handSize == '6.5" +') {
		handleSize = 'Large';
		return handleSize;
	}
	else {
		console.log('Something is wrong with handle size calculation.');
	}
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
		console.log('Something is wrong with Blade Size Calculation');
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
});

function setScreen() {
	    //Progression to the next screen
	    currentScreen++;
	    jQuery('.screen.active').fadeOut(function(){
	    	jQuery('.screen.active').removeClass('active');
	    	console.log(currentScreen);
	    	jQuery( '.screen:eq('+currentScreen+')' ).show(function(){
	    		jQuery(this).addClass('active');
	    	});;

         //Progress Bar functions

         jQuery('.progress-bar div.current').removeClass('current');
         jQuery('.progress-bar div:eq('+currentScreen+')').addClass('current');

     });
          //Fade the button out until security is validated
          jQuery(this).hide();
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
	         if (skillLevel != undefined && paddleStyle != undefined) {
	         	jQuery('.ui-bar button').fadeIn();
	         	change_results_page();
	         }
	         else {
	         	jQuery('.ui-bar button').hide();
	         }
	     }
	     else if (currentScreen == 5) {
	     	jQuery('.fit-config').hide();
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

	 	jQuery('.bladeType').empty().append(calculateBladeTypes());
	 	jQuery('.bladeSize').empty().append(calculateBladeSize());
	 	jQuery('.paddleLength').empty().append(calculateBladeSize());
	 	jQuery('.flexRating').empty().append(calculateShaftFlex());
	 	jQuery('.handleSize').empty().append(calculateHandleSize());

	 }

	 function ResetUIChanges() {

 	//Gender

 	if (gender == 'male') {
 		var malehoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/male-selected.png';
 		jQuery('.male').find('img').attr('src', malehoverStateUrl);
 	}
 	else if (gender == 'female') {
 		var femalehoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/female-selected.png';
 		jQuery('.female').find('img').attr('src', femalehoverStateUrl);
 	}

 	//Return Value to Age - Height - Weight Inputs

 	jQuery('.age input').val(age);
 	jQuery('.weight input').val(weight);
 	jQuery('.height input').val(weight);

	//Return Value to Hand Size Input

	jQuery('.hand-size input').val(handSize);

	//Return Intended Use Options to their former selves & also convert the values back to booleans

	if (Surf == 'true') {
		Surf = true;
		var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf-selected.png';
		jQuery('.surf').find('img').attr('src', hoverStateUrl);
	}
	else {
		Surf = false;
	}
	
	if (Flat_Water == 'true') {
		Flat_Water = true;
		var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/flat-water-selected.png';
		jQuery('.flat-water').find('img').attr('src', hoverStateUrl);
	}
	else {
		Flat_Water = false;
	}

	if (Race == 'true') {
		Race = true;
		var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race-selected.png';
		jQuery('.race').find('img').attr('src', hoverStateUrl);
	}
	else {
		Race = false;
	}

	//Return Board Thickness to its former value

	if (boardThickness == 'thin') {
		var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/surf-boardtype-selected.png';
		jQuery('.board-thickness button[value=thin]').find('img').attr('src', hoverStateUrl);
	}
	else if (boardThickness == 'medium') {
		var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/race-boardtype-selected.png';
		jQuery('.board-thickness button[value=medium]').find('img').attr('src', hoverStateUrl);
	}
	else if (boardThickness == 'thick') {
		var hoverStateUrl = 'http://'+window.location.hostname+'/aztek/wp-content/themes/aztek/images/inflatable-boardtype-selected.png';
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

function add_to_cart() {

}

function add_all_to_cart() {

}

function loadFromDataBase() {
	var url = "http://staging.inspyregroup.com/aztek?load_fit=true";

	jQuery.get(url, function( data ) {
		if (data != '') {
			allVars = data.split(',');
			console.log(allVars);

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
			console.log(data);
			ResetUIChanges();
		}
		else {
			displayLogin();
		}
	});

}

loadFromDataBase();

function saveToDatabase() {

	var url = "http://staging.inspyregroup.com/aztek";
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
	console.log(allVars);
	allVars = allVars.toString();
	jQuery.get( url, { save_fit: "true", fit_profile_one: allVars }, function( data ) {
		if (data != '') {

		}
		else {
			displayLogin();
		}
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

jQuery('.savefit').click(function(){
	event.preventDefault();
	saveToDatabase();
});

function displayLogin() {
	jQuery('.login').fadeToggle();
	jQuery('.lightbox-bg').fadeToggle();
}

jQuery('.actions .loadRegForm').click(function(){
	jQuery('.actions').fadeOut();
	jQuery('.loginform').fadeOut(function(){
		jQuery('.registerform').fadeIn();
	});
});

jQuery('.contButton').click(function(){
	displayLogin();
	resetData();
});

jQuery('.login button.close').click(function(){
	displayLogin();
});


//Debugger Functions

});