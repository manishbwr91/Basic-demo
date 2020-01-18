<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Register | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();
$themePath		= Yii::getAlias( '@themes/basic' );
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Register' ] ]
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
									<div class="box-header-wrap bkg bkg-white">
										<div class="box-header">	
											<h2>SIGN UP</h2>
										</div>
									</div>
									<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
										<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
									<?php
									}
									else {

										$form = ActiveForm::begin( ['id' => 'frm-registration', 'class' => 'padding padding-small right' ] );

										$terms = "I agree to the " . Html::a( "Terms", [ '/terms' ], null ) . " and " . Html::a( "Privacy Policy", [ '/privacy' ], null ) . ".";
									?>
									<div class="box-content">	
											<?= $form->field( $model, 'email' )->textInput( )->label( 'Email' ) ?>
											<?= $form->field( $model, 'password' )->passwordInput( )->label( 'Password' ) ?>
											<?= $form->field( $model, 'password_repeat' )->passwordInput( )->label( 'Confirm Password' ) ?>
											<div class="row max-cols-50 margin margin-top-default">
												<div class="align align-left">
													<?= $form->field( $model, 'terms' )->checkbox( [ 'label' => $terms ] ) ?>
												</div>
												<div class="align align-right">
													<input class="rounded rounded-medium btn btn-small" type="submit" value="SIGN UP">
												</div>
											</div>
											<div class="margin margin-top-small">
												<div class="text-with-line">
													<p class="text-content bkg bkg-white">OR LOGIN WITH</p>
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
											<?php
													ActiveForm::end();
												}
											?>
											<div class="align align-center margin margin-top-small">
												<ul class="nav inline">
													<span>Already have an account? </span>
													<li>
														<?= Html::a( "Login Here", [ '/login' ] ) ?>
													</li>
												</ul>
											</div>
										</div>
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
