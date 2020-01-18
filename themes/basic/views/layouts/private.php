<?php
// Basic Imports
use themes\basic\assets\InlineAssets;

InlineAssets::register( $this );

$this->registerAssetBundle( 'private' );
// Common variables available for headers, sidebars and footers included within this layout
$coreProperties = $this->context->getCoreProperties();
$themePath		= Yii::getAlias( '@themes/basic' );
$user			= Yii::$app->core->getUser();
$resourceUrl	= $coreProperties->getResourceUrl();
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= $coreProperties->getLanguage() ?>">
    <head>
		<?php include "$themePath/views/headers/main.php"; ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>
		<?php include "$themePath/views/templates/components/spinners/page.php"; ?>
		<?php include "$themePath/views/headers/private.php"; ?>
		<?php include "$themePath/views/sidebars/private.php"; ?>
		<div class="set-container">
			<div class="container container-main">
				<div class="content-wrap content-main-wrap">
					<div class="content">
						<div id="private-common-pages">
							<?= $content ?>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>
