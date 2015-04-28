<?php /* Template Name: BYO Test Scenario */ ?>
<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap page-content">
		<div class="wc-aztek-border"></div>
		<div class="container page-contain taligncenter">
			<h1>Build Your Own Paddle</h1>
			<div class="column third spacer">
				<img style="max-height:768px;" src="<?php echo get_template_directory_uri(); ?>/images/surf-paddle-vert.png">
			</div>
			<div class="column spacer two-thirds">
				<div class="blades column third spacer">
					<div class="preview">
						<img src="http://aztekpaddles.com/wp-content/uploads/2015/01/blade_race_85_b-150x213.png">
					</div>
					<h3>Select a Blade</h3>
					<select>
						<?php get_template_part('byo/blades','select'); ?>
					</select>
				</div>
				<div class="shafts column third spacer">
					<div class="preview">
						<img src="http://aztekpaddles.com/wp-content/uploads/2015/01/speed_shaft_225_f-150x213.png">
					</div>
					<h3>Select a Shaft</h3>
					<select>
						<?php get_template_part('byo/shafts','select'); ?>
					</select>
				</div>
				<div class="handles column third spacer">
					<div class="preview">
						<img src="http://aztekpaddles.com/wp-content/uploads/2015/01/handle_medium-150x213.png">
					</div>
					<h3>Select a Handle</h3>
					<select>
						<?php get_template_part('byo/handles','select'); ?>
					</select>
				</div>
				<div class="column third spacer sizes">
					<h3>Select total Paddle Length</h3>
					<?php get_template_part('byo/sizes','select'); ?>
				</div>
				<div class="byo-checkout">
					<p class="total">$390.00</p>
					<a class="btn">Checkout</a>
				</div>
			</div>
		</div>
		<div class="wc-aztek-border"></div>
	</div>
</main>
<?php get_footer(); ?>