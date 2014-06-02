<?php
/* @var $this ForumController */
/* @var $item array */
/* @var $breadcrumbs array */
?>
	<div id="bbii-header">
		<?php if(!Yii::app()->user->isGuest): ?>
		<?php $messages = BbiiMessage::model()->inbox()->unread()->count('sendto = '.Yii::app()->user->id); ?>
			<div class="bbii-profile-box">
			<?php 
				if($messages) {
					echo CHtml::link(CHtml::image($this->module->getRegisteredImage('newmail.png'), Yii::t('BbiiModule.bbii', 'new messages'), array('title'=>$messages . ' ' . Yii::t('BbiiModule.bbii', 'new messages'),'style'=>'vertical-align:bottom;')), array('message/inbox')); 
				} else {
					echo CHtml::link(CHtml::image($this->module->getRegisteredImage('mail.png'), Yii::t('BbiiModule.bbii', 'no new messages'), array('title'=>Yii::t('BbiiModule.bbii', 'no new messages'),'style'=>'vertical-align:bottom;')), array('message/inbox')); 
				}
				echo ' | ' . CHtml::link(CHtml::image($this->module->getRegisteredImage('settings.png'), Yii::t('BbiiModule.bbii', 'My settings'), array('title'=>Yii::t('BbiiModule.bbii', 'My settings'),'style'=>'vertical-align:bottom;')), array('member/view', 'id' =>Yii::app()->user->id)); 
			?>
			</div>
		<?php endif; ?>
		<div class="bbii-title"><?php echo $this->module->forumTitle; ?></div>
		<div id="bbii-menu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>$item
		)); ?>
		</div>
	</div>
	<?php if(isset($this->bbii_breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'homeLink'=>false,
			'links'=>$this->bbii_breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>