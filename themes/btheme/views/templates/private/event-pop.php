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
		<?php include "$includesPath/headers/private.php"; ?>
		<?php include "$includesPath/sidebars/profile-sidebar.php"; ?>
		<div class="filler-height filler-height-medium"></div>
		<div class="set-container">
			<div class="container container-main">
				<div class="content-wrap content-main-wrap">
					<div class="content">
						<div class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto">
							<div class="padding padding-small">
								<div class="page-content-wrap">
									<div class="page-header-wrap">
										<div class="page-header">
											<div class="row">
												<div class="col col12x8">
													<div class="page-header-title">
														<h6 class="text text-small">Events</h6>
													</div>
												</div>
												<div class="col col12x4">
													<div class="nav">
														<ul id="disableds">
															<li><a class="btn btn-xlarge rounded rounded-medium" href="<?= "$templateUrl/private/create-an-event" ?>">CREATE AN EVENTS</a></li>
															<li><a class="btn btn-default rounded rounded-medium" href="<?= "$templateUrl/private/create-an-event" ?>"><i class="cmti cmti-event"></i></a></li>
															<li><a class="btn btn-default rounded rounded-medium" href="<?= "$templateUrl/private/create-an-event" ?>"><i class="cmti cmti-calendar-o"></i></a></li>
															<li><a class="btn btn-default rounded rounded-medium disableds-color" href="<?= "$templateUrl/private/create-an-event" ?>"><i class="cmti cmti-listing"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="page-content">
										<div class="block block-basic">
											<div class="block-content-wrap">
												<div class="block-content">
													<div class="row max-cols-50">
														<div class="col col4 padding padding-bottom-default">
															<div  class="cmt-select-wrap">
																<select class="cmt-select">
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																 </select>
															</div>
														</div>
														<div class="col col4 padding padding-bottom-default">
															<div  class="cmt-select-wrap">
																<select class="cmt-select">
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																 </select>
															</div>
														</div>
														<div class="col col4 padding padding-bottom-default">
															<div  class="cmt-select-wrap">
																<select class="cmt-select">
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																	<option>Demo</option>
																 </select>
															</div>
														</div>
														<div class="col col4">
															<span class="frm-icon-element icon-right">
																  <i class="text text-link cmti cmti-search"></i>
																  <input type="text" placeholder="search">
															</span>
														</div>
													</div>
													<div class="row max-cols-50 margin margin-bottom-small margin margin-top-small">
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>	
													
													<div class="row max-cols-50">	
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														
														<div class="col col4">
															<div id="card-setting" class="card-basic">
																<div class="card-content-wrap">
																	<div class="card-header">
																		<div class="card-bkg">
																			<img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/>
																		</div>
																	</div>
																	<div class="card-content bkg bkg-primary">
																		<div class="card-content-title">
																			<h6>Lorem Ispum Title</h6>
																		</div>
																		<div class="card-content-summary">
																			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																		</div>
																	</div>
																	<div class="card-footer">
																		<div class="card-info">
																			<h6 class="left">Jan 26,2018</h6>
																			<div class="cmt-choice right">
																				<label>
																					<input type="checkbox" name="choice2"/>
																					<span class="label"></span>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="margin margin-top-small">
														<ul class="pagination pagination-basic right">
															<li class="first disabled">
																<span class="rounded rounded-medium"><i class="icon cmti cmti-chevron-left cmti-chevron-left"></i></span>
															</li>
															<li class="prev disabled">
																<span class="rounded rounded-medium"><i class="icon cmti cmti-chevron-left"></i></span>
															</li>
															<li>
																<a href="#" class="bkg bkg-white text text-black bold border border-secondary">1</a>
															</li>
															<span class="bold">of</span>
															<li>
																<a href="#" class="bkg bkg-white text text-black bold">2</a>
															</li>
															<li class="first disabled">
																<span class="rounded rounded-medium"><i class="icon cmti cmti-chevron-right"></i></span>
															</li>
																<li class="prev disabled">
																<span class="rounded rounded-medium popup-trigger" popup="card-popup"><i class="icon cmti cmti-chevron-right"></i></span>
															</li>
														</ul>	
												   </div>
													<div id="card-popup" class="cmt-popup popup popup-basic popup-modal">
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
																	<div id="" class="page-content-data">
																		<div class="box-basic">
																			<div class="box-bkg"><img class="fluid" src="<?= "$resourceUrl/images/desk.jpg" ?>"/></div>
																			<div class="box-content-wrap align align-center bkg bkg-primary ">
																				<div class="box-header-wrap">
																					<div class="box-header">
																						<div class="box-content-title">
																							<h3>Lorem Ispum Title</h3>
																						</div>
																					</div>
																				</div>
																				<div class="box-content">
																					<div class="box-content-data">
																						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																					</div>
																					<div class="box-content-info">
																						<h6>Jan 26,2018 - 04:20 PM</h6>
																					</div>
																				</div>
																				<div class="box-footer-wrap">
																					<div class="box-footer">
																						<div class="box-footer-title">
																							<div class="left">
																								<h6>Pre Settings</h6>
																								<div class="text-with-line"></div>
																							</div>
																							<div class="right">
																								<h6> Post Settings</h6>
																								<div class="text-with-line"></div>
																							</div>
																						</div>
																						<div class="box-footer-info">
																							<div class="left">
																								<span>Reminder Count -5</span>
																								<span>Reminder Interval -1</span>
																								<span>Interval Unit-Day</span>
																							</div>
																							<div class="right">
																								<span>Reminder Count -5</span>
																								<span>Reminder Interval -1</span>
																								<span>Interval Unit-Day</span>
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
										</div>
									</div>
								</div>	
							</div>								
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
