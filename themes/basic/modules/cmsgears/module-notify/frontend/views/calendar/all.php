<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\popup\Popup;
use cmsgears\widgets\grid\DataGrid;

// Config
$coreProperties		= $this->context->getCoreProperties();
$moduleTemplates	= '@themes/basic/modules/cmsgears/module-notify/frontend/views/templates';
$breezeTemplates	= '@breeze/templates/widget/native';

$apixBase = $this->context->apixBase;

// Page
$this->title = 'Calendar Events | ' . $coreProperties->getSiteName();
$returnUrl = $this->context->returnUrl;
// Sidebar
$this->context->sidebar	= [ 'parent' => 'sidebar-calendar' ];
$themeTemplates		= '@themes/basic/views/templates';

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Calendar' ] ]
];
?>
<div class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto">
	<div class="page-content-wrap">
		<div class="page-header-wrap">
			<div class="page-header">
				<div class="row">
					<div class="clearfix">
						<div class="left">
							<div class="page-header-wrap">
								<div class="page-header-title">
									<div class="text text-small">Events</div> 
								</div>
							</div>
						</div>
						<div class="right">
							<div class="nav">
								<ul>
									<a href="<?= Url::toRoute( [ '/notify/calendar/add' ], true ) ?>">
									<li class="btn btn-medium rounded rounded-medium">New-Event</li>
									</a>
									<a href="<?= Url::toRoute( [ '/notify/calendar/full' ], true ) ?>">
										<i class="btn-icon cmti cmti-calendar-o rounded rounded-medium" title="Calendar View"></i>
									</a>
									<a href="<?= Url::toRoute( [ '/notify/calendar/all' ], true ) ?>">
										<i class=" btn-icon cmti cmti-event rounded rounded-medium" title=" Grid view"></i>
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
		</div>
		<div class="page-content">
			<?= DataGrid::widget([
				'dataProvider' => $dataProvider, 'add' => true, 'addUrl' => 'add', 'data' => [ ],
				'title' => '', 'options' => [ 'class' => 'grid-data grid-data-default' ],
				'searchColumns' => [ 'name' => 'Name', 'desc' => 'Description', 'content' => 'Content' ],
				'sortColumns' => [
					'name' => 'Name',
					'sdate' => 'Scheduled At', 'cdate' => 'Created At', 'udate' => 'Updated At',

				],
				'filters' => [
					'status' => [ 'new' => 'New', 'cancelled' => 'Cancelled', 'active' => 'Active', 'expired' => 'Expired' ]
				],
				'reportColumns' => [
					'name' => [ 'title' => 'Name', 'type' => 'text' ],
					'desc' => [ 'title' => 'Description', 'type' => 'text' ],
					'content' => [ 'title' => 'Content', 'type' => 'text' ],
					'status' => [ 'title' => 'Status', 'type' => 'select', 'options' => $statusMap ]
				],
				'bulkPopup' => 'popup-grid-bulk',
				'bulkActions' => [
					'status' => [ 'cancelled' => 'Cancel', 'active' => 'Activate' ],
					'model' => [ 'delete' => 'Delete' ]
				],
				'header' => false, 'footer' => true,
				'grid' => true, 'columns' => [ 'root' => 'colf colf15', 'factor' => [ null, 'x3', 'x6','x2', null ] ],
				'gridColumns' => [
					'bulk' => 'Action',
					'name' => [ 'title' => 'Title', 'generate' => function( $model ) {
						$title	= $model->name;
						$date	= date( 'F d, Y', strtotime( $model->scheduledAt ) );

						return "<p class=\"bold\">$title</p><p></p>";
					}],
					'content' => [ 'title' => 'Description', 'generate' => function( $model ) {
						return !empty( $model->description ) ? "<p class=\"bold\">{$model->description}</p><p>{$model->content}</p>" : $model->content;
					}],
					'createdAt' => [ 'title' => 'Date', 'generate' => function( $model ) {

					$date	= date( 'F d, Y', strtotime( $model->scheduledAt ) );

					return "<p class=\"bold\"></p><p>$date</p>";
					}],
					'actions' => 'Actions'
				],
				'gridCards' => [ 'root' => 'col col12', 'factor' => 'x4' ],
				'templateDir' => "$breezeTemplates/grid", 'template' => 'default',
				//'dataView' => "$moduleTemplates/grid/data/event",
				'cardView' => "$moduleTemplates/grid/cards/event",
				'actionView' => "$moduleTemplates/grid/actions/event",
				'headView' => "$moduleTemplates/grid/head/event"
			]) ?>

			<?= Popup::widget([
				'title' => 'Apply Bulk Action', 'size' => 'medium',
				'templateDir' => Yii::getAlias( "$themeTemplates/widget/popup/grid"  ), 'template' => 'bulk',
				'data' => [ 'model' => 'Event', 'app' => 'grid', 'controller' => 'crud', 'action' => 'bulk', 'url' => "$apixBase/bulk" ]
			])?>

			<?= Popup::widget([
				'title' => 'Delete Event', 'size' => 'medium',
				'templateDir' => Yii::getAlias( "$themeTemplates/widget/native/popup/grid/default" ), 'template' => 'delete',
				'data' => [ 'model' => 'Event', 'app' => 'grid', 'controller' => 'crud', 'action' => 'delete', 'url' => "$apixBase/delete?id=" ]
			])?>
		</div>
	</div>
</div>