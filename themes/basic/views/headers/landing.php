<?php
// Yii Imports
use yii\helpers\Url;
// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$user			= Yii::$app->core->getUser();

$menuItems = [
	[ 'label' => 'HOME', 'url' => '#block-slider-main', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'FEATURES', 'url' => '#block-second', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'ABOUT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'CONTACT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => '', 'url' => '#', 'urlOptions' => [ 'id' => 'btn-login','class' => 'cmti cmti-2x cmti-user-c' ] ]
	
];

$menuItems2 = [
	[ 'label' => 'HOME', 'url' => '#block-slider-main', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'FEATURES', 'url' => '#block-second', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'ABOUT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'CONTACT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => '', 'url' => ['/home'], 'urlOptions' => [ 'id' => '','class' => 'cmti cmti-2x cmti-user-c' ] ]
];

$menuItems3 = [
	[ 'label' => 'HOME', 'url' => '#block-slider-main', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'FEATURES', 'url' => '#block-second', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'ABOUT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'CONTACT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'Login', 'url' => ['/home'], 'urlOptions' => [ 'id' => '','class' => '' ] ]
];

$menu = [
	[ 'label' => 'HOME', 'url' => '#block-slider-main', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'FEATURES', 'url' => '#block-second', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'ABOUT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'CONTACT', 'url' => '#block-common', 'urlOptions' => [ 'class' => 'cmt-smooth-scroll smooth-scroll' ], 'options' => [ 'class' => ' smooth-scroll-wrap' ] ],
	[ 'label' => 'LOGIN', 'url' => ['/login'], 'urlOptions' => [ 'id' => ''] ],
];

?>
<?php if(!empty( $user)) {?>
<header class="landing-page-header">
	<div id="scroll-bkg" class=" header header-basic header-fixed">
		<div class="row">
			<div class="header-logo">
				<div  class="logo logo-desktop">
					<a href="<?= Url::to('/')?>">
						<img class="fluid" src="<?= "$resourceUrl/images/logo-white.png" ?>"/>
					</a>
				</div>
				<div id="logohide" class="logo logo-mobile">
					<a href="<?= Url::to('/')?>">
						<img class="fluid" src="<?= "$resourceUrl/images/mobile-logo-white.png" ?>"/>
					</a>
				</div>    
			</div>
			<ul  id="menu-main" class="nav">
				<div class="row">
					<?= BasicNav::widget([
						'items' => $menuItems2
					])?>
				</div>				
			</ul>
			<div id="mobile-actions">
				<span id="btn-menu-mobiles" class="mobile-action">
					<i class="cmti cmti-1x cmti-menu cmti-action text text-white"></i>
				</span>
			
				<div id="menu-mobile-wrap" class="relative">
					<ul id="menu-main-mobile" class="vnav">
						<?= BasicNav::widget([
							'items' => $menuItems3
						])?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<?php } else { ?>
	<header class="landing-page-header">
		<div id="scroll-bkg" class=" header header-basic header-fixed ">
			<div class="row">
				<div class="header-logo">
					<div  class="logo logo-desktop">
						<a href="<?= Url::to('/')?>">
							<img class="fluid" src="<?= "$resourceUrl/images/logo-white.png" ?>"/>
						</a>
					</div>
					<div id="logohide" class="logo logo-mobile">
						<a href="<?= Url::to('/')?>">
							<img class="fluid" src="<?= "$resourceUrl/images/mobile-logo-white.png" ?>"/>
						</a>
					</div>    
				</div>
				<ul  id="menu-main" class="nav">
					<div class="row">
						<?= BasicNav::widget([

							'items' => $menuItems

						])?>

					</div>				
				</ul>
				<div id="mobile-actions">
					<span id="btn-menu-mobiles" class="mobile-action">
						<i class="cmti cmti-1x cmti-menu cmti-action text text-white"></i>
					</span>

					<div id="menu-mobile-wrap" class="relative">
						<ul id="menu-main-mobile" class="vnav">
							<?= BasicNav::widget([
									'items' => $menu
								])?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php }?>
