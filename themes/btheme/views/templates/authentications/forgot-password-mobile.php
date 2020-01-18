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
																<div class="box-header">
																	<h2>FORGOT PASSWORD</h2>
																</div>
																<div class="box-header-title">
																	<div class="margin margin-top-medium line-height line-height-medium">
																		Enter your registered email below.<br>
																		we'll send you an OTP.Carrier rates may apply.
																	</div>
																</div>
															</div>
															<div class="box-content">
																<div class="form-group">
																	<div id="forgotpassword">
																		<div class="field-search-col">
																			<label>Mobile Number*</label>
																			<input type="text" name="keywords" value="" placeholder="Mobile Number*">
																			<select class="cmt-select">
																				<option>+91</option>
																				<option>93</option>
																				<option>95</option>
																				<option>66</option>
																				<option>65</option>
																				<option>89</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="row max-cols-50 margin margin-top-small">
																	<div class="left">
																		<ul class="nav">
																			<li><a href="<?= "$templateUrl/authentications/forgot-password-email" ?>">Reset By Email</a></li>
																		</ul>
																		<ul class="nav left padding padding-top-default">
																			<li><a href="<?= "$templateUrl/authentications/login" ?>">Login here</a></li>
																		</ul>
																	</div>

																	<div class="right">
																		<input class="rounded rounded-medium" type="button" value="SUBMIT">
																	</div>
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
