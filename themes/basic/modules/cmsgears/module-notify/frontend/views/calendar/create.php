<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
// CMG Imports
use cmsgears\files\widgets\ImageUploader;
use cmsgears\icons\widgets\IconChooser;

use cmsgears\core\common\utilities\CodeGenUtil;
use cmsgears\core\common\utilities\DateUtil;
// Config
$coreProperties = $this->context->getCoreProperties();

$returnUrl = $this->context->returnUrl;
// Page
$this->title = 'Add Calendar Event | ' . $coreProperties->getSiteName();
// Sidebar
$this->context->sidebar	= [ 'parent' => 'sidebar-calendar' ];
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [
		[ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ],
		[ 'label' => 'Calendar', 'url' =>  $this->context->returnUrl ]
	],
	'add' => [ [ 'label' => 'Add Event' ] ]
];

$countOptions = CodeGenUtil::getRange( 1, 5 );
?>
<div class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto"> 
	<div class="page-content-wrap">
		<div class="page-header-wrap">
			<div class="page-header">
				<div class="page-header-title">
					<div class="text text-small">Create An Event</div>
				</div>
			</div>
		</div>	
		<div class="page-content">	
			<?php $form = ActiveForm::begin( [ 'id' => 'frm-calendar', 'options' => [ 'class' => 'form' ] ] ); ?>
			<div class="data-crud-form">
				<div class="row max-cols-50">
					<div class="col col2">
						<?= $form->field( $model, 'name' )->label('Name') ?>
					</div>
					<div class="col col2">
						<?= Yii::$app->formDesigner->getIconInput( $form, $model, 'scheduledAt', [ 'options' => [ 'class' => 'datetimepicker' ], 'right' => true, 'icon' => 'cmti cmti-calendar' ] )->label('Date') ?>
					</div>
				</div>
				<div class="row max-cols-50">
					<div class="col col1">
						<?= IconChooser::widget( [ 'model' => $model, 'options' => [ 'class' => 'icon-picker-wrap border border-default' ] ] ) ?>
					</div>
					
				</div>
				<div class="row max-cols-50">
					<div class="col col2 form-group">
						<label>Banner</label>
						<div class="banner-border padding padding-small">
							<?= ImageUploader::widget( [ 'model' => $banner ] ) ?>
						</div>
					</div>
					<div class="col col2">
						<?= $form->field( $model, 'description' )->textarea(['rows' => '5']) ?>
					</div>

				</div>
			</div>
			<div class="bold text text-large-4 text-primary-l margin margin-top-medium padding padding-small-h">Pre Reminder Settings</div>
			<div class="data-crud-form">
				<div class="row max-cols-100">
					<div class="col col3">
						<?= $form->field( $model, 'preReminderCount' )->dropDownList( $countOptions, [ 'class' => 'cmt-select' ] )->label( 'Reminder Count' ) ?>
					</div>
					<div class="col col3">
						<?= $form->field( $model, 'preReminderInterval' )->label( 'Reminder Interval' ) ?>
					</div>
					<div class="col col3">
						<?= $form->field( $model, 'preIntervalUnit' )->dropDownList( DateUtil::$lowDurationMap, [ 'class' => 'cmt-select' ] )->label( 'Reminder Units' ) ?>
					</div>
				</div>
			</div>
			<div class="bold text text-large-4 text-primary-l padding padding-small-h margin margin-top-small">Post Reminder Settings</div>
			<div class="data-crud-form">
				<div class="row max-cols-100">
					<div class="col col3">
						<?= $form->field( $model, 'postReminderCount' )->dropDownList( $countOptions, [ 'class' => 'cmt-select dd' ] )->label( 'Reminder Count' ) ?>
					</div>
					<div class="col col3">
						<?= $form->field( $model, 'postReminderInterval' )->label( 'Reminder Interval' ) ?>
					</div>
					<div class="col col3">
						<?= $form->field( $model, 'postIntervalUnit' )->dropDownList( DateUtil::$lowDurationMap, [ 'class' => 'cmt-select' ] )->label( 'Reminder Units' ) ?>
					</div>
				</div>
			</div>
			<div class="margin margin-top-small">
				<?= Html::a( 'Cancel', $returnUrl, [ 'class' => 'btn btn-small rounded rounded-small right' ] ); ?>
				<input class="btn btn-small rounded rounded-small right margin margin-right-default" type="submit" value="Create" />
			</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>

					