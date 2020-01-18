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

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Register' ] ]
];
?>
<?php BasicBlock::begin([
	'options' => [ 'id' => 'block-public', 'class' => 'cmt-block block block-basic', 'cmt-block' => 'block-qtf-auto' ],
	'bkg' => true, 'bkgUrl' => "$resourceUrl/images/banner-site.jpg",
	'texture' => true, 'textureClass' => 'texture-default',
	'header' => true, 'headerContent' => '<h2 class="align align-center">Register</h2>',
	'boxWrapClass' => 'center', 'content' => true
]);?>

	<?php if( Yii::$app->session->hasFlash( "message" ) ) { ?>
		<div class='frm-message'><p> <?php echo Yii::$app->session->getFlash( "message" ); ?> </p></div>
	<?php
		}
		else {

			$form = ActiveForm::begin( ['id' => 'frm-registration' ] );

			$terms = "I agree to the " . Html::a( "Terms", [ '/terms' ], null ) . " and " . Html::a( "Privacy Policy", [ '/privacy' ], null ) . ".";
	?>
	    	<?= $form->field( $model, 'email' )->textInput( [ 'placeholder' => 'Email*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password' )->passwordInput( [ 'placeholder' => 'Password*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'password_repeat' )->passwordInput([ 'placeholder' => 'Confirm Password*' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'username' )->textInput( [ 'placeholder' => 'Username' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'firstName' )->textInput( [ 'placeholder' => 'First Name' ] )->label( false ) ?>
	    	<?= $form->field( $model, 'lastName' )->textInput( [ 'placeholder' => 'Last Name' ] )->label( false ) ?>
			<?= $form->field( $model, 'terms' )->checkbox( [ 'label' => $terms ] ) ?>

			<input type="submit" value="Register" />
	<?php
			ActiveForm::end();
		}
	?>

<?php BasicBlock::end(); ?>
