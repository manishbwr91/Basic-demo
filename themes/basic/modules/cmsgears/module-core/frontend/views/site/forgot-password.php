<?php
// Yii Imports
use yii\helpers\Url;
use yii\helpers\Html;
// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Forgot Password | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();
$themePath		= Yii::getAlias( '@themes/basic' );
$otp	= true;
$otpUrl	= '/reset-password-otp';

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Forgot Password' ] ]
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
												<h2>FORGOT PASSWORD</h2>
											</div>
											<div class="box-header-title">
												<div class="padding padding-top-medium reader text text-large-5">
													<p>
														Enter your registered email below.<br>
														we'll send you mail with link to reset your password.
													</p>
												</div>
											</div>
										</div>
										<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
											<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
										<?php } else {

												$form = ActiveForm::begin( [ 'id' => 'frm-forgot-password' ] );
										?>
												<?= $form->field( $model, 'email' )->textInput( [  ] )->label( 'Email' ) ?>
										<div class="box-content">
											<div class="row max-col-50 margin margin-top-small">
												<div class="right">
													<input type="button" class="btn btn-small rounded rounded-small" value="SUBMIT" value="testuser1@mail.com"/>
												</div>
												<div class="left text text-large-5">
													<p>Get OTP on registered mobile.</p>
												</div>
												<div class="left text text-large-5">
													<p class="padding padding-small-v"><a href="<?= Url::toRoute( [ '/reset-password-otp' ] ) ?>">Click here</a> to receive OTP.</p>
												</div>
											</div>
											<?php
												if( $otp && Yii::$app->smsManager->isOTP() ) {
											?>
												<div class="text-with-line">
													<p class="text-content color color-white">OR</p>
												</div>
											<?php
												}
													ActiveForm::end();
												}
											?>
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
