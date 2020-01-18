<?php
// CMG Imports
use cmsgears\core\common\config\CoreGlobal;
?>
<div class="data-crud">
	<div class="data-crud-title">Reminders</div>
	<div class="data-crud-form">
		<div class="row">
			<div class="col col2">
				<div class="frm-field row" cmt-app="core" cmt-controller="user" cmt-action="settings" action="admin/toggle-meta?key=receive_mail&ctype=<?= CoreGlobal::SETTINGS_REMINDER ?>" cmt-keep>
					<span class="cmt-switch cmt-checkbox">
						<input id="remind_receive_mail" class="cmt-toggle cmt-toggle-round" type="checkbox" name="value" />
						<label for="remind_receive_mail"></label>
						<input class="cmt-click" type="hidden" name="value" value="<?php if( isset( $reminder[ 'receive_mail' ] ) ) echo $reminder[ 'receive_mail' ]->value; ?>" />
					</span>
					<span class="inline-block padding padding-default-h">Receive emails</span>
				</div>
			</div>
		</div>
	</div>
</div>
