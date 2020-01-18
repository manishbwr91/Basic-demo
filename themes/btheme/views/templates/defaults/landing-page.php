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
		<?php include "$includesPath/headers/landing.php"; ?>

		<div class="container container-main padding padding-none-top margin margin-none-top">
			<div class="content-wrap content-main-wrap">
				<div class="content">
					<div class="page page-basic">
						<div class="page-content-wrap">								
							<div class="page-content">
								<div id="cmt-block-banner" class="block cmt-block" cmt-block="block-qtf-mauto">
									<div class="block-content-wrap">
										<div class="block-header-wrap">
											<div class="cmt-slider slider slider-basic">
												<div>
													<div>
														<img class="fluid" src="../../resources/images/back-main.jpg"/>
													</div>
													<div class="absolute absolute-top-center height width">
														<div class="wrap-slide-content">
															<div class="valign-center" >
																<div class="block-header">
																	<div class="row row-inline-left">
																		<div class="col col2">
																			<div class="slider-title">
																				<h1>Demo Title</h1>
																			</div>
																			<div class="slider-info">
																				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p> 		
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div>
													<div>
														<img class="fluid" src="../../resources/images/back-main.jpg"/>
													</div>
													<div class="absolute absolute-top-center height width">
														<div class="wrap-slide-content">
															<div class="valign-center">
																<div class="block-header">
																	<div class="row row-inline-left">
																		<div class="col col2">
																			<div class="slider-title">
																				<h1>Demo Title</h1>
																			</div>
																			<div class="slider-info">
																				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p> 		
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
								<div id="block-second">
									<div id="block-second-view">
										<div class="block block-basic cmt-block" cmt-block="block-auto">
											<div class="block-content-wrap">														
												<div class="block-content">
													<div class="block-content-buffer">
														<div class="box box-basic">
															<div class="box-content-wrap">
																<div class="box-header-wrap bkg bkg-primary">
																	<div class="box-header">
																		<div class="row row-large max-cols-50">
																			<div class="colf colf2">
																				<div class="box-header-icon">
																					<img class="fluid" src="<?= "$resourceUrl/images/setting.png" ?>" />
																				</div>
																				<div class="box-header-title">
																					<h4>Easy Customisation</h4>
																				</div>
																			</div>
																			<div class="colf colf2">
																				<div class="box-header-info">
																					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="box box-basic">
															<div class="box-content-wrap">
																<div class="box-header-wrap bkg bkg-primary">
																	<div class="box-header">
																		<div class="row row-large max-cols-50">
																			<div class="colf colf2">
																				<div class="box-header-icon">
																					<img class="fluid" src="<?= "$resourceUrl/images/cmg.png" ?>"/>
																				</div>
																				<div class="box-header-title">
																					<h4>Easy Customisation</h4>
																				</div>
																			</div>
																			<div class="colf colf2">
																				<div class="box-header-info">
																					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="box box-basic">
															<div class="box-content-wrap">
																<div class="box-header-wrap bkg bkg-primary">
																	<div class="box-header">
																		<div class="row row-large max-cols-50">
																			<div class="colf colf2">
																				<div class="box-header-icon">
																					<img class="fluid" src="<?= "$resourceUrl/images/arrow.png" ?>" />
																				</div>
																				<div class="box-header-title">
																					<h4>Easy Customisation</h4>
																				</div>
																			</div>
																			<div class="colf colf2">
																				<div class="box-header-info">
																					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
								</div>
								<div id="block-common">
									<div class="block block-basic cmt-block" cmt-block="block-qtf">
										<div class="block-bkg texture" style="background-image:url(../../resources/images/buildings.jpg);">
											<div class="texture texture-black"></div>
										</div>
										<div class="block-content-wrap">
											<div class="block-header-wrap">
												<div class="block-header">
													<div class="row row-large align align-center max-cols-100 padding padding-top-small">
														<div class="col col2">
															<div class="block-header-title text text-white">
																<h1>About</h1>
															</div>
														</div>
														<div class="col col2">
															<div class="block-header-info text text-white align align-left line-height line-height-medium">
																<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="block-common">
									<div class="block block-basic">
										<div class="block-content-wrap align align-center form">
											<div class="block-content">
												<div class="box-basic row row-large">
													<div class="box-content-wrap align align-center form">
														<div class="box-header-wrap bkg bkg-white">
															<div class="box-header">
																<div class="box-header-title">
																	<h2>- Write Us -</h2>
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
																		<input type="text" class="padding padding-defaul" value="testuser1@mail.com">
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
															<div class="col col8 right margin margin-top-small">
																<div>
																	<input class="rounded rounded-medium" type="button" value="Send">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>
										<div class="text-with-line padding padding-bottom-small bkg bkg-white"></div>
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
