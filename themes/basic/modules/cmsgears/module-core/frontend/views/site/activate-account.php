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
$themePath		= Yii::getAlias( '@themes/basic' ); 
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
									<div class="box-header-wrap bkg bkg-white">
										<div class="box-header">
											<h2>Activate Account</h2>
										</div>
									</div>
									<div class="box-content">
										<?= $form->field( $model, 'email' )->label( 'Email' ) ?>
										<?= $form->field( $model, 'password' )->passwordInput( [  ] )->label( 'Password' ) ?>
										<?= $form->field( $model, 'password_repeat' )->passwordInput([  ] )->label( 'Confirm Password' ) ?>
										<div class="align align-right margin margin-top-small">
											<input type="submit" value="ACTIVATE" class="btn btn-medium rounded rounded-small"/>
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
