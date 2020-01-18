<?php
	$themeTemplates = Yii::getAlias( '@themeTemplates' );
?>
<?php include "$themeTemplates/components/spinners/aform.php"; ?>
<form  class="row max-cols-100" action="form/contact-us" method="post" cmt-app="forms" cmt-controller="form" cmt-action="default">
	<div class="block-content-wrap align align-center form">
		<div class="block-content">
			<div class="box-basic">
				<div class="row row-large padding padding-small-h">
					<div class="box-content-wrap align align-center form">
						<div class="box-header-wrap bkg bkg-white">
							<div data-aos="zoom-in-up" data-aos-duration="2000" class="box-header">
								<div class=" slow box-header-title">
									<h2>- Write Us -</h2>
								</div>
							</div>
						</div>
						<div class="row max-cols-50">
							<div class="col col12x4">
								<div class="form-group frm-field">    
										<label>Name*</label>
										<input type="text" name="GenericForm[name]" class="padding padding-default"/>
										<span class="error" cmt-error="GenericForm[name]"></span>
								</div>
							</div>
							<div class="col col12x4">
								<div class="form-group frm-field">    
										<label>Email*</label>
										<input type="text" name="GenericForm[email]" class="padding padding-default" value="testuser1@mail.com"/>
										<span class="error" cmt-error="GenericForm[email]"></span>
								</div>
							</div>
							<div class="col col12x4">
								<div class="form-group frm-field">    
										<label>Subject*</label>
										<input type="text" name="GenericForm[subject]" class="padding padding-default"/>
										<span class="error" cmt-error="GenericForm[subject]"></span>
								</div>
							</div>


							<div class="col col1">
								<div class="form-group frm field">    
										<label>Message</label>
										<textarea name="GenericForm[message]" rows="4" cols="4"></textarea>
										<span class="error" cmt-error="GenericForm[message]"></span>
								</div>
							</div>
							<div class="col col12x4 right row max-cols-50">
								<?= $captchaHtml ?>
								<div class="frm-actions align align-right margin margin-top-small">
									<input class="btn btn-medium rounded rounded-medium" type="submit" name="submit" value="SEND">
								</div>
							</div>
							<div class="message success"></div>
							<div class="message warning"></div>
							<div class="message error"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-with-line bkg bkg-white"></div>
</form>
