<span cmt-app="notify" cmt-controller="notification" cmt-action="toggleRead" action="notify/reminder/toggle-read?id=<?= $model->id ?>">
	<div class="spinner max-area-cover">
		<div class="valign-center cmti cmti-2x cmti-spinner-1 spin"></div>
	</div>
	<span class="cmt-click cmti <?= $model->isConsumed() ? 'cmti-envelope-o' : 'cmti-envelope' ?>" title="<?= $model->isConsumed() ? 'Mark Unread' : 'Mark Read' ?>"></span>
</span>
<?php if( $model->isTrash() ) { ?>
	<span cmt-app="notify" cmt-controller="notification" cmt-action="delete" action="notify/reminder/delete?id=<?= $model->id ?>">
		<div class="spinner max-area-cover">
			<div class="valign-center cmti cmti-spinner-1 spin"></div>
		</div>
		<span class="cmt-click cmti cmti-close-c" title="Delete"></span>
	</span>
<?php } else { ?>
	<span cmt-app="notify" cmt-controller="notification" cmt-action="trash" action="notify/reminder/trash?id=<?= $model->id ?>">
		<div class="spinner max-area-cover">
			<div class="valign-center cmti cmti-spinner-1 spin"></div>
		</div>
		<span class="cmt-click cmti cmti-bin" title="Trash"></span>
	</span>
<?php } ?>
