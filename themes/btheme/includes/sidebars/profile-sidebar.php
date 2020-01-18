<?php
// Sidebar
$parent = isset( $sidebar ) && isset( $sidebar[ 'parent' ] ) ? $sidebar[ 'parent' ] : '';
$child	= isset( $sidebar ) && isset( $sidebar[ 'child' ] ) ? $sidebar[ 'child' ] : '';
?>

<div class="profile-bar">
	<div id="sidebar-main" class="sidebar sidebar-main">
		<div class="sidebar-uploader">
			<div class="box-file-uploader-direct cmt-file-uploader file-uploader">
				<div class="box-content">
					<div class="box-content-data">
						<div class="file-wrap">
							<div class="card card-file">
								<div class="card-data file-data">
									<i class="face cmti cmti-3x cmti-user-o"></i>
								</div>
							</div>
						</div>
						<div class="chooser-wrap">
							<div class="filler-height"></div>
							<div class="filler-height"></div>
							<div class="card card-file-chooser file-chooser">
								<div class="card-data">
									<div class="btn btn-large rounded rounded-medium">CHANGE PHOTO
										<input type="file" class="input">
									</div>
								</div>
							</div>
							<div class="file-preloader">
								<div class="file-preloader-bar" style="width: 0%;"></div>
							</div>
						</div>
						<div class="form-wrap">
							<div class="file-info"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="collapsible-menu-wrap">
			<div class="collapsible-menu-scroller cscroller">
				<div class="collapsible-menu collapsible-menu-sidebar">
					<div id="sidebar-home" class="collapsible-tab <?= strcmp( $parent, 'home' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/deshboard" ?>">
								<div class="tab-icon"><span class="cmti cmti-dashboard"></span></div>
								<div class="tab-title">Deshboard</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'fields' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/profile" ?>">
								<div class="tab-icon"><span class="cmti cmti-user"></span></div>
								<div class="tab-title">Profile</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'buttons' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/settings" ?>">
								<div class="tab-icon"><span class="cmti cmti-setting"></span></div>
								<div class="tab-title">Settings</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'fields' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/notifications" ?>">
								<div class="tab-icon"><span class="cmti cmti-bell-o"></span></div>
								<div class="tab-title">Notifications</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'fields' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/reminders" ?>">
								<div class="tab-icon"><span class="cmti cmti-vc-vulpinecode"></span></div>
								<div class="tab-title">Reminders</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'buttons' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/activities" ?>">
								<div class="tab-icon"><span class="cmti cmti-dashboard"></span></div>
								<div class="tab-title">Activities</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'fields' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "$templateUrl/private/events" ?>">
								<div class="tab-icon"><span class="cmti cmti-event"></span></div>
								<div class="tab-title">Events</div>
							</a>
						</div>
					</div>
					<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'buttons' ) == 0 ? 'active' : null ?>">
						<span class="marker"></span>
						<div class="tab-header">
							<a href="<?= "#" ?>">
								<div class="tab-icon"><span class="cmti cmti-logout"></span></div>
								<div class="tab-title">Logout</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
