<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

<!--=== Content Part ===-->
<div class="container">
	<div class="row blog-page">
        <!-- Left Sidebar -->
    	<div class="col-md-9 pagebar">

    	<b><?php //echo CHtml::encode($data->getAttributeLabel('id')); ?></b>
	<?php //echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />
			<h1><?php echo $data->title; ?></h1>
			<div class="blog clearfix">
                <div class="blog-img">
                    <a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/1.jpg" alt="" /></a>
                </div>
                <h3 class="content-title"><?php echo CHtml::encode($data->title); ?></h3>
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="icon-time"></i><?php echo CHtml::encode(date('F j, Y \a\t h:i a',$data->update_time)); ?></li>
                    <li><i class="icon-user"></i><?php echo CHtml::encode($data->author_id); ?></li>
                    <li><i class="icon-comments"></i><a href="#">? Comments</a></li>
                    <li><i class="icon-tags"></i><?php echo CHtml::link(CHtml::encode($data->tags), 'tags='.CHtml::encode($data->tags),array('')); ?></li>
                </ul>
                <p><?php echo CHtml::encode($data->content); ?></p>
                <?php echo CHtml::link('Read more', array('view','id'=>$data->id), array('class'=>'btn btn-success btn-sucess-inverse')); ?>
            </div><!--/blog-->
         </div>
    </div>
</div>
</div>