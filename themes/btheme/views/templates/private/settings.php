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
							<div class="row row-xlarge padding padding-left-default padding padding-right-default"> 
								<div class="page-content-wrap">
									<div class="page-header-wrap">
										<div class="page-header">
											<div class="page-header-title">
												<h6 class="text text-small">Settings</h6>
											</div>
										</div>
									</div>
									<div class="page-content">
										<div class="box box-basic">
											<div class="box-content-wrap form">
												<div class="box-content">
													<div class="cmt-tabs tabs tabs-basic margin margin-top-small">
														<div class="tab-links-wrap text text-blue">
															<span class="tab-link" target="#1">Privacy</span>
															<span class="tab-link" target="#2">Notifications</span>
															<span class="tab-link" target="#3">Reminders</span>
														</div>        
														<div class="tabs tab-content-wrap">
															<div id="1" class="tab-content padding padding-medium bkg bkg-white">
																<table class="table table wrap-table bkg bkg-white">
																	<tbody>
																		<tr>
																			<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																			<td></td>
																		</tr>
																		<tr>
																			<td class="margin margin-top-default">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																			<td class="margin margin-top-default">
																				<span class="bold margin margin-left-default">Yes</span><span class="bold margin margin-left-small">No</span>
																				<div class="cmt-choice">
																					<div class="margin margin-top-medium">
																						<label>
																							<input type="radio" name="choice2" value="1" checked />
																							<span class="label"></span>
																						</label>
																						<label class="margin margin-left-large">
																							<input type="radio" name="choice2" value="0" />
																							<span class="label"></span>
																						</label>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																			<td>
																				<div class="cmt-choice">
																					<div class="margin margin-top-small">
																						<label>
																							<input type="radio" name="choice3" value="1" checked />
																							<span class="label"></span>
																						</label>
																						<label class="margin margin-left-large">
																							<input type="radio" name="choice3" value="0" />
																							<span class="label"></span>
																						</label>
																					</div>
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																			<td>
																				<div class="cmt-choice">
																					<div class="margin margin-top-small">
																						<label>
																							<input type="radio" name="choice4" value="1" checked />
																							<span class="label"></span>
																						</label>
																						<label class="margin margin-left-large">
																							<input type="radio" name="choice4" value="0" />
																							<span class="label"></span>
																						</label>
																					</div>
																				</div>
																			</td>
																		</tr>
																	 </tbody>
																</table>    
															</div>
															<div id="2" class="tab-content padding padding-default bkg bkg-white">
																<table class="table table wrap-table bkg bkg-white">
																	<tbody>
																		<tr>
																			<td>Allow Notification</td>
																			<td>
																				<span class="bold margin margin-left-default">Yes</span><span class="bold margin margin-left-small">No</span>
																				<div class="cmt-choice">
																					<div class="margin margin-top-medium">
																						<label>
																							<input type="radio" name="choice2" value="1" checked />
																							<span class="label"></span>
																						</label>
																						<label class="margin margin-left-large">
																							<input type="radio" name="choice2" value="0" />
																							<span class="label"></span>
																						</label>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div id="3" class="tab-content padding padding-default bkg bkg-white">
																<table class="table table wrap-table bkg bkg-white">
																	<tbody>
																		<tr>
																			<td>Allow Reminder</td>
																			<td>
																				<span class="bold margin margin-left-default">Yes</span><span class="bold margin margin-left-small">No</span>
																				<div class="cmt-choice">
																					<div class="margin margin-top-medium">
																						<label>	
																							<input type="radio" name="choice2" value="1" checked />
																							<span class="label"></span>
																						</label>
																						<label class="margin margin-left-large">
																							<input type="radio" name="choice2" value="0" />
																							<span class="label"></span>
																						</label>
																					</div>
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
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
