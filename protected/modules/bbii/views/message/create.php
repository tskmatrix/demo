<?php
/* @var $this MessageController */
/* @var $model BbiiMessage */
/* @var $count Array */

$this->bbii_breadcrumbs=array(
	Yii::t('BbiiModule.bbii', 'Forum')=>array('/forum/forum/index'),
	($this->action->id == 'create')?Yii::t('BbiiModule.bbii', 'New message'):Yii::t('BbiiModule.bbii', 'Reply'),
);

$item = array(
	array('label'=>Yii::t('BbiiModule.bbii', 'Inbox') .' ('. $count['inbox'] .')', 'url'=>array('/forum/message/inbox')),
	array('label'=>Yii::t('BbiiModule.bbii', 'Outbox') .' ('. $count['outbox'] .')', 'url'=>array('/forum/message/outbox')),
	array('label'=>Yii::t('BbiiModule.bbii', 'New message'), 'url'=>array('/forum/message/create'))
);
?>
<div id="bbii-wrapper">
	<?php echo $this->renderPartial('_header', array('item'=>$item)); ?>

	<h1><?php echo ($this->action->id == 'create')?Yii::t('BbiiModule.bbii', 'New message'):Yii::t('BbiiModule.bbii', 'Reply'); ?></h1>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>