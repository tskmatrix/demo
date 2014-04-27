<?php
/**
 * @param used by the single blog article page
 * @var $this PostController
 * @var $model Post
 *
 */
?>

<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

?>
<h1><?php echo $model->title; ?></h1>
<!-- === Content Part ===-->
<div class="container">
	<div class="row blog-page">
        <!-- Left Sidebar -->
    	<div class="col-md-9 pagebar">
        	<div class="blog clearfix">
                <div class="blog-img">
                    <a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/1.jpg" alt="" /></a>
                </div>
                <h3 class="content-title">
                	<?php echo CHtml::link($model->title,'#',array()); ?>
                </h3>
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="icon-time"></i><?php echo date('F j, Y \a\t h:i a',$model->create_time); ?></li>
                    <li><i class="icon-user"></i><?php echo $model->author_id; ?></li>
                    <li><i class="icon-comments"></i><a href="#"><?php echo $model->commentCount; ?> Comments</a></li>
                </ul>
                <p><?php echo $model->content ?></p>
                <?php // echo Chtml::link('Read more', '#', array('class' => 'btn btn-success btn-sucess-inverse')); ?>
            </div><!--/blog-->
<!--/blog-->

            <div class="text-left">
                	<?php /*
                	echo TbHtml::pagination(array(
					      array('label' => '&laquo;', 'url' => '#'),
					      array('label' => '1', 'url' => '#'),
					      array('label' => '2', 'url' => '#'),
					      array('label' => '3', 'url' => '#'),
					      array('label' => '4', 'url' => '#'),
					      array('label' => '5', 'url' => '#'),
					      array('label' => '&raquo;', 'url' => '#'),
					));
					 */
					?>
            </div>
			<div id="comments">
				<?php if($model->commentCount>=1): ?>
					<h3>
						<?php echo $model->commentCount>1 ? $model->commentCount . ' comments' : 'One comment'; ?>
					</h3>

					<?php $this->renderPartial('_comments',array(
						'post'=>$model,
						'comments'=>$model->comments,
					)); ?>
				<?php endif; ?>

				<h3>Leave a Comment</h3>

				<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
					<div class="flash-success">
						<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
					</div>
				<?php else: ?>
					<?php $this->renderPartial('/comment/_form',array(
						'model'=>$comment,
					)); ?>
				<?php endif; ?>

			</div><!-- comments -->
        </div><!--/col-md-9-->
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->


