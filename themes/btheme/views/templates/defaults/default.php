<?php include __DIR__ . '/includes/globals.php'; ?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<!-- Use minimum-scale=1.0, maximum-scale=1.0, user-scalable=no for mobile applications -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Page -->
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="">

		<!-- Social -->
		<meta property="og:title" content="">
		<meta property="og:site_name" content="">
		<meta property="og:url" content="">
		<meta property="og:description" content="">
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:image" content="">
		<meta property="og:image:width" content="320">
		<meta property="og:image:height" content="180">
		<meta property="og:image:type" content="2">
		<meta name="twitter:card" content="summary_large_image">
		<link rel="canonical" href="">

		<!-- Title -->
		<title>Home - <?= $siteName ?></title>

		<!-- IE fix for console -->
		<script type="text/javascript"> if ( !window.console ) console = { log: function() {} }; </script>

		<!-- App Icons -->
		<link href="<?= $resourceUrl ?>/images/icons/favicon.ico" rel="shortcut icon">
		<link href="<?= $resourceUrl ?>/images/icons/apple-icon-precomposed.png" rel="apple-touch-icon-precomposed">

		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="<?= $resourceUrl ?>/styles/breeze-icons-core.min.css">
		<link rel="stylesheet" type="text/css" href="<?= $resourceUrl ?>/styles/main.css">
	</head>
	<body id="scroll-top">
		<h1 class="hidden">SEO summary</h1>
		<div id="pre-loader-main" class="pre-loader valign-center align align-center">
			<div class="spinner cmti cmti-3x cmti-spinner-1 spin"></div>
		</div>
		<?php include __DIR__ . '/includes/headers/public.php'; ?>
        <div class="container container-main">
	        <div class="content-wrap content-main-wrap">
				<div class="content">

				</div>
			</div>
		</div>
		<?php include __DIR__ . '/includes/footers/public.php'; ?>
		<script src="<?= $resourceUrl ?>scripts/vendor/jquery.min.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/jquery-ui.min.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/foxslider-core.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/imagesloaded.pkgd.min.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/handlebars.min.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/Chart.min.js"></script>
		<script src="<?= $resourceUrl ?>scripts/vendor/velocity.js"></script>
		<script src="<?= $resourceUrl ?>scripts/main.js"></script>
	</body>
</html>
