<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

// Config
$coreProperties		= $this->context->getCoreProperties();
$themeTemplates		= Yii::getAlias( '@themeTemplates' );
$breezeTemplates	= Yii::getAlias( '@breeze/templates' );
$themeIncludes		= Yii::getAlias( '@themes/basic/views/includes' );

$frmSpinner = "$themeTemplates/components/spinners/form.php";

$apixBase = 'user';

// Page
$this->title = 'Settings | ' . $coreProperties->getSiteTitle();

// Sidebar
$this->context->sidebar	= [ 'parent' => 'sidebar-settings' ];

// Breadcrumbs
$this->context->breadcrumbs	= [
	'base' => [ [ 'label' => 'Home', 'url' =>  Url::toRoute( [ '/home' ], true ) ] ],
	'settings' => [ [ 'label' => 'Settings' ] ]
];
?>

<div  class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto">
	<div class="page-content-wrap">
		<div class="page-header-wrap">
			<div class="page-header">
				<div class="page-header-title">
					<div class="text text-small">Settings</div>
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="box box-basic">
				<div class="box-content-wrap form">
					<div class="box-content">
						<div class="cmt-tabs tabs tabs-basic">
							<div class="tab-links-wrap text text-blue">
								<span class="tab-link" target="#tab-content-privacy">Privacy</span>
								<span class="tab-link" target="#tab-content-notification">Notifications</span>
								<span class="tab-link" target="#tab-content-reminder">Reminders</span>
							</div>
							<div class="tab-content-wrap">
								<div id="tab-content-privacy" class="tab-content bkg bkg-white">
									<div class="data-crud data-crud-settings data-crud-settings-privacy padding padding-medium">
										<!--<div class="data-crud-title">Privacy</div>-->
										<form class="form" cmt-app="core" cmt-controller="user" cmt-action="settings" action="<?= $apixBase ?>/settings" cmt-keep>
											<?php include $frmSpinner; ?>
											<div class="data-crud-form">
												<div class="row  margin margin-small-v">
													<div class="col col5x4">
														<p class="text text-large-5">Show Email on public profile.</p>
													</div>
													<div class="col col5 frm-field align align-right">
														<input type="hidden" name="Meta[0][name]" value="show_email" />
														<input type="hidden" name="Meta[0][type]" value="<?= CoreGlobal::SETTINGS_PRIVACY ?>" />
														<input type="hidden" name="Meta[0][valueType]" value="flag" />
														<span class="cmt-switch cmt-checkbox">
															<input id="privacy_show_email" class="cmt-toggle cmt-toggle-round" type="checkbox" name="value" />
															<label for="privacy_show_email"></label>
															<input type="hidden" name="Meta[0][value]" value="<?php if( isset( $privacy[ 'show_email' ] ) ) echo $privacy[ 'show_email' ]->value; ?>" />
														</span>
													</div>
												</div>
												<hr/>
												<div class="row  margin margin-small-v">
													<div class="col col5x4">
														<p class="text text-large-5">Show Mobile on public profile.</p>
													</div>
													<div class="col col5 frm-field align align-right">
														<input type="hidden" name="Meta[1][name]" value="show_mobile" />
														<input type="hidden" name="Meta[1][type]" value="<?= CoreGlobal::SETTINGS_PRIVACY ?>" />
														<input type="hidden" name="Meta[1][valueType]" value="flag" />
														<span class="cmt-switch cmt-checkbox">
															<input id="privacy_show_mobile" class="cmt-toggle cmt-toggle-round" type="checkbox" name="value" />
															<label for="privacy_show_mobile"></label>
															<input type="hidden" name="Meta[1][value]" value="<?php if( isset( $privacy[ 'show_mobile' ] ) ) echo $privacy[ 'show_mobile' ]->value; ?>" />
														</span>
													</div>
												</div>
												<hr/>
												<div class="row  margin margin-small-v">
													<div class="col col5x4">
														<p class="text text-large-5">Show Address on public profile.</p>
													</div>
													<div class="col col5 frm-field align align-right">
														<input type="hidden" name="Meta[2][name]" value="show_address" />
														<input type="hidden" name="Meta[2][type]" value="<?= CoreGlobal::SETTINGS_PRIVACY ?>" />
														<input type="hidden" name="Meta[2][valueType]" value="flag" />
														<span class="cmt-switch cmt-checkbox">
															<input id="privacy_show_address" class="cmt-toggle cmt-toggle-round" type="checkbox" name="value" />
															<label for="privacy_show_address"></label>
															<input type="hidden" name="Meta[2][value]" value="<?php if( isset( $privacy[ 'show_address' ] ) ) echo $privacy[ 'show_address' ]->value; ?>" />
														</span>
													</div>
													<div class="col col1 margin margin-top-medium ">
														<input class="rounded rounded-small btn btn-small right" type="submit" value="Update" />
													</div>
												</div>
											</div>
											<div class="row data-crud-message text text-large-4">
												<div class="col col1 message success"></div>
												<div class="col col1 message warning"></div>
												<div class="col col1 message error"></div>
											</div>
										</form>
									</div>
								</div>
								<div id="tab-content-notification" class="tab-content">
									<div class="data-crud data-crud-settings data-crud-settings-notifications padding padding-medium">
										<!--<div class="data-crud-title">Notifications</div>-->
										<form class="form" cmt-app="core" cmt-controller="user" cmt-action="settings" action="<?= $apixBase ?>/settings" cmt-keep>
											<?php include $frmSpinner; ?>
											<div class="data-crud-form">
												<div class="row margin margin-default-v">
													<div class="col col5x4">
														<p class="text text-large-5">Receive emails of notifications triggered for your personal profile.</p>
													</div>
													<div class="col col5 frm-field align align-right">
														<input type="hidden" name="Meta[0][name]" value="receive_mail" />
														<input type="hidden" name="Meta[0][type]" value="<?= CoreGlobal::SETTINGS_NOTIFICATION ?>" />
														<input type="hidden" name="Meta[0][valueType]" value="flag" />
														<span class="cmt-switch cmt-checkbox">
															<input id="notify_receive_mail" class="cmt-toggle cmt-toggle-round" type="checkbox" name="value" />
															<label for="notify_receive_mail"></label>
															<input type="hidden" name="Meta[0][value]" value="<?php if( isset( $notification[ 'receive_mail' ] ) ) echo $notification[ 'receive_mail' ]->value; ?>" />
														</span>
													</div>
													<div class="col col1 margin margin-top-medium">
														<input class="btn btn-small rounded rounded-small right" type="submit" value="Update" />
													</div>
												</div>
											</div>
											<div class="row  data-crud-message text text-large-4">
												<div class="col col1 message success"></div>
												<div class="col col1 message warning"></div>
												<div class="col col1 message error"></div>
											</div>
										</form>
									</div>
								</div>
								<div id="tab-content-reminder" class="tab-content">
									<div class="data-crud data-crud-settings data-crud-settings-reminders padding padding-medium">
										<!--<div class="data-crud-title">Reminders</div>-->
										<form class="form" cmt-app="core" cmt-controller="user" cmt-action="settings" action="<?= $apixBase ?>/settings" cmt-keep>
											<?php include $frmSpinner; ?>
											<div class="data-crud-form">
												<div class="row">
													<div class="col col5x4">
														<p class="text text-large-5">Receive emails of reminders triggered for your personal profile.</p>
													</div>
													<div class="col col5 frm-field align align-right">
														<input type="hidden" name="Meta[0][name]" value="receive_mail" />
														<input type="hidden" name="Meta[0][type]" value="<?= CoreGlobal::SETTINGS_REMINDER ?>" />
														<input type="hidden" name="Meta[0][valueType]" value="flag" />
														<span class="cmt-switch cmt-checkbox">
															<input id="remind_receive_mail" class="cmt-toggle cmt-toggle-round" type="checkbox" name="value" />
															<label for="remind_receive_mail"></label>
															<input type="hidden" name="Meta[0][value]" value="<?php if( isset( $reminder[ 'receive_mail' ] ) ) echo $reminder[ 'receive_mail' ]->value; ?>" />
														</span>
													</div>
													<div class="col col1 margin margin-top-medium">
														<input class="rounded rounded-small btn btn-small right" type="submit" value="Update" />
													</div>
												</div>
											</div>
											<div class="row data-crud-message text text-large-4">
												<div class="col col1 message success"></div>
												<div class="col col1 message warning"></div>
												<div class="col col1 message error"></div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		

	