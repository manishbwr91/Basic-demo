<?php
// Yii Imports
use yii\helpers\Url;
;
// CMG Imports
use widgets\element\ElementWidget;

$elementType = !empty( $settings->elementType ) ? $settings->elementType : $widget->elementType;

$boxWrapClass	= !empty( $settings->boxWrapClass ) ? $settings->boxWrapClass : $widget->boxWrapClass;
$boxWrapper		= !empty( $settings->boxWrapper ) ? $settings->boxWrapper : $widget->boxWrapper;
$boxClass		= !empty( $settings->boxClass ) ? $settings->boxClass : $widget->boxClass;
?>
<?php
//include __DIR__ . '/../../includes/globals.php';

// Metas


// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null ];
?>
<!DOCTYPE html>

<div class="cmt-slider slider slider-basic">
	<div>
		<div>
			<img class="fluid" alt="slider-image" src="<?= Url::to(['/images/back-main.jpg'])?>"/>
		</div>
		<div class="absolute absolute-top-center height width">
			<div class="wrap-slide-content">
				<div class="valign-center" >
					<div class="block-header">
						<div class="row row-inline-left">
							<div class="col col2">
								<div class="slider-title">
									<h1>Demo Title</h1>
								</div>
								<div class="slider-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p> 		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div>
			<img class="fluid" alt="slider-image" src="<?= Url::to(['/images/back-main.jpg'])?>"/>
		</div>
		<div class="absolute absolute-top-center height width">
			<div class="wrap-slide-content">
				<div class="valign-center">
					<div class="block-header">
						<div class="row row-inline-left">
							<div class="col col2">
								<div class="slider-title">
									<h1>Demo Title</h1>
								</div>
								<div class="slider-info">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p> 		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

