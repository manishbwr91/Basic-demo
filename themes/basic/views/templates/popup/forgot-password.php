<?php
use cmsgears\widgets\login\LoginWidget;

$title	= $widget->title;
$modal	= $widget->modal;
$data	= $widget->data;
?>
<div id="popup-forgot-password" class="cmt-popup popup popup-basic  <?= $modal ? 'popup-modal' : null ?>">
	<div class="popup-screen"></div>
	<div class="popup-screen-listener"></div>
	<div class="popup-data popup-data-medium <?= isset( $widget->size ) ? "popup-data-$widget->size" : null ?> rounded rounded-medium">
		<div class="popup-screen-listener"></div>
		<div class="popup-close">
			<div class="close-icon">
				<span class="text text-blue bkg bkg-white popup-corner">
					<i class="popup-corner-close cmti cmti-close"></i>
				</span>
			</div>
		</div>
		<div class="popup-content-wrap">
			<div class="popup-content align align-center">
				<?= LoginWidget::widget([
					'options' => [ 'id' => 'box-signup-wrap' ],
					'login' => false,
					'register' => false,
					'forgotPassword' => true,
					'templateDir' => Yii::getAlias( '@themeTemplates/widget/login' )
					//'registerAction' => 'core/site/register'
				]) ?>
			</div>
		</div>
	</div>
</div>