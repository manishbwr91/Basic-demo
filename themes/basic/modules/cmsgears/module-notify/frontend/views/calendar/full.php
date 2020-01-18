<?php
// Yii Imports
use yii\helpers\Url;
// CMG Imports
use cmsgears\widgets\popup\Popup;
// Config
$coreProperties		= $this->context->getCoreProperties();
$themeTemplates		= Yii::getAlias( '@themeTemplates' );
$breezeTemplates	= Yii::getAlias( '@breeze/templates' );

$frmSpinner = "$themeTemplates/components/form-spinner.php";
$apixSpinner	= isset( $apixSpinner ) ? $apixSpinner : "$breezeTemplates/components/spinners/10-hidden.php";
$apixBase	= 'user';
$returnUrl	= $this->context->returnUrl;
// Page
$this->title = 'Calendar Events | ' . $coreProperties->getSiteName();
// Sidebar
$this->context->sidebar	= [ 'parent' => 'sidebar-calendar' ];
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [
		[ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ],
		[ 'label' => 'Calendar', 'url' =>  $this->context->returnUrl ]
	],
	'full' => [ [ 'label' => 'All Events' ] ]
];
?>		
<div class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto">
	<div class="page-content-wrap">
		<div class="page-header-wrap">
			<div class="page-header">
				<div class="row">
					<div class="left">
						<div class="page-header-title">
							<div class="text text-small">Events</div> 
						</div>
					</div>
					<div class="right">
						<div class="nav">
							<ul id="">
								<a href="<?= Url::toRoute( [ '/notify/calendar/add' ], true ) ?>">
								<li class="btn btn-medium rounded rounded-medium">New-Event</li>
								</a>
								<a href="<?= Url::toRoute( [ '/notify/calendar/full' ], true ) ?>">
									<i class="btn-icon cmti cmti-calendar-o rounded rounded-medium" title="Calendar View"></i>
								</a>
								<a href="<?= Url::toRoute( [ '/notify/calendar/all' ], true ) ?>">
									<i class=" btn-icon cmti cmti-event rounded rounded-medium" title="All events"></i>
								</a>

								<a href="<?= Url::toRoute( [ "/notify/calendar/all?layout=card" ], true ) ?>">
									<i class="btn-icon cmti cmti-list rounded rounded-medium" title="Card View"></i>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="data-crud-content data-event-calendar">
				<div id="user-calendar" class="row"></div>
			</div>
		</div>
	</div>
</div>
				