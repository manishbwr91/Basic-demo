<?php
include __DIR__ . '/../../includes/globals.php';

// Metas
$metas = [
	'title' => "Components - $siteName", 'desc' => null, 'keywords' => null, 'robots' => null,
	'ogTitle' => null, 'ogSite' => null, 'ogUrl' => null, 'ogDesc' => null, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => null, 'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $baseUrl
];

// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null ];
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Styles -->
		<?php include "$includesPath/styles/landing.php"; ?>
	</head>
	<body id="scroll-top">		
		<?php include "$includesPath/components/spinners/main.php"; ?>
		<div class="container container-main padding padding-none-top margin margin-none-top">
			<div class="content-wrap content-main-wrap">
				<div class="content">
					<div class="page-authentication-forms">				
						<div class="page page-basic cmt-block" cmt-block="block-full-mauto">
							<div class="page-bkg-fixed " style="background-image:url(../../resources/images/back-main.jpg);"></div>
								<div class="page-content-wrap content-90">								
									<div class="page-header-wrap">
										<div class="page-header">
											<div id="small-icon" class="page-header-icon">
												<img class="fluid" src="<?= "$resourceUrl/images/logo-white.png" ?>" />
											</div>
										</div>
									</div>
									<div class="page-content">
										<div class="row max-cols-50">
											<div class="col col12x8">
												<div id="small-title" class="page-content-title">
													<h3>Lorem Ispum Title</h3>
												</div>
											</div>
											<div class="col col12x4">
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
																		<p class="text-content">OR LOGIN WITH</p>
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
									<?php include "$includesPath/footers/authentication-forms.php"; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>

