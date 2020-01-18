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
					<div class="page-authentication-forms"></div>
						<div class="page page-basic cmt-block" cmt-block="block-full-mauto">
							<div class="page-bkg-fixed" style="background-image:url(../../resources/images/back-main.jpg);"></div>
								<div class="page-content-wrap content-90">								
									<div class="page-header-wrap">
										<div class="page-header">
											<div id="small-icon" class="page-header-icon">
												<img class="fluid" src="<?= "$resourceUrl/images/logo-white.png" ?>"/>
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
																	<h2>ACCOUNT CONFIRMED</h2>
																</div>
															</div>
														</div>
														<div class="align align-center margin margin-top-medium">
															<span>
																<i class="cmti cmti-4x cmti-checkbox-active-o"></i>
															</span>
														</div>
														<div class="row max-cols-50 margin margin-top-medium align align-center">
															<div>Thanks for confirming your email.</div>
															<div class="margin margin-top-default">
																<ul class="nav">
																	<span>Your account hasbeen activated.Click here to </span><li><a href="<?= "$templateUrl/authentications/login" ?>">LOGIN</a></li>
																</ul>
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
