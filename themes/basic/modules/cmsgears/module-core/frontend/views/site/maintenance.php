<?php
// Yii Imports
use yii\helpers\Html;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Renovating | ' . $coreProperties->getSiteTitle();

$themePath		= Yii::getAlias( '@themes/basic' );

//$code		= $exception->statusCode;
//$message	= nl2br( Html::encode( $message ) );
?>
<div id="page-policy" class="page page-basic page-public cmt-block color color-primary" cmt-block="block-qtf-mauto">
	<div class="page-content-wrap">								
		<div class="page-header-wrap align align-center text">
			<div class="page-header-title margin margin-top-large">
				<div class="bold text text-xlarge h1">We Are Renovating</div>
				<div class="page-header-info bold text text-medium padding padding-medium-v h6">Please Visit Later</div>
				<img class="fluid margin margin-top-small" src="<?= Yii::getAlias( '@images' ) ?>/renovating.png" />
			</div>
		</div>
	</div>
</div>
<?php include "$themePath/views/footers/public.php"; ?>

				
						
								
								