<?php
include __DIR__ . '/includes/globals.php';

$metas = [
	'title' => "Colors - $siteName", 'desc' => null, 'keywords' => null, 'robots' => null,
	'ogTitle' => null, 'ogSite' => null, 'ogUrl' => null, 'ogDesc' => null, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => null, 'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $baseUrl
];
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
		<h1 class="hidden">The color palette used for theming purpose. It follows 3-color scheme of breeze framework with additional colors.</h1>
		<?php include "$includesPath/components/spinners/main.php"; ?>
		<?php include "$includesPath/headers/public.php"; ?>
        <div class="container container-main">
	        <div class="content-wrap content-main-wrap">
				<div class="content align align-center">
					<div class="row max-cols-100 margin margin-small-v">
						<div class="col col3 border border-default-l padding padding-default">
							<div class="h3 margin margin-small-v">Primary</div>
							<div class="row text text-small">
								<div class="col col3">
									<div class="h5 margin margin-small-v">Regular</div>
									<div class="width width-100 height height-small border border-default-l color color-primary margin margin-bottom-small">
										<p class="valign-center">#F4F6F8<br>$color-primary</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-primary">
										<p class="valign-center">#495666<br>$color-primary-text</p>
									</div>
								</div>
								<div class="col col3">
									<div class="h5 margin margin-small-v">Light</div>
									<div class="width width-100 height height-small border border-default-l color color-primary-l margin margin-bottom-small">
										<p class="valign-center reader">#FFFFFF<br>$color-primary-l</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-primary-l">
										<p class="valign-center reader">#495666<br>$color-primary-text-l</p>
									</div>
								</div>
								<div class="col col3">
									<div class="h5 margin margin-small-v">Dark</div>
									<div class="width width-100 height height-small border border-default-l color color-primary-d margin margin-bottom-small">
										<p class="valign-center reader">#495666<br>$color-primary-d</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-primary-d">
										<p class="valign-center reader">#FFFFFF<br>$color-primary-text-d</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col col3 border border-default-l padding padding-default">
							<div class="h3 margin margin-small-v">Secondary</div>
							<div class="row text text-small">
								<div class="col col3">
									<div class="h5 margin margin-small-v">Regular</div>
									<div class="width width-100 height height-small border border-default-l color color-secondary margin margin-bottom-small">
										<p class="valign-center">#E6E9EF<br>$color-secondary</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-secondary">
										<p class="valign-center">#495666<br>$color-secondary-text</p>
									</div>
								</div>
								<div class="col col3">
									<div class="h5 margin margin-small-v">Light</div>
									<div class="width width-100 height height-small border border-default-l color color-secondary-l margin margin-bottom-small">
										<p class="valign-center reader">#FFFFFF<br>$color-secondary-l</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-secondary-l">
										<p class="valign-center reader">#A5A5A5<br>$color-secondary-text-l</p>
									</div>
								</div>
								<div class="col col3">
									<div class="h5 margin margin-small-v">Dark</div>
									<div class="width width-100 height height-small border border-default-l color color-secondary-d margin margin-bottom-small">
										<p class="valign-center reader">#495666<br>$color-secondary-d</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-secondary-d">
										<p class="valign-center reader">#FFFFFF<br>$color-secondary-text-d</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col col3 border border-default-l padding padding-default">
							<div class="h3 margin margin-small-v">Tertiary</div>
							<div class="row text text-small">
								<div class="col col3">
									<div class="h5 margin margin-small-v">Regular</div>
									<div class="width width-100 height height-small border border-default-l color color-tertiary margin margin-bottom-small">
										<p class="valign-center">#4C7EBB<br>$color-tertiary</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-tertiary">
										<p class="valign-center">#FFFFFF<br>$color-tertiary-text</p>
									</div>
								</div>
								<div class="col col3">
									<div class="h5 margin margin-small-v">Light</div>
									<div class="width width-100 height height-small border border-default-l color color-tertiary-l margin margin-bottom-small">
										<p class="valign-center reader">#FFFFFF<br>$color-tertiary-l</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-tertiary-l">
										<p class="valign-center reader">#4C7EBB<br>$color-tertiary-text-l</p>
									</div>
								</div>
								<div class="col col3">
									<div class="h5 margin margin-small-v">Dark</div>
									<div class="width width-100 height height-small border border-default-l color color-tertiary-d margin margin-bottom-small">
										<p class="valign-center reader">#3971A8<br>$color-tertiary-d</p>
									</div>
									<div class="width width-100 height height-small border border-default-l color color-tertiary-d">
										<p class="valign-center reader">#FFFFFF<br>$color-tertiary-text-d</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Field Colors</div>
						<div class="h5 margin margin-small-v">Refer the <a href="<?= "$baseUrl/components.php" ?>">components page</a>.</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Button Colors</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-btn margin margin-bottom-small">
									<p class="valign-center reader">#4C7EBB<br>$color-btn</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-btn">
									<p class="valign-center reader">#FFFFFF<br>$color-btn-text</p>
								</div>
							</div>
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-btn-h margin margin-bottom-small">
									<p class="valign-center reader">#4C7EBB<br>$color-btn-h</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-btn-h">
									<p class="valign-center reader">#FFFFFF<br>$color-btn-text-h</p>
								</div>
							</div>
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-btn-a margin margin-bottom-small">
									<p class="valign-center reader">#3972A8<br>$color-btn-a</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-btn-a">
									<p class="valign-center reader">#FFFFFF<br>$color-btn-text-a</p>
								</div>
							</div>
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-btn-d margin margin-bottom-small">
									<p class="valign-center reader">#808080<br>$color-btn-d</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-btn-d">
									<p class="valign-center reader">#363636<br>$color-btn-text-d</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Borders</div>
						<div class="row row-large max-cols-50 margin margin-small-v padding padding-small bkg bkg-white">
							<div class="col col3">
								<div class="width width-100 height height-small border border-default">
									<p class="valign-center reader">#EAEAEA<br>$color-border</p>
								</div>
							</div>
							<div class="col col3">
								<div class="width width-100 height height-small border border-default-l">
									<p class="valign-center reader">#F4F4F4<br>$color-border-l</p>
								</div>
							</div>
							<div class="col col3">
								<div class="width width-100 height height-small border border-default-d">
									<p class="valign-center reader">#D1D2D3<br>$color-border-d</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Additional Colors</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-header">
									<p class="valign-center reader">#FFFFFF<br>$color-header</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-header">
									<p class="valign-center reader">#495666<br>$color-header-text</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-footer">
									<p class="valign-center reader">#FFFFFF<br>$color-footer</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-footer">
									<p class="valign-center reader">#495666<br>$color-footer-text</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l bkg bkg-white text text-link">
									<p class="valign-center reader">#4C7EBB<br>$color-link</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Special Colors</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-aqua">
									<p class="valign-center reader">#8AE2E3<br>$color-aqua</p>
								</div>
							</div>
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-golden">
									<p class="valign-center reader">#E9C011<br>$color-golden</p>
								</div>
							</div>
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-silver">
									<p class="valign-center reader">#E7E8E7<br>$color-silver</p>
								</div>
							</div>
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-maroon">
									<p class="valign-center reader">#542628<br>$color-maroon</p>
								</div>
							</div>
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-olive">
									<p class="valign-center reader">#A3A54C<br>$color-olive</p>
								</div>
							</div>
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-lime">
									<p class="valign-center reader">#D3F235<br>$color-lime</p>
								</div>
							</div>
							<div class="col col7">
								<div class="width width-100 height height-small border border-default-l color color-navy">
									<p class="valign-center reader">#003653<br>$color-navy</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Standard Colors</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-white">
									<p class="valign-center reader">#FFFFFF<br>$color-white</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-gray-l">
									<p class="valign-center reader">#A5A5A5<br>$color-gray-l</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-gray">
									<p class="valign-center reader">#7F7F7F<br>$color-gray</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-gray-d">
									<p class="valign-center reader">#595959<br>$color-gray-d</p>
								</div>
							</div>
							<div class="col col5">
								<div class="width width-100 height height-small border border-default-l color color-black">
									<p class="valign-center reader">#000000<br>$color-black</p>
								</div>
							</div>
						</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-blue-l">
									<p class="valign-center reader">#1E96FF<br>$color-blue-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-blue">
									<p class="valign-center reader">#0074D9<br>$color-blue</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-blue-d">
									<p class="valign-center reader">#0059A6<br>$color-blue-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-purple-l">
									<p class="valign-center reader">#AA7AD4<br>$color-purple-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-purple">
									<p class="valign-center reader">#8946C4<br>$color-purple</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-purple-d">
									<p class="valign-center reader">#663096<br>$color-purple-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-orange-l">
									<p class="valign-center reader">#FFA95F<br>$color-orange-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-orange">
									<p class="valign-center reader">#FF851B<br>$color-orange</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-orange-d">
									<p class="valign-center reader">#E76B00<br>$color-orange-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-yellow-l">
									<p class="valign-center reader">#FFE544<br>$color-yellow-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-yellow">
									<p class="valign-center reader">#FFDC00<br>$color-yellow</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-yellow-d">
									<p class="valign-center reader">#DDBF00<br>$color-yellow-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-red-l">
									<p class="valign-center reader">#FF6158<br>$color-red-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-red">
									<p class="valign-center reader">#FF4136<br>$color-red</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-red-d">
									<p class="valign-center reader">#F10D00<br>$color-red-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-pink-l">
									<p class="valign-center reader">#EC64A1<br>$color-pink-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-pink">
									<p class="valign-center reader">#E4287C<br>$color-pink</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-pink-d">
									<p class="valign-center reader">#B2165C<br>$color-pink-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-magenta-l">
									<p class="valign-center reader">#F600F6<br>$color-magenta-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-magenta">
									<p class="valign-center reader">#B200B2<br>$color-magenta</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-magenta-d">
									<p class="valign-center reader">#6E006E<br>$color-magenta-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-green-l">
									<p class="valign-center reader">#9FCF4B<br>$color-green-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-green">
									<p class="valign-center reader">#7CAA2D<br>$color-green</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-green-d">
									<p class="valign-center reader">#55741F<br>$color-green-d</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-brown-l">
									<p class="valign-center reader">#C7631B<br>$color-brown-l</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-brown">
									<p class="valign-center reader">#8B4513<br>$color-brown</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-brown-d">
									<p class="valign-center reader">#4F270B<br>$color-brown-d</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Mood Colors</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-error">
									<p class="valign-center reader">#E74343<br>$color-error</p>
								</div>
							</div>
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-warning">
									<p class="valign-center reader">#EF9300<br>$color-warning</p>
								</div>
							</div>
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-success">
									<p class="valign-center reader">#A5D75A<br>$color-success</p>
								</div>
							</div>
							<div class="col col4">
								<div class="width width-100 height height-small border border-default-l color color-info">
									<p class="valign-center reader">#A5A5A5<br>$color-info</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content align align-center row">
					<div class="col col1 margin margin-small-v border border-default-l">
						<div class="h3 margin margin-small-v">Social Colors</div>
						<div class="row max-cols-50 margin margin-small-v">
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-dropbox margin margin-bottom-small">
									<p class="valign-center reader">#007EE5<br>$color-dropbox</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-quora">
									<p class="valign-center reader">#3B5998<br>$color-quora</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-facebook margin margin-bottom-small">
									<p class="valign-center reader">#1E96FF<br>$color-facebook</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-snapchat">
									<p class="valign-center reader">#FFFC00<br>$color-snapchat</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-flickr margin margin-bottom-small">
									<p class="valign-center reader">#FF0084<br>$color-flickr</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-twitter">
									<p class="valign-center reader">#00ACED<br>$color-twitter</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-foursquare margin margin-bottom-small">
									<p class="valign-center reader">#0072B1<br>$color-foursquare</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-tumblr">
									<p class="valign-center reader">#32506D<br>$color-tumblr</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-google margin margin-bottom-small">
									<p class="valign-center reader">#DD4B39<br>$color-google</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-vimeo">
									<p class="valign-center reader">#AAD450<br>$color-vimeo</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-instagram margin margin-bottom-small">
									<p class="valign-center reader">#125688<br>$color-instagram</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-vine">
									<p class="valign-center reader">#00BF8F<br>$color-vine</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-linkedin margin margin-bottom-small">
									<p class="valign-center reader">#007BB6<br>$color-linkedin</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-whatsapp">
									<p class="valign-center reader">#43D854<br>$color-whatsapp</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-pintrest margin margin-bottom-small">
									<p class="valign-center reader">#CB2027<br>$color-pintrest</p>
								</div>
								<div class="width width-100 height height-small border border-default-l color color-youtube">
									<p class="valign-center reader">#BB0000<br>$color-youtube</p>
								</div>
							</div>
							<div class="col col9">
								<div class="width width-100 height height-small border border-default-l color color-vk margin margin-bottom-small">
									<p class="valign-center reader">#45668E<br>$color-vk</p>
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
