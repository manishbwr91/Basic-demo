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
												<h6 class="text text-small">Profile</h6>
											</div>
										</div>
									</div>
									<div class="page-content">
										<div class="box box-basic">
											<div class="box-content-wrap form">
												<div class="box-content">
													<div class="cmt-tabs tabs tabs-basic margin margin-top-small">
														<div class="tab-links-wrap text text-blue">
															<span class="tab-link" target="#1">Basic</span>
															<span class="tab-link" target="#2">Account</span>
															<span class="tab-link" target="#3">Address</span>
														</div>        
														<div class="tabs tab-content-wrap">
															<div id="1" class="tab-content padding padding-medium bkg bkg-white">
																<div class="row max-cols-50">
																	<div class="col col2">
																		<div class="form-group	">    
																				<label>Email*</label>
																				<input type="text" value="testuser1@mail.com">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																				<label>User	Name</label>
																				<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																				<label>Fisrt Name</label>
																				<input type="text">
																		</div>
																	</div>

																	<div class="col col2">
																		<div class="form-group">    
																				<label>Last Name</label>
																				<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">
																			<label>Gender</label>
																			<div class="cmt-select-wrap">
																				<select class="cmt-select">
																					<option>Male</option>
																					<option>Female</option>
																					<option>Other</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">
																			<div>	
																				<label>Date of Birth</label>
																				<span class="frm-icon-element icon-right">
																					<i class="cmti cmti-3x cmti-calendar-o"></i>
																					<input type="text" class="datepicker">
																				</span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row max-cols-100">
																	<div class="col col12x2 right margin margin-top-small">
																		<div>
																			<input class="rounded rounded-medium" type="button" value="UPDATE">
																		</div>
																	</div>
																</div>        
															</div>
															 <div id="2" class="tab-content padding padding-medium bkg bkg-white">
																<div class="row max-cols-50">
																	<div class="padding padding-default">
																		<h4 class="padding padding-bottom-small">Change Password</h4>
																		<p>Lorem Ispum is simply dummy text.</p>
																	</div>
																	<div class="col col3">
																		<div class="form-group	">    
																				<label>Old Password</label>
																				<input type="password">
																		</div>
																	</div>
																	<div class="col col3">
																		<div class="form-group">    
																				<label>New Password</label>
																				<input type="password">
																		</div>
																	</div>
																	<div class="col col3">
																		<div class="form-group">    
																			<label>Confirmed Password</label>
																			<input type="password">
																		</div>
																	</div>
																</div>
																 <div class="row max-cols-100">
																	<div class="col col12x2 right margin margin-top-small">
																		<div>
																			<input class="rounded rounded-medium" type="button" value="UPDATE">
																		</div>
																	</div>
																</div>      
															</div>
															<div id="3" class="tab-content padding padding-medium bkg bkg-white">
																<div class="row max-cols-50">
																	<div class="col col2">
																		<div class="form-group	">    
																				<label>Title*</label>
																				<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">
																			<label>Type</label>
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
																			<label>Line1*</label>
																			<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																			<label>Line2</label>
																			<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group	">    
																				<label>Countary*</label>
																				<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																				<label>State*</label>
																				<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																			<label>City*</label>
																			<span class="frm-icon-element icon-right">
																				  <i class="text text-gray-l cmti cmti-search"></i>
																				  <input type="text" placeholder="search">
																			</span>
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																			<label>Zip*</label>
																			<input type="text">
																		</div>
																	</div>
																	<div class="col col2">
																		<div class="form-group">    
																			<label>Phone</label>
																			<input type="text">
																		</div>
																	</div>
																</div>
																 <div class="row max-cols-100">
																	<div class="col col12x2 right">
																		<div>
																			<input class="rounded rounded-medium" type="button" value="ADD ADDRESS">
																		</div>
																	</div>
																</div> 
																<div class="text-with-line margin margin-small-v bkg bkg-white"></div>
																<div id="profile-message">
																	<div id="profile-hover-effects">
																		<div class="row max-cols-100">
																			<div class="col col2">
																				<div class="box box-basic">
																					<div class="box-content-wrap">
																						<div class="box-header-wrap">
																							<div class="box-header">
																								<div class="box-header-title">
																									<h6 class="text text-small">Office Address</h6>
																								</div>
																							</div>
																						</div>
																						<div class="box-content line-height line-height-small  width width-75">
																							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col col2">
																				<div class="box box-basic">
																					<div class="box-content-wrap">
																						<div class="box-header-wrap">
																							<div class="box-header">
																								<div class="box-header-title">
																									<h6 class="text text-small">Office Address</h6>
																								</div>
																							</div>
																						</div>
																						<div class="box-content line-height line-height-small width width-75">
																							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
