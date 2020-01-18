<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\block\BasicBlock;

// Config
$coreProperties = $this->context->getCoreProperties();
$this->title 	= 'Confirm Account | ' . $coreProperties->getSiteTitle();
$resourceUrl	= $coreProperties->getResourceUrl();
$themePath		= Yii::getAlias( '@themes/basic' );
// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'all' => [ [ 'label' => 'Confirm Account' ] ]
];
?>
<div class="page-authentication-forms">
	<div class="page page-basic cmt-block" cmt-block="block-full-mauto">
		<div class="page-bkg-fixed" style="background-image:url(<?= "$resourceUrl/images/back-main.jpg"?>);"></div>
			<div class="page-content-wrap content-90">
				<div class="page-header-wrap">
					<div class="page-header">
						<div id="small-icon" class="page-header-icon">
							<a href="<?= Url::to(['/'] ) ?>">
								<img class="fluid" src="<?= "$resourceUrl/images/logo-white.png" ?>" />
							</a>
						</div>
					</div>
				</div>
				<div class="page-content">
					<div class="row max-cols-50">
						<div class="col col12x8">
							<div id="small-title" class="page-content-title text text-white">
								<h3>Lorem Ispum Title</h3>
							</div>
						</div>
						<div class="col col12x4">
							<div id="box-login" class="page-content-data">
								<div class="box-basic">
									<div class="box-content-wrap align align-center form">
										<div class="box-header-wrap bkg bkg-white">
											<div class="box-header">
												<h2>ACCOUNT CONFIRMED</h2>
											</div>
										</div>
									</div>
									<div class="box-content">
										<div class="align align-center margin margin-top-small">
											<span>
												<i class="fa fa-5x fa-check-circle"></i>
											</span>
										</div>
										<div class="row max-cols-50 margin margin-top-medium align align-center text text-large-5">
											<div>Thanks for confirming your email.</div>
											<div class="margin margin-top-default">
												<ul class="nav">
													<span>Your account hasbeen activated.Click here to </span><li><a href="<?= Url::to(['/login'] ) ?>">LOGIN</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>											
						</div>
					</div>
				</div>									
			<?php include "$themePath/views/footers/auth-form.php"; ?>
		</div>
	</div>
</div>
					
