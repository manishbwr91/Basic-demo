<?php
// Yii Imports
use yii\helpers\Url;
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;
use cmsgears\widgets\login\LoginWidget;

$title	= $widget->title;
$modal	= $widget->modal;
$data	= $widget->data;

// Redirect url
$redirectUrl	= Url::previous( CoreGlobal::REDIRECT_LOGIN );
$redirectUrl	= empty( $redirectUrl ) ? Url::toRoute( Yii::$app->core->getLoginRedirectPage() ) : $redirectUrl;
$redirectUrl	= in_array( $redirectUrl, [ 'login', 'register', 'forgot-password', 'reset-password', 'reset-password-otp', 'activate-account', 'confirm-account' ] ) ? '' : $redirectUrl;

$loginUrl = "site/login?redirect=$redirectUrl";
?>
<div id="landing-popup">
	<div id="popup-login" class="cmt-popup popup popup-basic <?= $modal ? 'popup-modal' : null ?>">
		<div class="popup-screen"></div>
		<div class="popup-screen-listener"></div>
		<div class="popup-data popup-data-medium <?= isset( $widget->size ) ? "popup-data-$widget->size" : null ?> rounded rounded-medium">
			<div class="popup-close">
				<div class="close-icon">
					<span class="text text-blue bkg bkg-white popup-corner">
						<i class="popup-corner-close cmti cmti-close"></i>
					</span>
				</div>
			</div>
			<div class="popup-content-wrap">
				<div class="popup-content">
				<?= LoginWidget::widget([
						'options' => [ 'id' => 'box-login-wrap' ],
						'register' => false, 'loadAssets' => true, 'loginUrl' => $loginUrl,
						'templateDir' => Yii::getAlias( '@themeTemplates/widget/login' )
					]) ?>
				</div>
			</div>
		</div>
	</div>
</div>
