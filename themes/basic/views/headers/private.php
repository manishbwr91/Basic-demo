<?php
// Yii Imports
use yii\helpers\Html;
// CMG Imports
use cmsgears\widgets\nav\BasicNav;

use cmsgears\core\common\utilities\CodeGenUtil;

$menuItems = [ [ 'label' => 'DASHBOARD', 'url' => [ '/home' ] ] ];

$user = Yii::$app->core->getUser();

$menuItems[] = [ 'label' => 'PROFILE', 'url' => [ '/profile' ] ];
$menuItems[] = [ 'label' => 'SETTINGS', 'url' => [ '/settings' ] ];
$menuItems[] = [ 'label' => 'CALENDER', 'url' => [ '/notify/calendar/full' ] ];
$menuItems[] = [ 'label' => 'LOGOUT', 'url' => [ '/logout' ] ];

$breezeTemplates = Yii::getAlias( '@breeze/templates' );

$userAvatar		= isset( $user->avatar ) ? $user->avatar : null;
$avatarThumb	= CodeGenUtil::getImageThumbTag( $userAvatar, [ 'icon' => 'fa fa-user icon', 'class' => 'user-avatar circled circled1' ] );
?>
<header id="header-private" class="header header-basic header-basic-duo header-fixed shadow shadow-primary ">
	<div class=" "></div>
	<div class=" row colf colf15x4 header-logo">
		
		<div class="logo logo-desktop">
			<?= Html::a( "<img class=\"logo\" src=\"$resourceUrl/images/logo5.png\">", [ '/'], null ) ?>
	
		</div>
		<div class="logo logo-mobile">
			<?= Html::a( "<img class=\"logo\" src=\"$resourceUrl/images/mobile-logo1.png\">", [ '/' ], null ) ?>	
		</div>  
	</div>
	<div id="menu-main" class="colf colf15x11 header-menu">
		<div class="cmt-popout-group popout-group popout-group-main nav">
			<div class="popout-actions">
				<span cmt-app="notify" cmt-controller="notification" cmt-action="notificationData" action="notify/stats/stats?type=notification">
					<span class="popout-trigger cmt-auto-hide cmt-click" popout="popout-notification" title="Notifications" data-target="#popout-notification">
						<span id="btn-menu-mobile"class="cmti cmti-2x cmti-flag"></span>
						<span class="count-header count-notification"></span>
					</span>
				</span>
				<span cmt-app="notify" cmt-controller="notification" cmt-action="reminderData" action="notify/stats/stats?type=reminder">
					<span class="popout-trigger cmt-auto-hide cmt-click" popout="popout-reminder" title="Reminders" data-target="#popout-reminder">
						<span class="cmti cmti-2x cmti-bell "></span>
						<span class="count-header count-reminder">0</span>
					</span>
				</span>
				<span cmt-app="notify" cmt-controller="notification" cmt-action="activityData" action="notify/stats/stats?type=activity">
					<span class="popout-trigger cmt-auto-hide cmt-click" popout="popout-activity" title="Activities" data-target="#popout-activity">
						<span class="cmti cmti-2x cmti-listing"></span>
						<span class="count-header count-activity">0</span>
					</span>
				</span>
				<span class="popout-trigger cmti wrap-user " popout="popout-user">
					<?= $avatarThumb ?>
					<span class="fa fa-caret-down"></span>
				</span>
			</div>
			<div class="popouts">
				<div id="popout-notification" class="popout">
					<div class="popout-content-wrap">
						<div class="popout-content">
							<ul>
								<li class="align align-center"><span class="fa fa-spin cmti cmti-2x cmti-spinner-1"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="popout-reminder" class="popout">
					<div class="popout-content-wrap">
						<div class="popout-content">
							<ul>
								<li class="align align-center"><span class="fa fa-spin cmti cmti-2x cmti-spinner-1"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="popout-activity" class="popout">
					<div class="popout-content-wrap">
						<div class="popout-content">
							<ul>
								<li class="align align-center"><span class="fa fa-spin cmti cmti-2x cmti-spinner-1"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="popout-announcement" class="popout">
					<div class="popout-content-wrap">
						<div class="popout-content">
							<ul>
								<li class="align align-center"><span class="fa fa-spin cmti cmti-2x cmti-spinner-1"></span></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="popout-user" class="popout">
					<div class="popout-content-wrap">
						<div class="popout-content">
							<?= BasicNav::widget([
								'options' => [ 'class' => 'vnav' ],
								'items' => $menuItems
							])?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="mobile-actions">
		<span id="btn-menu-mobile" class="mobile-action">
			<i class="cmti cmti-flag"></i>
		</span>
		<span id="btn-menu-mobile" class="mobile-action">
			<i class="cmti cmti-bell"></i>
		</span>
		<span id="btn-menu-mobile" class="mobile-action">
			<i class="cmti cmti-listing"></i>
		</span>
		<span id="btn-menu-mobiles" class="mobile-action">
			<i class="cmti cmti-menu cmti-action"></i>
		</span>
	</div>
	<div id="mobile-actions">
		<div id="menu-mobile-wrap">
			<ul id="menu-main-mobile" class="vnav new-mobile-header">
				<?= BasicNav::widget([
						'options' => [ 'id' => 'menu-main1', 'class' => '' ],
						'items' => $menuItems

					])?>
			</ul>
		</div>
	</div>
</header>
<?php
include "$breezeTemplates/handlebars/notify/user.php";
