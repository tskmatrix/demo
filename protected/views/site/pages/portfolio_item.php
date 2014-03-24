<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Portfolio Item';
$this->breadcrumbs=array(
	'Portfolio Item',
);
?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-red pull-left">Portfolio Item</h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container portfolio-item">
	<div class="row">
		<!-- Carousel -->
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide margin-bottom-20">
                <ol class="carousel-indicators">
                    <li class="" data-slide-to="0" data-target="#myCarousel"></li>
                    <li data-slide-to="1" data-target="#myCarousel" class="active"></li>
                    <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/revolution/bg4.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>First Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/revolution/bg2.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Second Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/revolution/bg7.jpg" alt="">
                        <div class="carousel-caption">
                            <h4>Third Thumbnail label</h4>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta.</p>
                        </div>
                    </div>
                </div>
                <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                    <span class="icon-prev"></span>
                </a>
                <a data-slide="next" href="#myCarousel" class="right carousel-control">
                    <span class="icon-next"></span>
                </a>
            </div>
        </div><!--/col-md-7-->
        <!-- //End Tabs and Carousel -->
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-4 margin-bottom-20">
            <ul class="list-unstyled">
                <li><strong>Client:</strong> Vasya Pupkin</li>
                <li><strong>Date:</strong> September 25 2013</li>
            </ul>
            <a href="#" class="btn btn-success btn-sucess-inverse">Learn more</a>
        </div>
        <div class="col-md-4 col-sm-4">
            <p>At vero eos et accusamus et iusto odio dignissimos <a href="#">ducimus qui blanditiis</a> praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus.</p>
        </div>
        <div class="col-md-4 col-sm-4">
            <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
            <p>Molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus.</p>
        </div>
    </div><!--/row-->

    <hr class="lined"/>

	<!-- Recent Works -->
    <h3 class="content-title">Recent Works</h3>
    <div class="row">
        <ul id="list" class="bxslider recent-work">
            <li>
                <a href="#">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/2.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Happy New Year</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/3.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Award Winning Agency</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/4.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Wolf Moon Officia</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="portfolio_item.html">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/5.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Food Truck Quinoa Nesciunt</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/4.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Wolf Moon Officia</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="portfolio_item.html">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/5.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Food Truck Quinoa Nesciunt</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/3.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Award Winning Agency</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <em class="overflow-hidden bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/portfolioSorting/img/2.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Happy New Year</strong>
                        <em>Anim pariatur cliche reprehenderit</em>
                    </span>
                </a>
            </li>
        </ul>
	</div><!--/row-->
	<!-- //End Recent Works -->
</div><!--/container-->
<!--=== End Content Part ===-->
