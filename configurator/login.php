<div class="lightbox login">
	<div class="col-wrap dark-wrap">
		<button class="close"><i class="fa fa-times"></i></button> 
		<div class="column full">
			<?php if (!is_user_logged_in() ) { ?>
			<div class="loginform">
				<h2>Login or Register to Save your Fit Profile.</h2>
				<?php wp_login_form(); ?>
			</div>
			<div class="registerform">
				<?php wp_register_form(); ?>
			</div>
			<?php } ?>
			<div class="actions">
				<button class="loadRegForm">Register</button>
				<button class="contButton">Start New Fit without saving.</button>
			</div>
			<?php if (is_user_logged_in() ) { ?>
			<h3>My Fit Profiles</h3>
			<?php } ?>
		</div>
	</div>
</div>
<div class="lightbox-bg"></div>