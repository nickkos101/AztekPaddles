jQuery(document).ready(function(){
	jQuery( "select" ).selectmenu();

	jQuery(".blades .ui-selectmenu-button").tooltip({items: "span", position: {at: "left top-200"}, content: 'The blades are shaped according to the use, for maximum control in the surf or maximum speed for the competetive.'});
	jQuery(".shafts .ui-selectmenu-button").tooltip({items: "span", position: {at: "left top-200"}, content: 'The shaft offers different flexibility and stiffness ratings for maximum speed and control.'});
	jQuery(".handles .ui-selectmenu-button").tooltip({items: "span", position: {at: "left top-200"}, content: 'The handles are designed to give the paddle an additional element of control. They come in three sizes determined by average hand sizes.'});
	jQuery(".sizes .ui-selectmenu-button").tooltip({items: "span", position: {at: "left top-200"}, content: 'A long paddle can provide reach and power but will be a test of your strength. A short paddle might give you some speed and control at the expense of reach and power.'});


	function add_to_cart() {
		//PRODUCT DATA
		var baseURL = 'http://'+window.location.hostname;
		var actionURL = '?add-to-cart=';
		var productID = 498;

			//DETERMINE BLADE TYPE
			if(jQuery('.blades select').val().indexOf('surf') >= 0){
				bladeVariationID = 499;
				var pbladeType = 'Surf';
			}
			else if (jQuery('.blades select').val().indexOf('race') >= 0) {
				bladeVariationID = 500;
				var pbladeType = 'Race';
			}

			//DETERMINE BLADE SIZE
			if(jQuery('.blades select').val().indexOf('95') >= 0) {
				var pbladeSize = 95;
			}
			else if (jQuery('.blades select').val().indexOf('90') >= 0) {
				var pbladeSize = 90;
			}
			else if (jQuery('.blades select').val().indexOf('85') >= 0) {
				var pbladeSize = 85;
			}
			else if (jQuery('.blades select').val().indexOf('80') >= 0) {
				var pbladeSize = 80;
			}
			else if (jQuery('.blades select').val().indexOf('70') >= 0) {
				var pbladeSize = 70;
			}

			//DETERMINE PADDLE LENGTH
			var ptotalpaddleLength = jQuery('.sizes select').val();
			//DETERMINE SHAFT FLEX
			var pshaftFlex = jQuery('.shafts select').val();
			//DETERMINE HANDLE SIZE
			var phandleSize = jQuery('.handles select').val();

			//PUT TOGETHER THE ADD TO CART URL
			var completeURL = baseURL+actionURL+productID+'&variation_id='+bladeVariationID+'&attribute_pa_plength='+ptotalpaddleLength+'&attribute_pa_blade-type='+pbladeType+'&attribute_pa_bsize='+pbladeSize+'&attribute_pa_flex='+pshaftFlex+'&attribute_pa_hsize='+phandleSize;

			//RUN TWO GET REQUESTS ONE TO ADD TO CART THE OTHER TO REDIRECT TO CHECKOUT
			jQuery.get(completeURL).done(function( data ) {
				window.location.href = 'http://aztekpaddles.com/checkout';
			});

			console.log('complete');

		}

	});