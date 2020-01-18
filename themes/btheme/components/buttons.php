<?php
include __DIR__ . '/../includes/globals.php';

// Metas
$metas = [
	'title' => "Buttons - $siteName", 'desc' => null, 'keywords' => null, 'robots' => null,
	'ogTitle' => null, 'ogSite' => null, 'ogUrl' => null, 'ogDesc' => null, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => null, 'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $baseUrl
];

// Sidebar
$sidebar = [ 'parent' => 'buttons', 'child' => null ];
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
					<div class="row row-large max-cols-50 form margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<div class="form-group">
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-login bkg bkg-green text text-white"></i>
									<input type="submit" value="Form Submit">
								</span>
							</div>
						</div>
						<div class="col col2">
							<div class="form-group">
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-login text text-white"></i>
									<input type="submit" value="Form Submit">
								</span>
							</div>
						</div>
					</div>
					<div class="row row-large max-cols-50 color color-secondary margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<div class="form-group">
								<span class="frm-icon-element">
									<i class="cmti cmti-login text text-white"></i>
									<input type="submit" value="Normal Submit">
								</span>
							</div>
						</div>
						<div class="col col2">
							<div class="form-group">
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-login text text-white"></i>
									<input type="submit" value="Normal Submit">
								</span>
							</div>
						</div>
					</div>
					<div class="row row-large max-cols-50 color color-secondary margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<div class="form-group">
								<span class="frm-icon-element">
									<i class="cmti cmti-login bkg bkg-green text text-white"></i>
									<input type="submit" value="Normal Submit">
								</span>
							</div>
						</div>
						<div class="col col2">
							<div class="form-group">
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-login bkg bkg-green text text-white"></i>
									<input type="submit" value="Normal Submit">
								</span>
							</div>
						</div>
					</div>
					<div class="row row-large max-cols-50 color color-secondary margin margin-small-v padding padding-small-v">
						<div class="col col1">
							<input class="frm-element-small" type="button" value="Small">
							<input class="frm-element-medium" type="button" value="Medium">
							<input class="frm-element-large" type="button" value="Large">
							<input class="frm-element-xlarge" type="button" value="Large">
						</div>
					</div>
				</div>
				
			</div>
		</div>
                <?php include "$includesPath/footers/public.php"; ?>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
