<?php
// Sidebar
$parent = isset( $sidebar ) && isset( $sidebar[ 'parent' ] ) ? $sidebar[ 'parent' ] : '';
$child	= isset( $sidebar ) && isset( $sidebar[ 'child' ] ) ? $sidebar[ 'child' ] : '';
?>
<div id="sidebar-main" class="sidebar sidebar-main">
	<div id="btn-sidebar-close" class="btn-sidebar-main align align-center">
		<i class="icon fa fas fa-window-close"></i>
	</div>
	<div class="collapsible-menu-wrap">
		<div class="collapsible-menu-scroller cscroller">
			<div class="collapsible-menu collapsible-menu-sidebar">
				<div id="sidebar-home" class="collapsible-tab <?= strcmp( $parent, 'home' ) == 0 ? 'active' : null ?>">
					<span class="marker"></span>
					<div class="tab-header">
						<a href="<?= "$baseUrl/components" ?>">
							<div class="tab-icon"><span class="cmti cmti-dashboard"></span></div>
							<div class="tab-title">Home</div>
						</a>
					</div>
				</div>
				<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'fields' ) == 0 ? 'active' : null ?>">
					<span class="marker"></span>
					<div class="tab-header">
						<a href="<?= "$baseUrl/components/fields" ?>">
							<div class="tab-icon"><span class="cmti cmti-cart-bag"></span></div>
							<div class="tab-title">Fields</div>
						</a>
					</div>
				</div>
				<div id="sidebar-fields" class="collapsible-tab <?= strcmp( $parent, 'buttons' ) == 0 ? 'active' : null ?>">
					<span class="marker"></span>
					<div class="tab-header">
						<a href="<?= "$baseUrl/components/buttons" ?>">
							<div class="tab-icon"><span class="cmti cmti-cart-bag"></span></div>
							<div class="tab-title">Buttons</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="btn-sidebar-main" class="btn-sidebar-main">
		<div class="sidebar-trigger-expanded align align-center">
			<i class="icon cmti cmti-angle-left"></i>
		</div>
		<div class="sidebar-trigger-collapsed align align-center">
			<i class="icon cmti cmti-angle-right"></i>
		</div>
	</div>
</div>
