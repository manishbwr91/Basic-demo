<?php
$title	= $widget->title;
$modal	= $widget->modal;
$data	= $widget->data;
$popId	= isset( $data[ 'popupId' ] ) ? $data[ 'popupId' ] : 'popup-grid-delete';

$model		= $data[ 'model' ];
$app		= $data[ 'app' ];
$controller	= $data[ 'controller' ];
$action		= $data[ 'action' ];
$url		= $data[ 'url' ];
?>
<div id="<?= $popId ?>" class="cmt-popup popup popup-basic popup-medium <?= $modal ? 'popup-modal' : null ?>">
	<div class="popup-screen"></div>
	<?php if( $widget->bkg ) { ?>
		<div class="popup-bkg <?= $widget->bkgClass ?>" <?= isset( $widget->bkgUrl ) ? " style=\"background-image:url($widget->bkgUrl);\"" : null ?>></div>
	<?php } ?>
	<div class="popup-screen-listener"></div>
	<div class="popup-data <?= isset( $widget->size ) ? "popup-data-$widget->size" : null ?>">
		<span class="popup-close bkg bkg-white circled circled1 margin margin-top-default">
			<span class="icon cmti cmti-close text text-blue padding padding-default"></span>
		</span>
		<?php if( $widget->bkgData ) { ?>
			<div class="popup-data-bkg <?= $widget->bkgDataClass ?>" <?= isset( $widget->bkgDataUrl ) ? "style=\"background-image:url($widget->bkgDataUrl);\"" : null ?>></div>
		<?php } ?>
		<div class="popup-header  transit-bkg-color">
			<div class="popup-title text text-secondary align align-center"><?= $title ?></div>
		</div>
			<div class="text-with-line padding padding-small-h"></div>
		<div class="popup-content-wrap bkg bkg-white">
			<div class="popup-content">
				<form cmt-app="<?= $app ?>" cmt-controller="<?= $controller ?>" cmt-action="<?= $action ?>" action="<?= $url ?>">
					<div class="spinner max-area-cover-color">
						<div class="valign-center cmti cmti-2x cmti-spinner-9 spin"></div>
					</div>
					<p class="align align-center text text-large-5 ">Are you sure you want to delete the selected <?= $model ?> ?</p>
					<div class="filler-height filler-height-medium"></div>
					<div class="align align-center"><input class="btn btn-medium rounded rounded-small" type="submit" value="DELETE" /></div>
				</form>
			</div>
		</div>
	</div>
</div>
