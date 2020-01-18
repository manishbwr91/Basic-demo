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
							<div class="row row-inline max-col-100s"> 
								<div class="align algin-left col col12x10">
									<div class="page-content-wrap">
										<div class="page-header-wrap">
											<div class="page-header">
												<div class="page-header-title">
													<h6 class="text text-small">Deshboard</h6>
												</div>
											</div>
										</div>
										<div class="page-content">
											<div id="profile-message">
												<div class="box box-basic">
													<div class="box-content-wrap rounded rounded-medium shadow shadow-black">
														<div class="box-header-wrap">
															<div class="box-header-title">
																<div class="bold">Demo Message</div>
															</div>
														</div>
														<div class="box-content">
															<p class="text text-large-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														</div>
													</div>
												</div>
											</div>
											<h4>Recent Activities</h4>
											<table class="table table-hover table wrap-table margin margin-top-default bkg bkg-white">
												<thead>
													<th>Title</th>
													<th>Description</th>
													<th>Date</th>
												</thead>
												<tbody>
													<tr>
														<td>Lorem Ispum has been</td>
														<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
														<td>Jan 26 2018</td>
													</tr>
													<tr>
														<td>Lorem Ispum has been</td>
														<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
														<td>Jan 26 2018</td>
													</tr>
													<tr>
														<td>Lorem Ispum has been</td>
														<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
														<td>Jan 26 2018</td>
													</tr>
													<tr>
														<td>Lorem Ispum has been</td>
														<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
														<td>Jan 26 2018</td>
													</tr>
													<tr>
														<td>Lorem Ispum has been</td>
														<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
														<td>Jan 26 2018	</td>
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
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
