<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Blog';
$this->breadcrumbs=array(
	'Blog',
);
?>

<!--=== Content Part ===-->
<div class="container">
	<div class="row blog-page">
        <!-- Left Sidebar -->
    	<div class="col-md-9 pagebar">
        	<div class="blog clearfix">
                <div class="blog-img">
                    <a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/1.jpg" alt="" /></a>
                </div>
                <h3 class="content-title"><a href="#">Pellentesque habitant morbi tristique</a></h3>
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="icon-time"></i>September 12, 2013</li>
                    <li><i class="icon-user"></i>Diana Anderson</li>
                    <li><i class="icon-comments"></i><a href="#">24 Comments</a></li>
                </ul>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <a class="btn btn-success btn-sucess-inverse" href="blog_item.html">Read more</a>
            </div><!--/blog-->

        	<div class="blog clearfix">
                <div class="blog-img">
                    <a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/2.jpg" alt="" /></a>
                </div>
                <h3 class="content-title"><a href="#">Consectetur adipiscing elit similique</a></h3>
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="icon-time"></i>September 10, 2013</li>
                    <li><i class="icon-user"></i>Diana Anderson</li>
                    <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
                <a class="btn btn-success btn-sucess-inverse" href="blog_item.html">Read more</a>
            </div><!--/blog-->

            <div class="blog clearfix">
                <div class="blog-img">
                    <a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/posts/3.jpg" alt="" /></a>
                </div>
                <h3 class="content-title"><a href="#">Blanditiis praesentium voluptatum deleniti</a></h3>
                <ul class="list-unstyled list-inline blog-info">
                    <li><i class="icon-time"></i>September 8, 2013</li>
                    <li><i class="icon-user"></i>David Anderson</li>
                    <li><i class="icon-comments"></i><a href="#">124 Comments</a></li>
                </ul>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias  expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                <a class="btn btn-success btn-sucess-inverse" href="blog_item.html">Read more</a>
            </div><!--/blog-->

            <div class="text-left">
                <ul class="pagination pagination-sm pagination-m">
                    <li><a href="#"><i class="icon-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
            </div>

        </div><!--/col-md-9-->

        <!-- Right Sidebar -->
    	<div class="col-md-3 sidebar">
            <!-- Text widdet -->
            <section>
                <h3 class="title ie8-nomargin">About Lime</h3>
                <p class="text-widget">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
            </section>
            <!-- /Text widdet -->

            <!-- Categories -->
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
            </section>
            <!-- /Categories -->

            <!-- Recent Posts -->
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
            <!-- /Recent Posts -->

            <!-- Accordion -->
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
            </section>
            <!--/accordion-->

            <!-- Blog Latest Tweets -->
            <section>
                <div class="blog-twitter">
                    <h3 class="content-title">Latest Tweets</h3>
                    <p><a href="">@some</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span></p>
                    <p><a href="">@lime</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/f58Ddg4</a> <span>8 hours ago</span></p>
                    <p><a href="">@veroeos</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/adVs9f</a> <span>17 hours ago</span></p>
                    <p><a href="">@accusamus </a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/wf5Fs6</a> <span>23 hours ago</span></p>
                    <p><a href="">@veroeoset</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/7EsffP</a> <span>1 day ago</span></p>
                </div>
            </section>
            <!-- /Blog Latest Tweets -->
        </div><!--/col-md-3-->
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->
