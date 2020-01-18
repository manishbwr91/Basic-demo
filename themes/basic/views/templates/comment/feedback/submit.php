<?php

use yii\helpers\Url;
use yii\helpers\Html;
// CMG Imports
use cmsgears\core\common\base\Captcha;


$model			= $widget->model;
$captcha		= $widget->captcha;
$title			= $widget->title;
$success		= $widget->success;
$rating			= $widget->rating;
$ratingClass	= $widget->ratingClass;

$user = Yii::$app->core->getUser();

$ajaxUrl		= $widget->ajaxUrl;
$cmtApp			= $widget->cmtApp;
$cmtController	= $widget->cmtController;
$cmtAction		= $widget->cmtAction;
$themePath		=Yii::getAlias( '@themes/basic');
?>
<div cmt-app="<?= $cmtApp ?>" cmt-controller="<?= $cmtController ?>" cmt-action="<?= $cmtAction ?>" action="<?= $ajaxUrl ?>" class=" margin margin-top-small">
	<div class="page page-basic cmt-block" cmt-block="block-half-auto">
		<div class="page-content-wrap content-90">
			<div class="page-content">
				<div id="box-feedback" class="page-content-data">
					<div class="row max-cols-50">
						<div class="box-basic row row-medium">
							<div class="box-content-wrap align align-center form">
								<div class="box-header-wrap bkg bkg-white">
									<div class="box-header">
										<div class="box-header-title">
											<h2 class="text text-secondary text text-regular">Feedback</h2>
										</div>
										<div class="box-header-info">
											<div>Please take a moment to tell us about your experience</div>
										</div> 
									</div>
								</div>
								<?php if( empty( $user ) ) { ?>
									<div class="margin margin-small-v">
										<div class="col col12x4">
											<div class="form-group">    
												<label>Name*</label>
												<input type="text" name="Comment[name]" />
												<span class="error" cmt-error="Comment[name]"></span>
											</div>
										</div>
									</div>
									<div class="margin margin-small-v">
										<div class="col col12x4">
											<div class="form-group">    
												<label>Email*</label>
												<input type="text" name="Comment[email]" />
												<span class="error" cmt-error="Comment[email]"></span>
											</div>
										</div>
									</div>
									<div class="margin margin-small-v">
										<div class="col col12x4">
											<div class="form-group">    
												<label>Subject*</label>
												<input type="text" name="Comment[subject]" />
												<span class="error" cmt-error="Comment[subject]"></span>
											</div>
										</div>
									</div>
								<?php } else { ?>
									<input type="hidden" name="Comment[name]" value="<?= $user->getName() ?>" />
									<input type="hidden" name="Comment[email]" value="<?= $user->email ?>" />
								<?php } ?>
								<div class="margin margin-small-v">
									<div class="col col1">
										<div class="form-group">    
											<label>Message*</label>
											<textarea name="Comment[content]" rows="5"></textarea>
											<span class="error" cmt-error="Comment[content]"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="box-content-data">
								<div class="margin margin-top-small h6 text text-default-r col col12x4">
									Your Rating
								</div>
								<div class="margin margin-small-v">
									<?= Yii::$app->formDesigner->getRatingField(
										[ 'modelName' => 'Comment', 'fieldName' => 'rating', 'class' => $ratingClass ]
									)?>
									<span class="error" cmt-error="Comment[rating]"></span>
								</div>
								<?php if( !isset( $user ) ) { ?>
								<div class="row max-cols-50">
									<div class="clear captcha-wrap col col12x4 right  form-group">
										<?= Captcha::widget( [ 'name' => 'Comment[captcha]', 'captchaAction' =>  '/core/site/captcha', 'options' => [ 'placeholder' => 'Captcha Key*' ] ] ) ?>
										<div class="warning padding paddign-small-v">Click on the captcha image to get new code.</div>
										<div class="error" cmt-error="Comment[captcha]"></div>
									</div>
								<?php } ?>
								</div>
									<div class="col col12x4 right margin margin-top-small">
										<div>
											 <input type="submit" class="cmt-click rounded rounded-medium" value="SEND" />
										</div>
									</div>
								<div class="filler-height"></div>
								<div class="message success"></div>
								<div class="message warning"></div>
								<div class="message error"></div>
								<div class="filler-height"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "$themePath/views/footers/public.php"; ?>
	