<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\widgets\ActiveForm;
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Reset Password | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();
$themePath      = Yii::getAlias('@themes/basic');
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Reset Password' ] ]
];
?>
	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<div class="frm-message"><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
	<?php
		}
		else 
		{
		$form = ActiveForm::begin( [ 'id' => 'frm-reset-password' ,'class' => 'form-group padding padding-default' ] );
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
				<div class="row max-cols-100">
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
											<h2>RESET PASSWORD</h2>
										</div>
									</div>
										<?= $form->field( $model, 'email' )->textInput( [  ] )->label( 'Email' ) ?>
										<?= $form->field( $model, 'password' )->passwordInput( [ ] )->label( 'Password' ) ?>
										<?= $form->field( $model, 'password_repeat' )->passwordInput( [  ] )->label( 'Repeat Password' ) ?>
									<div class="align align-right margin margin-top-default">
										<input type="submit" value="Reset" class="btn btn-small rounded rounded-small"/>
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
		
		
