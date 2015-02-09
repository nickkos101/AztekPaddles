<?php

function returnBladeCuttAttributes($totalPaddleLength,$pbladeType,$bladeSize) {
	
	if ($pbladeType == 'Surf') {
		$isSurfBlade = true;
	}
	else if ($pbladeType == 'Race') {
		$isRaceBlade = true;
	}

	if ($isSurfBlade == true) {

		if ($bladeSize == 70) {

			if ($totalPaddleLength == 82) {
				$blade_end = 0.6;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 1;
				$handle_end = 0.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 1.6;
				$handle_end = 1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 2.2;
				$handle_end = 1.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 2.8;
				$handle_end = 1.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 3.4;
				$handle_end = 2.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 4;
				$handle_end = 2.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 4.6;
				$handle_end = 3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 5.2;
				$handle_end = 3.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 5.8;
				$handle_end = 3.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 6.4;
				$handle_end = 4.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 7;
				$handle_end = 4.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 7.6;
				$handle_end = 5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 8.2;
				$handle_end = 5.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 8.8;
				$handle_end = 5.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 9.4;
				$handle_end = 6.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 10;
				$handle_end = 6.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 10.6;
				$handle_end = 7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 11.2;
				$handle_end = 7.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 11.8;
				$handle_end = 7.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 12.4;
				$handle_end = 8.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 13;
				$handle_end = 8.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 13.6;
				$handle_end = 9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 14.2;
				$handle_end = 9.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 14.8;
				$handle_end = 9.8;
				$shaftDesign = 250;
			}				
		}
		else if ($bladeSize == 80) {

			if ($totalPaddleLength == 83) {
				$blade_end = 0.4;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 0.8;
				$handle_end = 0.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 1.4;
				$handle_end = 1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2;
				$handle_end = 1.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 2.6;
				$handle_end = 1.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 3.2;
				$handle_end = 2.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 3.8;
				$handle_end = 2.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 4.4;
				$handle_end = 3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5;
				$handle_end = 3.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 5.6;
				$handle_end = 3.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 6.2;
				$handle_end = 4.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 6.8;
				$handle_end = 4.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 7.4;
				$handle_end = 5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8;
				$handle_end = 5.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 8.6;
				$handle_end = 5.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 9.2;
				$handle_end = 6.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 9.8;
				$handle_end = 6.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 10.4;
				$handle_end = 7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11;
				$handle_end = 7.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 11.6;
				$handle_end = 7.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 12.2;
				$handle_end = 8.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 12.8;
				$handle_end = 8.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 13.4;
				$handle_end = 9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14;
				$handle_end = 9.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 14.6;
				$handle_end = 9.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 15.2;
				$handle_end = 10.2;
				$shaftDesign = 250;
			}
		}
		else if ($bladeSize == 85) {

			if ($totalPaddleLength == 83) {
				$blade_end = 0.9;
				$handle_end = 1.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 1.1;
				$handle_end = 0.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 1.7;
				$handle_end = 1.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2.3;
				$handle_end = 1.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 2.9;
				$handle_end = 2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 3.5;
				$handle_end = 2.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 4.1;
				$handle_end = 2.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 4.7;
				$handle_end = 3.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5.3;
				$handle_end = 3.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 5.9;
				$handle_end = 4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 6.5;
				$handle_end = 4.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 7.1;
				$handle_end = 4.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 7.7;
				$handle_end = 5.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8.3;
				$handle_end = 5.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 8.9;
				$handle_end = 6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 9.5;
				$handle_end = 6.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 10.1;
				$handle_end = 6.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 10.7;
				$handle_end = 7.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11.3;
				$handle_end = 7.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 11.9;
				$handle_end = 8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 12.5;
				$handle_end = 8.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 13.1;
				$handle_end = 8.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 13.7;
				$handle_end = 9.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14.3;
				$handle_end = 9.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 14.9;
				$handle_end = 10;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 15.5;
				$handle_end = 10.4;
				$shaftDesign = 250;
			}
		}
		else if ($bladeSize == 90) {

			if ($totalPaddleLength == 84) {
				$blade_end = 0.1;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 83) {
				$blade_end = 0.7;
				$handle_end = 0.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 1.3;
				$handle_end = 0.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 1.9;
				$handle_end = 1.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2.5;
				$handle_end = 1.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 3.1;
				$handle_end = 2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 3.7;
				$handle_end = 2.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 4.3;
				$handle_end = 2.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 4.9;
				$handle_end = 3.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5.5;
				$handle_end = 3.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 6.1;
				$handle_end = 4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 6.7;
				$handle_end = 4.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 7.3;
				$handle_end = 4.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 7.9;
				$handle_end = 5.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8.5;
				$handle_end = 5.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 9.1;
				$handle_end = 6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 9.7;
				$handle_end = 6.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 10.3;
				$handle_end = 6.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 10.9;
				$handle_end = 7.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11.5;
				$handle_end = 7.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 12.1;
				$handle_end = 8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 12.7;
				$handle_end = 8.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 13.3;
				$handle_end = 8.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 13.9;
				$handle_end = 9.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14.5;
				$handle_end = 9.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 15.1;
				$handle_end = 10;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 15.7;
				$handle_end = 10.4;
				$shaftDesign = 250;
			}  
		}
		else if ($bladeSize == 95) {

			if ($totalPaddleLength == 84) {
				$blade_end = 0.3;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 83) {
				$blade_end = 0.8;
				$handle_end = 0.5;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 1.4;
				$handle_end = 0.9;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 2;
				$handle_end = 1.3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2.6;
				$handle_end = 1.7;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 3.2;
				$handle_end = 2.1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 3.8;
				$handle_end = 2.5;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 4.4;
				$handle_end = 2.9;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 5;
				$handle_end = 3.3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5.6;
				$handle_end = 3.7;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 6.2;
				$handle_end = 4.1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 6.8;
				$handle_end = 4.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 7.4;
				$handle_end = 4.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 8;
				$handle_end = 5.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8.6;
				$handle_end = 5.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 9.2;
				$handle_end = 6.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 9.8;
				$handle_end = 6.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 10.4;
				$handle_end = 6.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 11;
				$handle_end = 7.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11.6;
				$handle_end = 7.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 12.2;
				$handle_end = 8.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 12.8;
				$handle_end = 8.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 13.4;
				$handle_end = 8.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 14;
				$handle_end = 9.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14.6;
				$handle_end = 9.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 15.2;
				$handle_end = 10.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 15.8;
				$handle_end = 10.5;
				$shaftDesign = 250;
			}
		}
	}
	else if ($isRaceBlade == true) {

		if ($bladeSize == 80) {     

			if ($totalPaddleLength == 84) {
				$blade_end = 0.7;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 83) {
				$blade_end = 1;
				$handle_end = 0.7;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 1.6;
				$handle_end = 1.1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 2.2;
				$handle_end = 1.5;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2.8;
				$handle_end = 1.9;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 3.4;
				$handle_end = 2.3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 4;
				$handle_end = 2.7;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 4.6;
				$handle_end = 3.1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 5.2;
				$handle_end = 3.5;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5.8;
				$handle_end = 3.9;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 6.4;
				$handle_end = 4.3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 7;
				$handle_end = 4.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 7.6;
				$handle_end = 5.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 8.2;
				$handle_end = 5.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8.8;
				$handle_end = 5.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 9.4;
				$handle_end = 6.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 10;
				$handle_end = 6.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 10.6;
				$handle_end = 7.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 11.2;
				$handle_end = 7.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11.8;
				$handle_end = 7.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 12.4;
				$handle_end = 8.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 13;
				$handle_end = 8.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 13.6;
				$handle_end = 9.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 14.2;
				$handle_end = 9.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14.8;
				$handle_end = 9.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 15.4;
				$handle_end = 10.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 16;
				$handle_end = 10.7;
				$shaftDesign = 250;
			}

		}
		else if ($bladeSize == 85) {

			if ($totalPaddleLength == 84) {
				$blade_end = 0.9;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 83) {
				$blade_end = 1.1;
				$handle_end = 0.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 1.7;
				$handle_end = 1.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 2.3;
				$handle_end = 1.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2.9;
				$handle_end = 2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 3.5;
				$handle_end = 2.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 4.1;
				$handle_end = 2.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 4.7;
				$handle_end = 3.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 5.3;
				$handle_end = 3.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5.9;
				$handle_end = 4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 6.5;
				$handle_end = 4.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 7.1;
				$handle_end = 4.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 7.7;
				$handle_end = 5.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 8.3;
				$handle_end = 5.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8.9;
				$handle_end = 6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 9.5;
				$handle_end = 6.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 10.1;
				$handle_end = 6.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 10.7;
				$handle_end = 7.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 11.3;
				$handle_end = 7.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11.9;
				$handle_end = 8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 12.5;
				$handle_end = 8.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 13.1;
				$handle_end = 8.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 13.7;
				$handle_end = 9.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 14.3;
				$handle_end = 9.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14.9;
				$handle_end = 10;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 15.5;
				$handle_end = 10.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 16.1;
				$handle_end = 10.8;
				$shaftDesign = 250;
			}

		}
		else if ($bladeSize == 90) {

			if ($totalPaddleLength == 85) {
				$blade_end = 0.1;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 84) {
				$blade_end = 0.7;
				$handle_end = 0.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 83) {
				$blade_end = 1.1;
				$handle_end = 0.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 1.7;
				$handle_end = 1.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 2.3;
				$handle_end = 1.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 2.9;
				$handle_end = 2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 3.5;
				$handle_end = 2.4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 4.1;
				$handle_end = 2.8;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 4.7;
				$handle_end = 3.2;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 5.3;
				$handle_end = 3.6;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 5.9;
				$handle_end = 4;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 6.5;
				$handle_end = 4.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 7.1;
				$handle_end = 4.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 7.7;
				$handle_end = 5.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 8.3;
				$handle_end = 5.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 8.9;
				$handle_end = 6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 9.5;
				$handle_end = 6.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 10.1;
				$handle_end = 6.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 10.7;
				$handle_end = 7.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 11.3;
				$handle_end = 7.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 11.9;
				$handle_end = 8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 12.5;
				$handle_end = 8.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 13.1;
				$handle_end = 8.8;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 13.7;
				$handle_end = 9.2;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 14.3;
				$handle_end = 9.6;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 14.9;
				$handle_end = 10;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 15.5;
				$handle_end = 10.4;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 16.1;
				$handle_end = 10.8;
				$shaftDesign = 250;
			}

		}
		else if ($bladeSize == 95) {

			if ($totalPaddleLength == 85) {
				$blade_end = 0.3;
				$handle_end = NULL;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 84) {
				$blade_end = 0.8;
				$handle_end = 0.5;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 83) {
				$blade_end = 1.4;
				$handle_end = 0.9;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 82) {
				$blade_end = 2;
				$handle_end = 1.3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 81) {
				$blade_end = 2.6;
				$handle_end = 1.7;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 80) {
				$blade_end = 3.2;
				$handle_end = 2.1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 79) {
				$blade_end = 3.8;
				$handle_end = 2.5;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 78) {
				$blade_end = 4.4;
				$handle_end = 2.9;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 77) {
				$blade_end = 5;
				$handle_end = 3.3;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 76) {
				$blade_end = 5.6;
				$handle_end = 3.7;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 75) {
				$blade_end = 6.2;
				$handle_end = 4.1;
				$shaftDesign = 275;
			}
			else if ($totalPaddleLength == 74) {
				$blade_end = 6.8;
				$handle_end = 4.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 73) {
				$blade_end = 7.4;
				$handle_end = 4.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 72) {
				$blade_end = 8;
				$handle_end = 5.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 71) {
				$blade_end = 8.6;
				$handle_end = 5.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 70) {
				$blade_end = 9.2;
				$handle_end = 6.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 69) {
				$blade_end = 9.8;
				$handle_end = 6.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 68) {
				$blade_end = 10.4;
				$handle_end = 6.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 67) {
				$blade_end = 11;
				$handle_end = 7.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 66) {
				$blade_end = 11.6;
				$handle_end = 7.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 65) {
				$blade_end = 12.2;
				$handle_end = 8.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 64) {
				$blade_end = 12.8;
				$handle_end = 8.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 63) {
				$blade_end = 13.4;
				$handle_end = 8.9;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 62) {
				$blade_end = 14;
				$handle_end = 9.3;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 61) {
				$blade_end = 14.6;
				$handle_end = 9.7;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 60) {
				$blade_end = 15.2;
				$handle_end = 10.1;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 59) {
				$blade_end = 15.8;
				$handle_end = 10.5;
				$shaftDesign = 250;
			}
			else if ($totalPaddleLength == 58) {
				$blade_end = 16.4;
				$handle_end = 10.9;
				$shaftDesign = 250;
			}    

		}

	}
	echo '<ul style="padding-top:25px;">';
	echo '<li>Blade Cut: '.$blade_end.'</li>';
	echo '<li>Handle Cut: '.$handle_end.'</li>';
	echo '<li>Shaft Design: '.$shaftDesign.'</li>';
	echo '</ul>';
}
?>