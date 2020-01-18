<?php
use yii\helpers\Html;
?>
<div class="box-login-wrap">
	<?php if( $actions ) { ?>
	<div class="row login-actions">
		<div class="colf colf2 btn-login">Login</div>
		<div class="colf colf2 btn-signup">Register</div>
	</div>
	<?php } ?>

	<?php if( $login ) { ?>
		<div class="row">
			<div id="box-login" class="page-content-data">
				<div class="box-basic">
					<div class="box-content-wrap align align-center form">
						<div class="box-header-wrap bkg bkg-white">
							<h2>LOGIN</h2>
						</div>
						<div class="box-content">
						<?php if( $loginDisabled ) { ?>
						<p class="info"><?= $loginMessage ?></p>
						<?php } else { ?>
						<form cmt-app="<?= $widget->loginApp ?>" cmt-controller="<?= $widget->loginController ?>" cmt-action="<?= $widget->loginAction ?>" action="<?= $widget->loginUrl ?>">
							<div class="max-area-cover spinner">
								<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
							</div>
							<div class="box-login-fields box-content">
								<div class="frm-field form-group">
									<?php if( $label ) { ?>
										<label>Email*</label>
									<?php } ?>
									<?php if( $fieldIcon ) { ?>
										<div class="frm-icon-element">
											
											<input  type="text" class="padding padding-default" name="Login[email]" placeholder="Email or Username*">
										</div>
									<?php } else { ?>
										<input  type="text" name="Login[email]" placeholder="Email *">
									<?php } ?>
									<span class="error" cmt-error="Login[email]"></span>
								</div>
								<div class="frm-field form-group">
									<?php if( $label ) { ?>
										<label>Password *</label>
									<?php } ?>
									<?php if( $fieldIcon ) { ?>
										<div class="frm-icon-element">
											
											<input  type="password" name="Login[password]" class="padding padding-default" placeholder="Password *">
										</div>
									<?php } else { ?>
										<input  type="password" name="Login[password]" placeholder="Password *">
									<?php } ?>
									<span class="error" cmt-error="Login[password]"></span>
								</div>
							</div>
							<div class="padding padding-top-small">
								<input type="submit" name="submit" value="Login" >
							</div>
							<div class="btn-forgot-wrap padding padding-top-small">
								<span class="btn-forgot-password">Forgot your Password</span>
							</div>
							<div class="filler-height"></div>
							
							<div class="margin margin-top-medium">
								<div class="text-with-line">
									<p class="text-content bkg bkg-white">OR LOGIN WITH</p>
								</div>
							</div>
							<div class="row	row-inline margin margin-top-small">
								<div class="menu-social">
									<a class="margin margin-right-small" href="https://www.facebook.com/" target="_blank">
										<i class="icon icon-border cmti cmti-1-5x cmti-social-facebook"></i>
									</a>
									<a href="https://www.twitter.com/" target="_blank">
										<i class="icon icon-border cmti cmti-1-5x cmti-social-twitter"></i>
									</a>
								</div>
							</div>
							<div class="message success"></div>
							<div class="message warning"></div>
							<div class="message error"></div>
							<div class="text-with-line margin margin-top-small"></div>
							<div class="align align-center margin margin-top-small">
								<ul class="nav inline btn-signup-wrap">
									<span class="btn-register">Dont have Account? <b>Sign Up here</b>
								</ul>
							</div>
						</form>
						<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if( $forgotPassword ) { ?>
		<div class="box-forgot page-content-data">
			<div class="box-content-wrap box-basic">
				<div class="box-content box-content-wrap align align-center form">
					<form cmt-app="<?= $widget->loginApp ?>" cmt-controller="<?= $widget->forgotController ?>" cmt-action="<?= $widget->forgotAction ?>" action="<?= $widget->forgotUrl ?>">
						<div class="max-area-cover spinner">
							<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
						</div>
						<div class="box-header-wrap bkg bkg-white">
							<h4>Enter Email</h4>
						</div>
						<div class="box-forgot-fields box-content padding padding-small">
							<div class="frm-field form-group">
								<?php if( $label ) { ?>
									<label>Email *</label>
								<?php } ?>
									<label>Email *</label>
								<?php 
								?>
								<?php if( $fieldIcon ) { ?>
									<div class="frm-icon-element frm-field">
										<span class=""></span>
										<input  type="text" class="padding padding-default" name="ForgotPassword[email]" >
									</div>
								<?php } else { ?>
									<input  type="text" class="padding padding-default" name="ForgotPassword[email]" placeholder="Email2 *">
								<?php } ?>
								<span class="error" cmt-error="ForgotPassword[email]"></span>
							</div>
						</div>
						<div >
							<input type="submit" name="submit" value="Submit" class="btn btn-small">
						</div>
						<div class="btn-login-wrap padding padding-small">
							<?= Html::a( "Login", [ '/login' ], [ 'class' => 'btn-login ' ] ) ?>
						</div>
						<div class="filler-height"></div>
						<div class="message success"></div>
						<div class="message warning"></div>
						<div class="message error"></div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if( $register ) { ?>
		<div class="box-signup page-content-data">
			<div class="box-content-wrap box-basic">
				<div class="box-content box-content-wrap align align-center form">
				<div class="box-header-wrap bkg bkg-white">
					<h2>Register</h2>
				</div>	
					<form cmt-app="<?= $widget->loginApp ?>" cmt-controller="<?= $widget->registerController ?>" cmt-action="<?= $widget->registerAction ?>" action="<?= $widget->registerUrl ?>">
						<div class="max-area-cover spinner">
							<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
						</div>
						<div class="box-header-wrap bkg bkg-white box-forgot-fields box-content ">
							<div class="frm-field form-group padding padding-small">
								<label>Email *</label>
								<div class="frm-icon-element frm-field">
									<input  type="email" name="Register[email]">
									<span class="error" cmt-error="Register[email]"></span>
								</div>
							</div>
							<div class="frm-field form-group padding padding-small">
								<label>Password *</label>
								<div class="frm-icon-element frm-field">
									<input  type="password" name="Register[password]">
									<span class="error" cmt-error="Register[password]"></span>
								</div>
							</div>
							<div class="frm-field form-group padding padding-small">
								<label>Confirm Password *</label>
								<div class="frm-icon-element frm-field">
									<input  type="password" name="Register[password_repeat]">
									<span class="error" cmt-error="Register[password_repeat]"></span>
								</div>
							</div>


							<?php if( $optionalFields ) { ?>
							<div class="frm-field form-group">
								<?php if( $label ) { ?>
									<label>Username</label>
								<?php } ?>
								<?php if( $fieldIcon ) { ?>
									<div class="frm-icon-element">
										<span class="cmti cmti-user"></span>
										<input type="text" name="Register[username]" placeholder="Username">
									</div>
								<?php } else { ?>
									<input type="text" name="Register[username]" placeholder="Username">
								<?php } ?>
								<span class="error" cmt-error="Register[username]"></span>
							</div>
							<div class="frm-field">
								<?php if( $label ) { ?>
									<label>First Name</label>
								<?php } ?>
								<?php if( $fieldIcon ) { ?>
									<div class="frm-icon-element">
										<span class="cmti cmti-user"></span>
										<input type="text" name="Register[firstName]" placeholder="First Name">
									</div>
								<?php } else { ?>
									<input type="text" name="Register[firstName]" placeholder="First Name">
								<?php } ?>
								<span class="error" cmt-error="Register[firstName]"></span>
							</div>
							<div class="frm-field form-group">
								<?php if( $label ) { ?>
									<label>First Name</label>
								<?php } ?>
								<?php if( $fieldIcon ) { ?>
									<div class="frm-icon-element">
										<span class="cmti cmti-user"></span>
										<input type="text" name="Register[lastName]" placeholder="Last Name">
									</div>
								<?php } else { ?>
									<input type="text" name="Register[lastName]" placeholder="Last Name">
								<?php } ?>
								<span class="error" cmt-error="Register[lastName]"></span>
							</div>
							<?php } ?>
							<div class="filler-height"></div>
							<div class="clearfix">
								<div class="clearfix">
									<input type="checkbox" name="Register[terms]">
									<em>I agree to the <?= Html::a( "Terms", [ '/terms' ], null ) ?> and <?= Html::a( "Privacy Policy", [ '/privacy' ], null ) ?></em>
								</div>
								<span class="error" cmt-error="Register[terms]"></span>
							</div>
						</div>
						<div class="filler-height"></div>
						<div class="message success"></div>
						<div class="message warning"></div>
						<div class="message error"></div>
						<div class="padding padding-small">
							<input type="submit" name="submit" value="Sign Up">
						</div>
						<div class="btn-login-wrap padding padding-small">
							<span class="btn-login">Login</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
