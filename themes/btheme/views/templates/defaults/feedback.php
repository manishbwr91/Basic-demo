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
		<!-- Main -->
		<?php include "$includesPath/headers/main.php"; ?>
		
		<!-- Styles -->
		<?php include "$includesPath/styles/landing.php"; ?>
	</head>
	<body id="scroll-top">		
		<?php include "$includesPath/components/spinners/main.php"; ?>
		<?php include "$includesPath/headers/public.php"; ?>
		<div class="container container-main padding padding-none-top margin margin-none-top">
			<div class="content-wrap content-main-wrap">
				<div class="content">
					<div class="page page-basic cmt-block" cmt-block="block-qtf-auto">
						<div class="page-content-wrap content-90">								
								<div class="page-content">
									<div id="box-feedback" class="page-content-data">
										<div class="box-basic row row-medium">
											<div class="box-content-wrap align align-center form">
												<div class="box-header-wrap bkg bkg-white">
													<div class="box-header">
														<div class="box-header-title">
															<h2 class="text text-secondary text text-regular">Feedback</h2>
														</div>
														<div class="box-header-info">
															<div>Please take a moment to tell us about your experience</div>
														</div> 
													</div>
												</div>
												<div class="row max-cols-50">
													<div class="col col12x4">
														<div class="form-group">    
																<label>Name*</label>
																<input type="text" class="padding padding-default">
														</div>
													</div>
													<div class="col col12x4">
														<div class="form-group">    
																<label>Email*</label>
																<input type="text" class="padding padding-defaul">
														</div>
													</div>
													<div class="col col12x4">
														<div class="form-group">    
																<label>Subject*</label>
																<input type="text" class="padding padding-default">
														</div>
													</div>
													<div class="col col1">
														<div class="form-group">    
																<label>Message</label>
																<input type="text" class="padding padding-large">
														</div>
													</div>
													<div class="col col12x4 right">
														<div class="form-group">    
															<label>Captcha Key*</label>
																<input type="text" class="padding padding-default">
														</div>
													</div>
												</div>
												<div class="row max-cols-50">
													<div class="col col12x4 right margin margin-top-small">
														<div>
															<input class="rounded rounded-medium" type="button" value="Send">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include "$includesPath/footers/public.php"; ?>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
