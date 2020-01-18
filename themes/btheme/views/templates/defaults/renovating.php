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
		<h1 class="hidden">It shows the UI components available within the Basic Theme.</h1>
		<?php include "$includesPath/components/spinners/main.php"; ?>
		<?php include "$includesPath/headers/public.php"; ?>
        <div class="container container-main">
	        <div class="content-wrap content-main-wrap">
				<div class="content color color-primary">
					<div class="row row-inline max-cols-100">
						<div class="col col1">
							<div class="filler-height filler-height-medium"></div>
							<h1 class="bold text text-secondary align align-center text text-medium">We Are Renovating !</h1>
							<div class="filler-height filler-height-small"></div>
							<h5 class="bold text text-secondary">Please Visit Later</h5>
							<div class="filler-height filler-height-small"></div>
							<img class="fluid" src="<?= "$resourceUrl/images/renovating.png" ?>" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="height height-20"></div>
				<?php include "$includesPath/footers/public.php"; ?>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
