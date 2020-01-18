<?php
// Yii Imports
use yii\helpers\Url;

// CMG Imports
use cmsgears\widgets\nav\BasicNav;

?>
<footer class="footer footer-basic footer-main">
	<div class="row row-xlarge max-cols-100">
		<div id="textsetup" class="col col12x3 ">
			<div class="line-height line-height-medium">
				<p>
					Lorem ipsum dolar sit amet,consectetuer adipiscing
					elit,sed diam nonummy nibh euismod tincidunt ut
					laoreet dolore magna aliquam erat volutpat.<br>
				</p>
			</div>
		</div>    
		<div id="navsetup" class="col col12x6">
			<div class="row">
				 <div class="col col12x6">
					<div class="vnav vnav-left">
						<ul>
							<li class="text text-large-6 bold">QUICK LINKS</li>
							<li><a href="<?= $baseUrl ?>">About</a></li>
							<li><a href="<?= "$templateUrl/defaults/privacy-policy" ?>">Privacy Policy</a></li>
							<li><a href="">Terms & Conditions</a></li>
					   </ul>
					</div>
				</div>
				<div class="col col12x6">
					<div class="vnav vnav-left">
						<ul>
							<li class="text text-large-6 bold">HELP</li>
							<li><a href="">FAQ</a></li>
							<li><a href="<?= "$templateUrl/defaults/feedback" ?>">Feedback</a></li>
							<li><a href="">Contact</a></li>
					   </ul>
					</div>
				</div>
			</div>
		</div>
		<div id="socialsetup" class="col col12x3">
			<div class="menu-social">
				<a href="https://www.facebook.com/" target="_blank">
						<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-facebook"></i>
				</a>
				<a href="https://www.twitter.com/" target="_blank">
						<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-twitter"></i>
				</a>
				<a href="https://plus.google.com/" target="_blank">
						<i class="icon icon-border icon-rounded cmti cmti-1-5x cmti-social-google"></i>
				</a>
			</div>
		</div>
	</div>
	
	<footer id="copyright" class="footer-copyright">
		<div class="content-90">
			<div class="padding padding-top-large padding padding-bottom-default">
				<p>Copyright © 2016-2017 www.cmsgears.com.All Rights Reserved.</p>
			</div>
		</div>
	</footer>
</footer>

