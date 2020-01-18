<?php
// Yii Imports
use yii\helpers\Html;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Error | ' . $coreProperties->getSiteTitle();

$themePath		= Yii::getAlias( '@themes/basic' );

$code		= $exception->statusCode;
$message	= nl2br( Html::encode( $message ) );

$user = Yii::$app->core->getUser();

?>
<?php if(!empty( $user)) {?>
<div id="page-policy" class="page page-basic page-public cmt-block color color-primary" cmt-block="block-qtf-mauto">
	<div class="page-content-wrap">								
		<div class="page-header-wrap align align-center text">
			<div class="page-header-title margin margin-top-medium">
				<div class="bold text text-xlarge h1"><?= $code ?></div>
				<div class="page-header-info bold text text-medium padding padding-default-h h6">The page you are looking for cannot be found</div>
				<img class="fluid margin margin-top-medium" src="<?= Yii::getAlias( '@images' ) ?>/error.png" />
			</div>
		</div>
	</div>
</div>

<?php } else { ?>
<div id="page-policy" class="page page-basic page-public cmt-block color color-primary" cmt-block="block-qtf-mauto">
	<div class="page-content-wrap">								
		<div class="page-header-wrap align align-center text">
			<div class="page-header-title margin margin-top-medium">
				<div class="bold text text-xlarge h1"><?= $code ?></div>
				<div class="page-header-info bold text text-medium padding padding-default-h h6">The page you are looking for cannot be found</div>
				<img class="fluid margin margin-top-medium" src="<?= Yii::getAlias( '@images' ) ?>/error.png" />
			</div>
		</div>
	</div>
</div>	
<?php include "$themePath/views/footers/public.php"; ?>
<?php }?>								
								