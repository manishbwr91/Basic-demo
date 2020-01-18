<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Login | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();
$themePath		= Yii::getAlias( '@themes/basic' );
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Login' ] ]
];
?>
<div class="page-authentication-forms">				
	<div class="page page-basic cmt-block" cmt-block="block-full-mauto">
		<div class="page-bkg-fixed" style="background-image:url(<?= "$resourceUrl/images/back-main.jpg"?>);"></div>
			<div class="page-content-wrap content-90">
				<div class="page-header-wrap">
					<div class="page-header">
						<div id="small-icon" class="page-header-icon">
							<a href="<?= Url::to(['/'] ) ?>">
								<img class="fluid" src="<?= "$resourceUrl/images/logo-white.png" ?>" />
							</a>
						</div>
					</div>
				</div>
				<div class="page-content">
					<div class="row max-cols-50">
						<div class="col col12x8">
							<div id="small-title" class="page-content-title text text-white">
								<h3>Lorem Ispum Title</h3>
							</div>
						</div>
						<div class="col col12x4">
							<div id="box-login" class="page-content-data">
								<div class="box-basic">
									<div class="box-content-wrap align align-center form">
										<div class="box-header-wrap bkg bkg-white box-content">
											<div class="box-header">
												<h2>LOGIN</h2>
											</div>
										</div>
										<?php $form = ActiveForm::begin( [ 'id' => 'frm-login', 'class' => 'form-group' ] ); ?>
										<div class="box-content">
											<?= $form->field( $model, 'email' )->textInput( )->label( 'Email' ) ?>
											<?= $form->field( $model, 'password' )->passwordInput( array( [] ) )->label( 'Password') ?>
											<!--<div>
												<?= $form->field( $model, 'rememberMe' )->checkbox(['class' => 'align align-left ']) ?>
											</div>-->
											<div class="row max-cols-50 margin margin-top-medium">
												<div class="left">
													<?= Html::a( "Forgot Password ?", [ '/forgot-password' ] ) ?>
												</div>
												<div class='rounded rounded-small btn btn-small right'>
													<input type="submit" value="LOGIN" />
												</div>
											</div>
											<div class="margin margin-top-medium">
												<div class="text-with-line">
													<p class="text-content color color-white">OR LOGIN WITH</p>
												</div>
											</div>
											<div class="row	row-inline margin margin-top-small">
												<div class="menu-social">
													<a class="margin margin-right-small" href="https://www.facebook.com/" target="_blank">
														<i class="icon icon-border cmti cmti-1-5x cmti-social-facebook"></i>
													</a>
													<a href="https://www.twitter.com/" target="_blank">
														<i class="icon icon-border cmti cmti-1-5x cmti-social-twitter"></i>
													</a>
												</div>
											</div>
											<div class="text-with-line margin margin-top-small"></div>
											<div class="align align-center margin margin-top-small">
												<ul class="nav inline">
													<span>Dont have Account? </span><?= Html::a( "Sign Up Here", [ '/register' ]) ?>
												</ul>
											</div>
										</div>
										<?php ActiveForm::end(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			 <?php include "$themePath/views/footers/auth-form.php"; ?>
		</div>
	</div>
</div>
				
		


