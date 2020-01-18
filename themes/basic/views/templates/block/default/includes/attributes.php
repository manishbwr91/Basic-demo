<?php
// Yii Imports
use yii\helpers\HtmlPurifier;

// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

$metas		= isset( $settings->metas ) ? $settings->metas : $widget->metas;
$metaType	= !empty( $settings->metaType ) ? $settings->metaType : null;

$metaWrapClass = !empty( $settings->metaWrapClass ) ? $settings->metaWrapClass : $widget->metaWrapClass;
?>

<?php if( $metas ) { ?>
	<div class="block-content-meta <?= $metaWrapClass ?>">
		<?php
			$metaType = isset( $metaType ) ? preg_split( '/,/', $metaType ) : [];

			// Single Type
			if( count( $metaType ) == 1 ) {

				$metas = $model->getActiveMetasByType( $metaType[ 0 ] );
			}
			// Multiple Types
			else if( count( $metaType ) > 1 ) {

				$metas = $model->getActiveMetasByTypes( $metaType );
			}
			// Default Types
			else {

				$metas = $model->getActiveMetasByType( CoreGlobal::TYPE_USER );
			}

			foreach( $metas as $meta ) {

				$title = isset( $meta->label ) ? $meta->label : ucfirst( $meta->name );
		?>
				<div class="block-meta">
					<span class="h5 inline-block"><?= $title ?></span> - <span class="inline-block"><?= HtmlPurifier::process( $meta->value ) ?></span>
				</div>
		<?php
			}
		?>
	</div>
<?php } ?>
