<div class="lightbox load">
	<div class="col-wrap dark-wrap">
		<button class="close"><i class="fa fa-times"></i></button> 
		<?php if (!is_user_logged_in() ) { ?>
		<div class="loginform">
			<h2>Login or Register to Save your Fit Profile.</h2>
			<?php 
			$args = array('label_username' => 'Username/Email');
			wp_login_form($args); 
			?>
		</div>
		<div class="actions">
			<button class="loadRegForm">Register</button>
			<button class="contButton">Start New Fit without saving.</button>
		</div>
		<?php } ?>
		<?php if (is_user_logged_in() ) { ?>
		<h2>Select or Load a Fit Profile</h2>
		<p>Maxmize your versatility on the water by saving or loading up to three fit profiles. Select a slot below to get started.</p>
		<div class="full column">
			<div class="checkbox fit-one"></div>
			<label>Fit Profile 1</label>
		</div>
		<div class="full column">
			<div class="checkbox fit-two"></div>
			<label>Fit Profile 2</label>
		</div>
		<div class="full column">
			<div class="checkbox fit-three"></div>
			<label>Fit Profile 3</label>
		</div>
		<div class="full column">
			<div class="btn load-it alignright">Load Fit Profile</div>
		</div>
		<?php } ?>
	</div>
</div>