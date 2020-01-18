<?php $popoutIndex = rand(0,10);?>
<div class="cmt-popout-group popout-group right">
	<div class="popout-actions">
		<span  class="popout-trigger" popout="popout-user-<?= $popoutIndex?>"><i class="text text-large-4 text text-blue pointer fas fa-ellipsis-v"></i></i></span>
	</div>
	<div class="popouts">
		<div id="popout-user-<?= $popoutIndex?>" class="popout ">
			<div class="popout-content-wrap">
				<div class="popout-content popout-close">
					<ul class="vnav vnav-right">
						<li><a href="">Edit</a></li>
						<li><a href="">Delete</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>