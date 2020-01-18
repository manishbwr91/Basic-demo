<header id="header-main" class="header header-basic header-basic-duo header-fixed shadow shadow-primary">
	<div class="row">
		<div class="header-logo">
			<div class="logo logo-desktop">
				<a href="<?= $baseUrl ?>">
					<img class="fluid" src="<?= "$resourceUrl/images/logo.png" ?>"/>
				</a>
			</div>

			<div id="logohide" class="logo logo-mobile">
				<a href="<?= $baseUrl ?>">
					<img class="fluid" src="<?= "$resourceUrl/images/mobile-logo1.png" ?>"/>
				</a>
			</div>    
		</div>
		<ul id="menu-main" class="nav">
			<li><a href="<?= $baseUrl ?>">HOME</a></li>
			<li><a href="<?= $baseUrl ?>">ABOUT</a></li>
			<li><a href="<?= $baseUrl ?>">FEATURES</a></li>
			<li><a href="<?= $baseUrl ?>">CONTACT</a></li>
			<li class="header-icon"><a><span popup="public-popup" class="popup-trigger"><i class="cmti cmti-2x cmti-user-c-o pointer"></i></span></a></li>
		</ul>
		<div id="public-popup" class="cmt-popup popup popup-basic popup-modal">
			<div class="popup-screen"></div>
			<div class="popup-screen-listener"></div>
			<div class="popup-data popup-data-medium">
				<div class="popup-close">
					<div class="close-icon">
						<span class="text text-blue bkg bkg-white popup-corner">
							<i class="popup-corner-close cmti cmti-close"></i>
						</span>
					</div>
				</div>
				<div class="popup-content-wrap">
					<div class="popup-content align align-center">
						<div id="box-login" class="page-content-data">
							<div class="box-basic">
								<div class="box-content-wrap align align-center form">
									<div class="box-header-wrap bkg bkg-white">
										<h2>LOGIN</h2>
									</div>
									<div class="box-content">
										<div class="form-group">    
												<label>Email*</label>
												<input type="text" class="padding padding-default">
										</div>	
										<div class="form-group">
											<label>Password*</label>
											<input type="password" class="padding padding-default">
										</div>
										<div class="row max-cols-50 margin margin-top-small">
											<div class="left margin margin-top-default">
												<ul class="nav">
													<li><a href="<?= "$templateUrl/authentications/forgot-password-mobile" ?>">Forgot Password?</a></li>
												</ul>
											</div>
											<div class="right">
												<input class="frm-element-small rounded rounded-medium" type="button" value="LOGIN">
											</div>
										</div>
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
										<div class="text-with-line margin margin-top-small"></div>
										<div class="align align-center margin margin-top-small">
											<ul class="nav inline">
												<span>Dont have Account? </span><li><a href="<?= "$templateUrl/authentications/login-register" ?>">Sign Up here</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>											
					</div>
				</div>
			</div>
		</div>
		<div id="mobile-actions">
			<span id="btn-menu-mobiles" class="mobile-action">
				<i class="cmti cmti-menu cmti-action"></i>
			</span>
		</div>
	</div>
	<div id="menu-mobile-wrap" class="relative">
		<ul id="menu-main-mobile"class="vnav">
			<li><a href="<?= $baseUrl ?>">HOME</a></li>
			<li><a href="<?= $baseUrl ?>">ABOUT</a></li>
			<li><a href="<?= $baseUrl ?>">FEATURES</a></li>
			<li><a href="<?= $baseUrl ?>">CONTACT</a></li>
			<li><a href="<?= $baseUrl ?>">MY ACCOUNT</a></li>
		</ul>
	</div>
</header>
