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
		<?php include "$includesPath/sidebars/components.php"; ?>
        <div class="container container-main">
	        <div class="content-wrap content-main-wrap">
				<div class="content color color-primary">
				</div>
				
			</div>
		</div>
                <?php include "$includesPath/footers/public.php"; ?>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
