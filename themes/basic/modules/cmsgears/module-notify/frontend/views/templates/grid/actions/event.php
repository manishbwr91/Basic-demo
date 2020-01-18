<?php
// Yii Imports
use yii\helpers\Html;
?>
<?php if( $model->isEditable() ) { ?>
	<span class="action"><?= Html::a( "<i class=\"cmti cmti-edit\" title=\"Update\"></i>", [ "update?id=$model->id" ] ) ?></span>
<?php } ?>

<span class="action action-pop popup-trigger action-delete cmti cmti-close-c text text-blue eventDelete" title="Delete" target="<?= $model->id ?>" popup="popup-grid-delete"></span>
