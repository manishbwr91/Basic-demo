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
							<div class="row row-inline"> 
								<div class="align algin-left col col12x10">
									<div class="page-content-wrap">
										<div class="page-header-wrap">
											<div class="page-header">
												<div class="page-header-title">
													<h6 class="text text-small">Reminders</h6>
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
														<table class="table table-hover table wrap-table margin margin-top-small bkg bkg-white">
															<thead>
																<th>
																	<div class="cmt-choice">
																		<label>
																			<input type="checkbox" name="choice2"/>
																			<span class="label"></span>
																		</label>
																	</div>
																</th>
																<th>Title/Description</th>
																<th>Date</th>
																<th>Actions</th>
															</thead>
															
															<tbody>
																<tr>
																	<td>
																		<div class="cmt-choice">
																			<label>
																				<input type="checkbox" name="choice2"/>
																				<span class="label"></span>
																			</label>
																		</div>
																	</td>
																	<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																	<td>Jan 26 2018</td>
																	<td>
																		<span><a href="#"><i class="cmti cmti-social-gmail"></i></a></span>
																		<span><a href="#"><i class="cmti cmti-close-c"></i></a></span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="cmt-choice">
																			<label>
																				<input type="checkbox" name="choice2"/>
																				<span class="label"></span>
																			</label>
																		</div>
																	</td>
																	<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																	<td>Jan 26 2018</td>
																	<td>
																		<span><a href="#"><i class="cmti cmti-social-gmail"></i></a></span>
																		<span><a href="#"><i class="cmti cmti-close-c"></i></a></span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="cmt-choice">
																			<label>
																				<input type="checkbox" name="choice2"/>
																				<span class="label"></span>
																			</label>
																		</div>
																	</td>
																	<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																	<td>Jan 26 2018</td>
																	<td>
																		<span><a href="#"><i class="cmti cmti-social-gmail"></i></a></span>
																		<span><a href="#"><i class="cmti cmti-close-c"></i></a></span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="cmt-choice">
																			<label>
																					<input type="checkbox" name="choice2"/>
																				<span class="label"></span>
																			</label>
																		</div>
																	</td>
																	<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
																	<td>Jan 26 2018</td>
																	<td>
																		<span><a href="#"><i class="cmti cmti-social-gmail"></i></a></span>
																		<span><a href="#"><i class="cmti cmti-close-c"></i></a></span>
																	</td>
																</tr>
															 </tbody>
														</table>
														
														<div class="margin margin-top-medium">
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
																	<span class="rounded rounded-medium"><i class="icon cmti cmti-chevron-right"></i></span>
																</li>
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
					</div>
				</div>
			</div>
		</div>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
