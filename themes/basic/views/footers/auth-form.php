<?php
// Yii Imports
use yii\helpers\Url;
?>
<div class="page-footer-wrap absolute absolute-bottom-center">				
	<div class="page-footer">
		<div class="page-footer-info">	
			<div class="nav">
				<li><a href="<?= Url::to(['/']) ?>">About</a></li>
				<li><a href="<?= Url::to(['/privacy']) ?>">Privacy Policy</a></li>
				<li><a href="<?= Url::to(['/terms']) ?>">Terms & Conditions</a></li>
				<li><a href="<?= Url::to(['/faq']) ?>">FAQ</a></li>
				<li><a href="<?= Url::to(['/feedback']) ?>">Feedback</a></li>
				<li><a href="<?= Url::to(['/form/contact-us']) ?>">Contact</a></li>
			</div>
		</div>
	</div>
</div>