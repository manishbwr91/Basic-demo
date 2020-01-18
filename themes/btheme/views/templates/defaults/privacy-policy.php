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
					<div id="privacy-policy" >
						<div class="page page-basic cmt-block" cmt-block="block-qtf-mauto">
							<div class="page-content-wrap content-90">								
								<div class="page-content">
									<div class="page-content-title">
										<h6>Privacy Policy/T&C/FAQ</h6>
									</div>
									<div class="page-content-data">
										<p class="line-height line-height-medium">
											Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
										</p>
										<p class="line-height line-height-medium padding padding-top-small">
											Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
											random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
										</p>
									</div>
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
