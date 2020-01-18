<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Activate Account | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();
$themePath      = Yii::getAlias( '@themes/basic' );
$mobileRequired	= false;
$intlTelInput	= true;
$intlTelCcode	= 'us';
$mobileRequired	= isset( $mobileRequired ) ? $mobileRequired : true;
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Activate Account' ] ]
];
?>
	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p>
	<?php
		}
	
	else {

	$form = ActiveForm::begin( ['id' => 'frm-activate-account'] );
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
										<div class="row">
											<?php if( empty( $mobile ) || !empty( $merror ) ) { ?>
											<div class="box-header-wrap bkg bkg-white">
												<div class="box-header">
													<h2>FORGOT PASSWORD</h2>
												</div>
												<div class="box-header-title">
													<div class="margin margin-top-medium line-height line-height-medium">
														Enter your registered email below.<br>
														we'll send you an OTP.Carrier rates may apply.
													</div>
												</div>
											</div>
											<div class="form-group">
												<div id="forgotpassword">
													<div class="field-search-col">
														<label>Registered Mobile*</label>
														<input class="" type="text" name="mobile" placeholder="" value="<?= $mobile ?>" />
														<?php if( !empty( $merror ) ) { ?>
															<p class="error"><?= $merror ?></p>
														<?php } ?>
														<select class="cmt-select">
															<option>+91</option>
															<option>93</option>
															<option>95</option>
															<option>66</option>
															<option>65</option>
															<option>89</option>
														</select>
													</div>
												</div>
											</div>	
										<?php } else { ?>
											<input type="hidden" name="mobile" value="<?= $mobile ?>" />
											<input type="hidden" name="status" value="<?= $status ?>" />
											<div class="box-header-wrap bkg bkg-white">
												<div class="box-header">
													<h2>Verify Mobile</h2>
												</div>
												<div class="box-header-title">
													<div class="margin margin-top-medium reader text text-large-5">
														Please provide the 6 digit OTP sent to your.<br>
														mobile number  <?= $mobile ?>
													</div>
												</div>
											</div>
											<div class="row">
												<div id="divOuter">
													<div id="divInner">
														<input id="seprate" type="text" maxlength="6" />
													</div>
												</div>
											</div>
										<?php } ?>
											<div class="row max-cols-50 margin margin-top-small">
												<div class="right">
													<input class="rounded rounded-medium btn btn-small" type="submit" value="SUBMIT">
												</div>
												<div class="left text text-large-5">
													<p>Did not get code?</p>
												</div>
												<div class="text text-large-5 left margin margin-top-default">
													<a href="<?= Url::toRoute( [ '/forgot-password' ] ) ?>">Use email to reset password</a></p>
												</div>
													<!-- <div class="left">
													<a class=" left" href="<?= Url::toRoute( [ '/login' ] ) ?>">Login</a>
												</div>-->
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
				
<?php
		ActiveForm::end();
	}
?>

