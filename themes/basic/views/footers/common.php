<?php
use cmsgears\widgets\popup\Popup;
?>

<?= Popup::widget( [ 'templateDir' => Yii::getAlias( '@themeTemplates/popup' ), 'template' => 'login', 'title' => 'Login' ] ) ?>
<?= Popup::widget( [ 'templateDir' => Yii::getAlias( '@themeTemplates/popup' ), 'template' => 'register' ] ) ?>
<?= Popup::widget( [ 'templateDir' => Yii::getAlias( '@themeTemplates/popup' ), 'template' => 'forgot-password' ] ) ?>
