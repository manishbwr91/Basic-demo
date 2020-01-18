<header id="header-main" class="header header-basic header-basic-duo header-fixed shadow shadow-primary">
	<div class="row">
		<div class="header-logo">
			<div class="logo logo-desktop">
				<a href="<?= $baseUrl ?>">
					<img class="fluid" src="<?= "$resourceUrl/images/logo.png" ?>" />
				</a>
			</div>

			<div class="logo logo-mobile">
				<a href="<?= $baseUrl ?>">
					<img class="fluid" src="<?= "$resourceUrl/images/mobile-logo1.png" ?>" />
				</a>
			</div>    
		</div>
		<ul id="menu-main" class="nav">
			<li><a href="<?= $baseUrl ?>"><span id="btn-menu-mobile" class="mobile-action"><i class="cmti cmti-2x cmti-flag"></i></span></a></li>
			<li><a href="<?= $baseUrl ?>"><span id="btn-menu-mobile" class="mobile-action"><i class="cmti cmti-2x cmti-bell"></i></span></a></li>
			<li><a href="<?= $baseUrl ?>"><span id="btn-menu-mobile" class="mobile-action"><i class="cmti cmti-2x cmti-listing"></i></span></a></li>
			<li><a href="<?= $baseUrl ?>"><span id="btn-menu-mobile" class="mobile-action"><i class="cmti cmti-3x cmti-user-c"></i></span></a></li>
		</ul>
		
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
	</div>
	
	<div id="menu-mobile-wrap" class="relative">
		<ul id="menu-main-mobile"class="vnav">
			<li><a href="<?= $baseUrl ?>">DESHBOARD</a></li>
			<li><a href="<?= $baseUrl ?>">PROFILE</a></li>
			<li><a href="<?= $baseUrl ?>">SETTING</a></li>
			<li><a href="<?= $baseUrl ?>">LOG OUT</a></li>
		</ul>
	</div>
</header>
