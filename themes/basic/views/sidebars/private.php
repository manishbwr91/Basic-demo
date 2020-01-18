<?php
// Yii Imports
use yii\helpers\Url;
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;
use cmsgears\core\common\utilities\CodeGenUtil;
use cmsgears\files\widgets\AvatarUploader;
// Sidebar
$sidebar	= $this->context->sidebar;
$parent		= isset( $sidebar[ 'parent' ] ) ? $sidebar[ 'parent' ] : '';
$child		= isset( $sidebar[ 'child' ] ) ? $sidebar[ 'child' ] : '';
// User Settings
$user			= Yii::$app->core->getUser();
$microSidebar	= $user->getDataConfigMeta( CoreGlobal::DATA_SIDEBAR_MICRO );

$uploaderView	= "@themeTemplates/widget/views/avatar/uploader";
$chooserView	= "@themeTemplates/widget/views/avatar/chooser";
$draggerView	= "@themeTemplates/widget/views/avatar/dragger";
$containerView	= "@themeTemplates/widget/views/avatar/container";
$formView	= "@themeTemplates/widget/views/avatar/form";

$userAvatar		= isset( $user->avatar ) ? $user->avatar : null;
$avatarThumb	= CodeGenUtil::getImageThumbTag( $userAvatar, [ 'icon' => 'fa fa-user icon', 'class' => 'user-avatar' ] );
?>
<div class="profile-bar">
	<div id="sidebar-main" class=" profile-bar sidebar sidebar-main ">
		<div class="sidebar-uploader">
			<div type="image" class="box box-file-uploader custom-file-uploader" directory="avatar" gen="0">
				<div class="collapsible-tab">
					<?= AvatarUploader::widget([
						'model' => $user->avatar,
						'uploaderView' => $uploaderView,
						'dragger' => $draggerView,
						'containerView'=> $containerView,
						'chooserView' => $chooserView,
						'formView' => $formView,
						'postAction' => true, 'postActionUrl' => "user/assign-avatar?id=$user->id",
						'clearAction' => true, 'clearActionUrl' => "user/clear-avatar?id=$user->id",
						'cmtController' => 'user', 'cmtAction' => 'assignAvatar', 'cmtClearAction' => 'clearAvatar',
						'info' => true, 'fields' => false, 'dragger' => true
					])?>
				</div>
			</div>
		</div>
		<div class="collapsible-menu-wrap">
			<div class="collapsible-menu-scroller cscroller">
				<div class="collapsible-menu collapsible-menu-sidebar">
					<div id="sidebar-home" class="collapsible-tab <?= strcmp( $parent, 'deshboard' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/home	' ] ) ?>">
								<div class="tab-icon"><span class="cmti cmti-dashboard"></span></div>
								<div class="tab-title">Deshboard</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'sidebar-profile' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/profile' ] ) ?>">
								<div class="tab-icon"><span class="cmti cmti-user"></span></div>
								<div class="tab-title">Profile</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields">
					<div id="sidebar-setting" class="collapsible-tab <?= strcmp( $parent, 'sidebar-settings' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/settings' ] ) ?>">
								<div class="tab-icon"><span class="cmti cmti-setting"></span></div>
								<div class="tab-title">Settings</div>
							</a>
						</div>
					</div>
					</div>
					<div id="idebar-fields" class="collapsible-tab  <?= strcmp( $parent, 'sidebar-notification' ) == 0 ? 'active' : 'null' ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/notify/notification/all' ] ) ?>">
								<div class="tab-icon"><span class="fa fa-bell"></span></div>
								<div class="tab-title">Notifications</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'sidebar-reminder' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/notify/reminder/all' ] ) ?>">
								<div class="tab-icon"><span class="fa fa-clipboard-list"></span></div>
								<div class="tab-title">Reminders</div>
							</a>
						</div>
					</div>
	
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'sidebar-activity' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/notify/activity/all' ] ) ?>">
								<div class="tab-icon"><span class="cmti cmti-dashboard"></span></div>
								<div class="tab-title">Activities</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'sidebar-calendar' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= Url::toRoute( [ '/notify/calendar/all' ] ) ?>">
								<div class="tab-icon"><span class="cmti cmti-calendar"></span></div>
								<div class="tab-title">Events</div>
							</a>
						</div>
					</div>
					<div class="collapsible-tab" id="btn-logout">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?php echo Url::toRoute( [ '/core/site/logout' ] ); ?>" class="clearfix">
								<div class="tab-icon"><span class="cmti cmti-power"></span></div>
								<div class="tab-title">Logout</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="btn-sidebar-main" class="btn-sidebar-main">
			<div class="sidebar-trigger-expanded">
				<i class="icon fa fas fa-angle-double-left"></i>
				<span class="inline-block padding padding-left-default">Collapse</span>
			</div>
			<div class="sidebar-trigger-collapsed align align-center">
				<i class="icon fa fas fa-angle-double-right"></i>
			</div>
		</div>
	</div>
</div>