<?php function selectBladeTypes() { ?>
<select class="bladeType">
	<option value="Race">Race</option>
	<option value="Surf">Surf</option>
</select>
<?php } ?>
<?php function selectBladeSizes() { ?>
<select class="bladeSize">
	<option value="70">70</option>
	<option value="80">80</option>
	<option value="85">85</option>
	<option value="90">90</option>
	<option value="95">95</option>
</select>
<?php } ?>
<?php function selectPaddleLength() { ?>
<select class="paddleLength">
	<?php $count = 58; 
	while ($count <= 86) {
		echo '<option value="'.$count.'">'.$count.'</option>';
		$count++;
	}
	?>
</select>
<?php } ?>
<?php function selectFlexRating() { ?>
<select class="flexRating">
	<option value="225">225</option>
	<option value="250">250</option>
	<option value="275">275</option>
</select>
<?php } ?>
<?php function selectHandleSize() { ?>
<select class="handleSize">
	<option value="Small">Small</option>
	<option value="Medium">Medium</option>
	<option value="Large">Large</option>
</select>
<?php } ?>