<?php
include __DIR__ . '/../includes/globals.php';

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
		<h1 class="hidden">It shows the UI components available within the Basic Theme.</h1>
		<?php include "$includesPath/components/spinners/main.php"; ?>
		<?php include "$includesPath/headers/public.php"; ?>
        <div class="container container-main">
	        <div class="content-wrap content-main-wrap ">
				<div class="content color color-primary">
					<div class="page page-basic cmt-block" cmt-block="block-qtf-mauto">
						<div class="page-content-wrap content-90">								
							<div class="page-content">
								<div class="row row-inline">
									<div class="page-content-title">
										<div class="filler-height filler-height-large"></div>
										<h5 class="bold">404</h5>
										<div class="filler-height filler-height-small"></div>
										<h6 class="bold text text-micro">The page you are looking for cannot be found</h6>
									</div>
									<div class="filler-height filler-height-large"></div>
									<img class="fluid" src="<?= "$resourceUrl/images/error.png" ?>"/>
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
