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
												<h6 class="text text-small">Create An Event</h6>
											</div>
										</div>
									</div>
									<div class="page-content">
										<div class="block block-basic">
											<div class="block-content-wrap form">
												<div class="block-content">
													<div class="row max-cols-50">
														<div class="col col2">
															<div class="form-group">    
																	<label>Title*</label>
																	<input type="text">
															</div>
														</div>
														<div class="col col2">
															<div class="form-group">
																<label>Icon*</label>
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
														</div>
														<div class="col col2">
															<div class="form-group">
																<div>	
																	<label>Date*</label>
																	<span class="frm-icon-element icon-right">
																		<i class="cmti cmti-3x cmti-calendar-o"></i>
																		<input type="text" class="datepicker" placeholder="DD/MM/YY">
																	</span>
																</div>
															</div>
														</div>
														<div class="col col2">
															<div class="form-group">
																<div>	
																	<label>Time*</label>
																		<input type="text" class="cmt-timepicker cmt-timepicker-basic" placeholder="HH : MM : AM/PM"/>
																</div>
															</div>
														</div>
													</div>
													
													<div class="row max-cols-100">
														<div class="col col2">
															<div class="form-group">
																<label>Banner*</label>
															</div>
															<div class="event-file-uploader">
																<div class="box-file-uploader-direct cmt-file-uploader file-uploader">
																	<div class="box-content">
																		<div class="box-content-data">
																			<div class="file-wrap">
																				<div class="card card-file">
																					<div class="card-data file-data">
																						<i class="cmti cmti-3x cmti-user"></i>
																					</div>
																				</div>
																			</div>
																			<div class="chooser-wrap">
																				<div class="card card-file-dragger file-dragger">
																					<div class="card-data">
																						<div class="drag-wrap">
																							<div class="drag">Drag here</div>
																							<canvas class="canvas" width="120" height="120"></canvas>
																						</div>
																					</div>
																				</div>
																				<div class="filler-height"></div>
																				<div class="card card-file-chooser file-chooser">
																					<div class="card-data">
																						<div class="btn btn-medium rounded rounded-medium">Upload
																							<input type="file" class="input">
																						</div>
																					</div>
																				</div>
																				<div class="file-preloader">
																					<div class="file-preloader-bar" style="width: 0%;"></div>
																				</div>
																			</div>
																			<div class="form-wrap">
																				<div class="file-info"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col col2 height height-50">
															<div class="form-group">    
																<label>Description</label>
																<textarea rows="7"></textarea>
															</div>
														</div>
													</div>
													
													<div class="row max-cols-50 margin margin-top-medium">
														<h6>Pre Reminder Settings</h6>
														<div class="col col3">
															<div class="form-group">    
																<label>Reminder Count*</label>
																<input type="text" placeholder="Write Number">
															</div>
														</div>
														<div class="col col3">
															<div class="form-group">    
																<label>Reminder Intervel*</label>
																<input type="text" placeholder="Write Number(float)">
															</div>
														</div>
														<div class="col col3">
															<div class="form-group">
																<label>Reminder Unit*</label>
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
														</div>
														
														<h6>Post Reminder Settings</h6>
														<div class="col col3">
															<div class="form-group">    
																<label>Reminder Count*</label>
																<input type="text"placeholder="Write Number">
															</div>
														</div>
														<div class="col col3">
															<div class="form-group">    
																<label>Reminder Intervel*</label>
																<input type="text" placeholder="Write Number(float)">
															</div>
														</div>
														<div class="col col3">
															<div class="form-group">
																<label>Reminder Unit*</label>
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
														</div>
														<div class="col col12x2 right margin margin-top-small">
															<div>
																<input class="rounded rounded-medium" type="button" value="Create">
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
