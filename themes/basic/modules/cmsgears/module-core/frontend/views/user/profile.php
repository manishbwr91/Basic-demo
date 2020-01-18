<?php
// Yii Imports
use yii\helpers\Url;
use yii\helpers\Html;

// CMG Imports
use cmsgears\core\common\models\resources\Address;

use cmsgears\core\common\utilities\CodeGenUtil;
use cmsgears\core\common\utilities\DataUtil;
// Config
$coreProperties		= $this->context->getCoreProperties();
$themeTemplates		= Yii::getAlias( '@themeTemplates' );
$breezeTemplates	= Yii::getAlias( '@breeze/templates' );

$mobileRequired	= false;
$intlTelInput	= true;
$intlTelCcode	= 'us';

$frmSpinner = "$themeTemplates/components/spinners/form.php";

$apixBase = 'user';

// Page
$this->title = 'Profile | ' . $coreProperties->getSiteTitle();

// Sidebar
$this->context->sidebar	= [ 'parent' => 'sidebar-profile' ];

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'profile' => [ [ 'label' => 'Profile' ] ]
];

// Model
$model = $user;

// Addresses
$modelAddresses = $user->modelAddresses;

$searchCity		= true;

$apixSpinner	= isset( $apixSpinner ) ? $apixSpinner : "$breezeTemplates/components/spinners/10-hidden.php";

$addressesTitle = isset( $addressesTitle ) ? $addressesTitle : 'Addresses';

$excludeAddressTypes = isset( $excludeAddressTypes ) ? $excludeAddressTypes : [];

$searchCity = isset( $searchCity ) ? $searchCity : false;

// Location
$countryMap		= Yii::$app->factory->get( 'countryService' )->getIdNameMap();
$countryId		= array_keys( $countryMap)[ 100 ];
$provinceMap	= Yii::$app->factory->get( 'provinceService' )->getMapByCountryId( $countryId );
$provinceId		= array_keys( $provinceMap ) [ 0 ];
$regionMap		= Yii::$app->factory->get( 'regionService' )->getMapByProvinceId( $provinceId, [ 'default' => true, 'defaultValue' => Yii::$app->core->regionLabel ] );


// Config
$coreProperties = $this->context->getCoreProperties();

$breezeTemplates = Yii::getAlias( '@breeze/templates' );

$mobileRequired	= isset( $mobileRequired ) ? $mobileRequired : true;
//$intlTelInput	= isset( $intlTelInput ) ? $intlTelInput : false;

$frmSpinner = isset( $frmSpinner ) ? $frmSpinner : "$breezeTemplates/components/spinners/10-white-max.php";
?>

<div  class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto">
	<div class="page-content-wrap">
		<div class="page-header-wrap">
			<div class="page-header">
				<div class="page-header-title">
					<div class="text text-small">Profile</div>
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="box box-basic">
				<div class="box-content-wrap form">
					<div class="box-content">
						<div class="cmt-tabs tabs tabs-basic">
							<div class="tab-links-wrap text text-blue bold">
								<span class="tab-link" target="#1">Basic</span>
								<span class="tab-link" target="#2">Account</span>
								<span class="tab-link" target="#3">Address</span>
							</div>
							<div id="" class="tabs tab-content-wrap">
								<div id="1" class="tab-content padding padding-small bkg bkg-white">
									<form class="form" cmt-app="core" cmt-controller="user" cmt-action="profile" action="<?= $apixBase ?>/profile" cmt-keep>
										<?php include $frmSpinner; ?>
											<div class="row max-cols-50">
												<div class="col col2">
													<div class="form-group	"> 
													<label>Email*</label>
													<?php if( !$coreProperties->isChangeEmail() ) { ?>
														<input type="text" name="User[email]" placeholder="Email" value="<?= $model->email ?>" readonly />
													<?php } else { ?>
														<input type="text" name="User[email]" placeholder="Email" value="<?= $model->email ?>" />
													<?php } ?>
													<span class="error" cmt-error="User[email]"></span>
													</div>
												</div>
												<div class="col col2">
													<div class="form-group"> 
													<label>Username</label>
													<?php if( !$coreProperties->isChangeUsername() ) { ?>
														<input type="text" name="User[username]" placeholder="Username" value="<?= $model->username ?>" readonly />
													<?php } else { ?>
														<input type="text" name="User[username]" placeholder="Username" value="<?= $model->username ?>" />
													<?php } ?>
													<span  class="error" cmt-error="User[username]"></span>
													</div>
												</div>
												<div class="col col2">
													<div class="form-group	">   
														<label>First Name</label>
														<input type="text" name="User[firstName]" placeholder="First Name" value="<?= $model->firstName ?>" />
														<span  class="error" cmt-error="User[firstName]"></span>
													</div>
												</div>
												<div class="col col2">
													<div class="form-group	">  
														<label>Last Name</label>
														<input type="text" name="User[lastName]" placeholder="Last Name" value="<?= $model->lastName ?>" />
														<span  class="error" cmt-error="lastName"></span>
													</div>
												</div>
												<div class="col col2">
													<div class="select-private-page">
														<div class="form-group"> 
															<label>Gender</label>
															<?= Html::dropDownList( 'User[genderId]', $model->genderId, $genderMap, [ 'class' => 'element-60 cmt-select dd' ] ); ?>
															<span  class="error " cmt-error="User[genderId]"></span>
														</div>
													</div>
												</div>
												<div class="col col2">
													<div class="form-group	"> 
														<label>Date of Birth</label>
														<div class="frm-icon-element icon-right">
															<span class="icon cmti cmti-calendar-o"></span>
															<input type="text" name="User[dob]" placeholder="Date of Birth" value="<?= $model->dob ?>" class="datepicker" />
														</div>
														<span  class="error" cmt-error="User[dob]"></span>
													</div>
												</div>
												<div class="col col1 margin margin-top-small align align-right">
													<input class="rounded rounded-small btn btn-small" type="submit" value="UPDATE" />
												</div>
											</div>
										<div class="row data-crud-message">
											<div class="col col1 message success"></div>
											<div class="col col1 message warning"></div>
											<div class="col col1 message error"></div>
										</div>
									</form>
								</div>
								<div id="2" class="tab-content padding padding-small bkg bkg-white">
									<div class="padding padding-default">
										<h4 class="padding padding-bottom-small">Change Password</h4>
										<p>Lorem Ispum is simply dummy text.</p>
									</div>
									<form class="form" cmt-app="core" cmt-controller="user" cmt-action="account" action="<?= $apixBase ?>/account">
										<?php include $frmSpinner; ?>
										<div class="row max-cols-50">
											<div class="col col3">
												<div class="form-group">
													<label>Old Password</label>
													<input type="password" name="ResetPassword[oldPassword]" placeholder="Old Password" />
													<span  class="error" cmt-error="ResetPassword[oldPassword]"></span>
												</div>
											</div>
											<div class="col col3">
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name="ResetPassword[password]" placeholder="Password" />
													<span  class="error" cmt-error="ResetPassword[password]"></span>
												</div>
											</div>
											<div class="col col3">
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="ResetPassword[password_repeat]" placeholder="Repeat Password" />
													<span  class="error" cmt-error="ResetPassword[password_repeat]"></span>
												</div>
											</div>
											<div>
												<input type="hidden" name="ResetPassword[email]" value="<?= $user->email ?>" />
											</div>
											<div class="col col1 align align-right">
												<input class="rounded rounded-small btn btn-small margin margin-top-small" type="submit" value="UPDATE" />
											</div>
										</div>
										<div class="row data-crud-message">
											<div class="col col1 message success"></div>
											<div class="col col1 message warning"></div>
											<div class="col col1 message error"></div>
										</div>
									</form>
								</div>
								<div id="3" class="tab-content">
									<div class="cmt-address-crud data-crud data-crud-address data-crud-address-card">
										<div class="data-crud-title row padding padding-small">
											<span class="inline-block"><?= $addressesTitle ?></span>
											<span class="filler-tab"></span>
											<span class="inline-block actions-wrap text text-medium">
												<span class="cmt-address-add btn-icon btn-action"><i class="icon cmti cmti-plus"></i></span>
											</span>
										</div>
										<div class="cmt-address-form"></div>
										<div class="cmt-address-collection row max-cols-50">
										<?php
												foreach( $modelAddresses as $modelAddress ) {

													$type		= $modelAddress->type;
													$address	= $modelAddress->model;

													if( !in_array( $type, $excludeAddressTypes ) ) {
											?>
												<div  class="cmt-address card card-basic card-address col col3 padding padding-default" data-id="<?= $modelAddress->id ?>">
													<div class="card-content-wrap">
														<div class="cmt-address-header card-header">
															<div class="card-header-title row">
																<div class="col col3x2 title"><?= $address->title ?></div>
																<div class="card-header-trigger">
																	<i class="text text-large-4 text text-blue pointer fas fa-ellipsis-v right"></i>
																</div>
																<div class="col col3 right actions card-address-2">
																	<div class="event-small-menu">
																		<div class="vnav vnav-right">
																			<div class="relative" cmt-app="core" cmt-controller="address" cmt-action="get" action="<?= $apixBase ?>/get-address?id=<?= $model->id ?>&cid=<?= $modelAddress->id ?>">
																				<?php include $apixSpinner; ?>
																				<ul>
																					<li class="cmt-click"><a>Edit</a></li>
																				</ul>
																			</div>
																			<div class="relative" cmt-app="core" cmt-controller="address" cmt-action="delete" action="<?= $apixBase ?>/delete-address?id=<?= $model->id ?>&cid=<?= $modelAddress->id ?>">
																				<?php include $apixSpinner; ?>
																				<ul>
																					<li class="cmt-click"><a>Delete</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="cmt-address-data card-data text text-large-5">
															<?= $address->toString() ?>
														</div>
													</div>
												</div>
											<?php } } ?>
										</div>
									</div>
									<?php
									include "$themeTemplates/handlebars/address/card.php"; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

