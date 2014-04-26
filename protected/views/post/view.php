<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $model2 User */
?>

<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);
$model2 = new User;
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
                    <li><i class="icon-user"></i><?php echo $model2->username; ?></li>
                    <li><i class="icon-comments"></i><a href="#"><?php echo $model->commentCount; ?> Comments</a></li>
                </ul>
                <p><?php echo $model->content ?></p>
                <?php echo Chtml::link('Read more', '#', array('class' => 'btn btn-success btn-sucess-inverse')); ?>
            </div><!--/blog-->
<!--/blog-->

            <div class="text-left">
                	<?php echo TbHtml::pagination(array(
					      array('label' => '&laquo;', 'url' => '#'),
					      array('label' => '1', 'url' => '#'),
					      array('label' => '2', 'url' => '#'),
					      array('label' => '3', 'url' => '#'),
					      array('label' => '4', 'url' => '#'),
					      array('label' => '5', 'url' => '#'),
					      array('label' => '&raquo;', 'url' => '#'),
					)); ?>
            </div>

        </div><!--/col-md-9-->

        <!-- Right Sidebar -->
    	<div class="col-md-3 sidebar">
            <!-- Text widdet -->
            <section>
            <?php
            $this->menu=array(
				array('label'=>'List Post', 'url'=>array('index')),
				array('label'=>'Create Post', 'url'=>array('create')),
				array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
				array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
				array('label'=>'Manage Post', 'url'=>array('admin')),
			); ?>
            </section>
            <!-- /Text widdet -->

            <!-- Categories -->
            <!--
            <section>
                <h3 class="content-title">Categories</h3>
                <ul class="list-unstyled menu">
                    <li>
                        <a href="#">Tech</a>
                    </li>
                    <li>
                        <a href="#">Science</a>
                    </li>
                    <li>
                        <a href="#">Music</a>
                    </li>
                    <li>
                        <a href="#">Video</a>
                    </li>
                    <li>
                        <a href="#">Archeology</a>
                    </li>
                </ul>
            </section> -->
            <!-- /Categories -->

            <!-- Recent Posts -->
            <!--
            <section>
                <h3 class="content-title">Recent Posts</h3>

                <ul class="popular-posts">
                    <li>
                        <a class="bwWrapper" href="single_post.html">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/work/work1.jpg">
                        </a>
                        <h5><a href="single_post.html">Lorem Ipsum</a></h5>
                        <p>
                            Lorem Ipsum and here goes the title.
                            <span class="date">30 May 2013</span>
                        </p>
                    </li>
                    <li>
                        <a class="bwWrapper" href="single_post.html">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/work/work2.jpg">
                        </a>
                        <h5><a href="single_post.html">Other sites Ipsum</a></h5>
                        <p>
                            And here goes some other title bla-bla. And here goes some other title bla-bla.
                            <span class="date">30 May 2013</span>
                        </p>
                    </li>
                    <li>
                        <a class="bwWrapper" href="single_post.html">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/work/work3.jpg">
                        </a>
                        <h5><a href="single_post.html">Lorem Ipsum</a></h5>
                        <p>
                            Lorem Ipsum and here goes the title.
                            <span class="date">30 May 2013</span>
                        </p>
                    </li>
                </ul>
            </section>
            -->
            <!-- /Recent Posts -->

            <!-- Accordion -->
            <!--
            <section>
                <div><h3 class="content-title">Dores Nimus</h3></div>
                <div class="panel-group acc-home" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!--/accordion-->

            <!-- Blog Latest Tweets -->
            <!--
            <section>
                <div class="blog-twitter">
                    <h3 class="content-title">Latest Tweets</h3>
                    <p><a href="">@some</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span></p>
                    <p><a href="">@lime</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/f58Ddg4</a> <span>8 hours ago</span></p>
                    <p><a href="">@veroeos</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/adVs9f</a> <span>17 hours ago</span></p>
                    <p><a href="">@accusamus </a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/wf5Fs6</a> <span>23 hours ago</span></p>
                    <p><a href="">@veroeoset</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/7EsffP</a> <span>1 day ago</span></p>
                </div>
            </section> -->
            <!-- /Blog Latest Tweets -->
        </div><!--/col-md-3-->
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->


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