<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;
// CMG Imports
use cmsgears\widgets\nav\BasicNav;

$menuItems = [
	[ 'label' => 'HOME', 'url' => Url::toRoute( [ '/' ], false ) ],
	[ 'label' => 'CONTACT', 'url' => Url::toRoute( [ '/form/contact-us' ], true ) ],
	[ 'label' => 'DESHBOARD', 'url' => Url::toRoute( [ '/home' ], true ) ],
	[ 'label' => 'LOGOUT', 'url' => Url::toRoute( [ '/logout' ], true ) ]
	
];

$menuItems2 = [
	[ 'label' => 'HOME', 'url' => Url::toRoute( [ '/' ], false ) ],
	[ 'label' => 'CONTACT', 'url' => Url::toRoute( [ '/form/contact-us' ], true ) ],
	[ 'label' => 'LOGIN', 'url' => Url::toRoute( [ '/login' ], true ) ],
	[ 'label' => 'REGISTER', 'url' => Url::toRoute( [ '/register' ], true ) ]
	
];
?>
<?php if(!empty( $user)) {?>
<header id="header-main" class="header header-basic header-basic-duo header-fixed shadow shadow-primary">
	<div class="row">
		<div class="header-logo">
			<div class="logo logo-desktop">
				<?= Html::a( "<img class=\"logo\" src=\"$resourceUrl/images/logo5.png\">", [ '/' ], null ) ?>
			</div>
			<div class="logo-small logo logo-mobile">
				<?= Html::a( "<img src=\"$resourceUrl/images/mobile-logo1.png\">", [ '/' ], null ) ?>
			</div>
		</div>
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main', 'class' => 'nav' ],
			'items' => $menuItems
		])?>
		<div id="mobile-actions">
			<span id="btn-menu-mobile" class="mobile-action">
				<i class="cmti cmti-menu cmti-action"></i>
			</span>
		</div>
	</div>
	<div id="menu-mobile-wrap" class="relative">
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main-mobile', 'class' => 'vnav' ],
			'items' => $menuItems
		])?>
	</div>
</header>
<?php } else { ?>
<header id="header-main" class="header header-basic header-basic-duo header-fixed shadow shadow-primary">
	<div class="row">
		<div class="header-logo">
			<div class="logo logo-desktop">
				<?= Html::a( "<img class=\"logo\" src=\"$resourceUrl/images/logo5.png\">", [ '/' ], null ) ?>
			</div>
			<div class="logo-small logo logo-mobile">
				<?= Html::a( "<img src=\"$resourceUrl/images/mobile-logo1.png\">", [ '/' ], null ) ?>
			</div>
		</div>
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main', 'class' => 'nav' ],
			'items' => $menuItems2
		])?>
		<div id="mobile-actions">
			<span id="btn-menu-mobile" class="mobile-action">
				<i class="cmti cmti-menu cmti-action"></i>
			</span>
		</div>
	</div>
	<div id="menu-mobile-wrap" class="relative">
		<?= BasicNav::widget([
			'options' => [ 'id' => 'menu-main-mobile', 'class' => 'vnav' ],
			'items' => $menuItems2
		])?>
	</div>
</header>
<?php }?>