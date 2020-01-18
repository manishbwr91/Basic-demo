 <?php 
$model	= $widget->model;
$data	= $widget->modelData;

$settings = isset( $data->settings ) ? $data->settings : [];

$defaultIncludes	= Yii::getAlias( '@breeze' ) . '/templates/cms/block/default/includes';
$elementIncludes	= Yii::getAlias( '@templates' ) . '/core/block/default/includes';
$templateIncludes	= Yii::getAlias( '@themeTemplates' ) . '/block/about/includes';

$buffer			= "$templateIncludes/buffer.php";
$attributes		= "$defaultIncludes/attributes.php";
$preObjects		= "$defaultIncludes/objects-pre.php";
$postObjects	= "$defaultIncludes/objects-post.php";
?>

<?php include "$defaultIncludes/styles.php"; ?>
<?php include "$defaultIncludes/objects-config.php"; ?>
<?php include "$templateIncludes/background.php"; ?>
<div id="block-common">
	<?php include "$defaultIncludes/header.php"; ?>
	<?php  include "$templateIncludes/buffer.php"; ?>
	<?php include "$defaultIncludes/footer.php"; ?>
</div>
<?php include "$defaultIncludes/scripts.php"; ?>
