<?php
include __DIR__ . '/../includes/globals.php';

// Metas
$metas = [
	'title' => "Fields - $siteName", 'desc' => null, 'keywords' => null, 'robots' => null,
	'ogTitle' => null, 'ogSite' => null, 'ogUrl' => null, 'ogDesc' => null, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => null, 'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $baseUrl
];

// Sidebar
$sidebar = [ 'parent' => 'fields', 'child' => null ];
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
								<label>Form Input Text</label>
								<input type="text" placeholder="Write Here">
							</div>
						</div>
						<div class="col col2">
							<div class="form-group">
								<label>Form Input Search</label>
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-search"></i>
									<input type="text" placeholder="Search">
								</span>
							</div>
						</div>
					</div>
					<div class="row row-large max-cols-50 color color-secondary margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<label>Normal Input Text</label>
							<input type="text" placeholder="Write Here">
						</div>
						<div class="col col2">
							<label>Normal Input Search</label>
							<span class="frm-icon-element icon-right">
								<i class="cmti cmti-search"></i>
								<input type="text" placeholder="Search">
							</span>
						</div>
					</div>
					<div class="row row-large max-cols-50 form margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<div class="form-group">
								<label>Form Input Search</label>
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-search bkg bkg-tertiary text text-white"></i>
									<input type="text" placeholder="Search">
								</span>
							</div>
						</div>
						<div class="col col2">
							<div class="form-group">
								<label>Form Input Search</label>
								<span class="frm-icon-element icon-right">
									<i class="cmti cmti-search bkg bkg-green text text-white"></i>
									<input type="text" placeholder="Search">
								</span>
							</div>
						</div>
					</div>
					<div class="row row-large max-cols-50 color color-secondary margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<label>Normal Input Search</label>
							<span class="frm-icon-element">
								<i class="cmti cmti-search bkg bkg-green text text-white"></i>
								<input type="text" placeholder="Search">
							</span>
						</div>
						<div class="col col2">
							<label>Normal Input Search</label>
							<span class="frm-icon-element icon-right">
								<i class="cmti cmti-search bkg bkg-green text text-white"></i>
								<input type="text" placeholder="Search">
							</span>
						</div>
					</div>
					<div class="row row-large max-cols-50 color color-secondary margin margin-small-v padding padding-small-v">
						<div class="col col2">
							<div class="form-group">
								<div class="field-search-col">
									<input type="text" name="keywords" value="" placeholder="Keywords">
									<select class="cmt-select">
										<option value="select">Select Field</option>
										<option value="name">Name</option>
										<option value="title">Title</option>
										<option value="desc">Description</option>
										<option value="summary">Summary</option>
										<option value="content">Content</option>
									</select>
									<span class="btn btn-search">Search</span>
								</div>
							</div>
						</div>
						<div class="col col2">
							<div class="form-group">
								<div class="field-search-col">
									<input type="text" name="keywords" value="" placeholder="Keywords">
									<select class="cmt-select">
										<option value="select">Select Field</option>
										<option value="name">Name</option>
										<option value="title">Title</option>
										<option value="desc">Description</option>
										<option value="summary">Summary</option>
										<option value="content">Content</option>
									</select>
									<span class="btn btn-search bkg bkg-green text text-white">Search</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include "$includesPath/footers/public.php"; ?>
			</div>
		</div>
		<?php include "$includesPath/scripts/landing.php"; ?>
	</body>
</html>
