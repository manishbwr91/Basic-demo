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
											<span class="cmti cmti-user"></span>
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
											<span class="cmti cmti-lock-close"></span>
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
									<span class="btn-signup">Dont have Account? </span><li><a href="<?= "$templateUrl/authentications/login-register" ?>">Sign Up here</a></li>
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
</div>