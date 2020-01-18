<?php
// Yii Imports
use yii\helpers\HtmlPurifier;

$resourceUrl		= "http://localhost/basicdemo/frontend/web/";
$content			= isset( $settings->content ) ? $settings->content : $widget->content;
$contentTitle		= isset( $settings->contentTitle ) ? $settings->contentTitle : true;
$contentInfo		= isset( $settings->contentInfo ) ? $settings->contentInfo  : $model->content;
$contentSummary		= isset( $settings->contentSummary ) && $settings->contentSummary && !empty( $model->summary ) ? $model->summary : $widget->contentSummary;

$contentAvatar	= isset( $settings->contentAvatar ) ? $settings->contentAvatar : true;
$contentBanner	= isset( $settings->contentBanner ) ? $settings->contentBanner : false;

$contentData		= isset( $settings->contentData ) || $settings->contentData || !empty( $model->content ) ? $model->content : $widget->contentData;
$contentClass		= !empty( $settings->contentClass ) ? $settings->contentClass : $widget->contentClass;
$contentDataClass	= !empty( $settings->contentDataClass ) ? $settings->contentDataClass : $widget->contentDataClass;

$purifySummary	= isset( $settings->purifySummary ) ? $settings->purifySummary : true;
$purifyContent	= isset( $settings->purifyContent ) ? $settings->purifyContent : true;

$contentBanner	= $contentBanner && !empty( $bannerUrl );

$cbkgLazyClass	= isset( $lazyBanner ) && $lazyBanner && $contentBanner ? 'cmt-lazy-img' : null;

$cbkgSrcset		= isset( $cbkgLazyClass ) ? $bkgSmallUrl . " 1x, " . $bkgMediumUrl . " 1.5x, " . $bannerObj->getFileUrl() . " 2x" : null;
$cbkgSizes		= isset( $cbkgLazyClass ) ? "(min-width: 1025px) 2x, (min-width: 481px) 1.5x, 1x" : null;
$cbkgLazyAttrs	= isset( $cbkgLazyClass ) ? "data-src=\"$bkgSmallUrl\" data-srcset=\"$cbkgSrcset\" data-sizes=\"$cbkgSizes\"" : null;

?>
<?php if( $content ) { ?>
<div class="block block-basic cmt-block">
	<div class="block-content-wrap">
		<div class="block-header-wrap">
			<div class="block-header">
				<div data-aos="fade-up" data-aos-duration="2000"  class="row row-large align align-center max-cols-100 padding padding-top-small">
					<div class="col col2">
						<div class="block-header-title text text-white ">
							<?php if( $contentTitle ) { ?>
								<h1><?= $model->title?></h1>
							<?php } ?>
						</div>
					</div>
					<div class="col col2">
						<div class="block-header-info text text-white align align-left line-height line-height-medium">
							<?php if( $contentInfo ) { ?>
								<?= $model->content ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>	
