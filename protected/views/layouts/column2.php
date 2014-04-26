<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
 <div class="col-md-9">
	<div id="content">
		<?php echo $content; ?>
	</div> <!-- content -->
 </div>
<div class="col-md-3 sidebar">
			<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

			<?php $this->widget('TagCloud', array(
				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>

			<?php $this->widget('RecentComments', array(
				'maxComments'=>Yii::app()->params['recentCommentCount'],
			));	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>