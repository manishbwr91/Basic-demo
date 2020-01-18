<?php
$coreProperties	= $this->context->getCoreProperties();
// Page
$this->title = 'Home | ' . $coreProperties->getSiteTitle();
// Sidebar
$this->context->sidebar	= [ 'parent' => 'sidebar-dashboard' ];
?>	
<div class="bkg bkg-white page page-basic cmt-block" cmt-block="block-full-auto">
	<div class="page-content-wrap">
		<div class="page-header-wrap">
			<div class="page-header">
				<div class="page-header-title">
					<div class="text text-small">Deshboard</div>
				</div>
			</div>
		</div>
		<div class="page-content">
			<div id="profile-message">
				<div class="box box-basic">
					<div class="box-content-wrap rounded rounded-medium shadow shadow-black">
						<div class="box-header-wrap">
							<div class="box-header-title">
								<div class="bold">Demo Message</div>
							</div>
						</div>
						<div class="box-content">
							<p class="reader">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>
				</div>
			</div>
			<p class="h4">Recent Activities</p>
			<table class="table table-hover table wrap-table margin margin-top-default bkg bkg-white">
				<thead>
					<th>Title</th>
					<th>Description</th>
					<th>Date</th>
				</thead>
				<tbody>
					<?php for( $i = 1; $i <= 5; $i++  ){?>
						<tr>
							<td class="bold">Lorem Ispum has been</td>
							<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
							<td>Jan 26 2018</td>
						</tr>
					<?php } ?>
				 </tbody>
			</table>
		</div>
	</div>	
</div>
			