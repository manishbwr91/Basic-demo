<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\block\BasicBlock;
use cmsgears\widgets\comment\submit\SubmitFeedback;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Feedback | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();

$model = Yii::$app->core->site;

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Feedback' ] ]
];
?>

<div class="padding padding-top-large">
	<?= SubmitFeedback::widget([
	   'model' => $model, 'ajaxUrl' => "core/site/submit-feedback?slug=$model->slug",
	   'templateDir' => '@themeTemplates/comment/feedback', 'template' => 'submit'
	])?>
</div>

