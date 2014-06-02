<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php
$model = new Post;
?>
<div class="container">
 <div class="col-md-9">
	<div id="content">
		<?php echo $content; ?>
	</div> <!-- content -->
 </div>
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

            <section>
                <div><h3 class="content-title">Blog Items</h3></div>
                <div class="panel-group acc-home" id="accordion">
                	<!--
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                &nbsp; Statistics
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. </p>
                            </div>
                        </div>
                    </div> -->
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                &nbsp; Recent Comments
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <?php $this->widget('RecentComments', array(
							        'maxComments'=>Yii::app()->params['recentCommentCount'],
							    )); ?>

                            </div>
                        </div>
                    </div> <!--
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
                    </div> -->
                </div>
            </section>
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
<!-- sponsors -->
<?php

    $sponsors = array(
        //sample
        //array('sponsora','Sponsor short text','http://www.yiiframework.com/','yii title'),   //this has custom title
        array('sponsora','Sponsor short text',Yii::app()->request->baseUrl,'yii title'),   //this has custom title
        array('sponsorb','Sponsor short text',Yii::app()->request->baseUrl),
        array('sponsorc','Sponsor short text',Yii::app()->request->baseUrl),
        array('sponsord','Sponsor short text',Yii::app()->request->baseUrl)
    );
    $this->widget('ext.mflip.MFlip',array(
        'sponsors'=>$sponsors,    //the items to be flipped
        'single'=>false,          //flip one item at a time;default is false
        'shuffle'=>false,          //shuffle the array?
        'title'=>'flip me', //default title for all items. Will be bypassed if the 4th item of sponsors array is present
        'openNew'=>true           //opens the link in new tab (or window)
    ));


?>
        <?php SearchAction::renderInputBox(); ?>
		<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

		<?php $this->widget('TagCloud', array(
			'maxTags'=>Yii::app()->params['tagCloudCount'],
		)); ?>


	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>