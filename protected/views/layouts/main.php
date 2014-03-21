<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="demo site">
    <meta name="author" content="tskmatrix">
    <meta name="language" content="en" />

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/headers/header1.css">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/matrix.css">
    <link rel="shortcut icon" href="<?php echo Yii::app() -> request -> baseUrl; ?>/plugins/bootstrap/ico/favicon.png">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/plugins/flexslider/flexslider.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/plugins/parallax-slider/css/parallax-slider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/plugins/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/effects.css">


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php Yii::app()->bootstrap->register(); ?>

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 contact">
				<!-- Logo -->
				<?php echo CHtml::link('<img src="'. Yii::app() -> request -> baseUrl .'/images/logo.png" alt="Logo" />', array('/'), array('class'=>'navbar-brand')); ?>
				<!-- /logo -->
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12 submenu">
                <ul class="loginbar">
                    <li><i class="icon-globe"></i><a href="#">Languages</a>
                        <ul class="nav-list list-unstyled">
                            <li class="active"><a href="#">English</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">Russian</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                    <li><a href="page_faq.html" class="login-btn">Help</a></li>
                    <li><a href="page_login.html" class="login-btn">Login</a></li>
                </ul>
                <ul class="list-inline socials-content socials-light">
                    <li>
                        <a class="rss" href="#">
                            <i class="icon-rss"></i>
                        </a>
                    </li>
                    <li>
                        <a class="fb" href="#">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="tw" href="#">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="gl" href="#">
                            <i class="icon-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pt" href="#">
                            <i class="icon-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a class="lin" href="#">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
 <div class="header">
    <div class="container">

    <!-- Menu -->
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Demo',
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'display' => null, // default is static to top
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Home', 'url' => '/demo', 'active' => true),
               // array('label' => 'Shop', 'url' => array('/demo/store', 'view' => 'products')),
                array('label' => 'Info','items' => array(
                	array('label' => 'About Us','url' => array('/site/page', 'view'=>'about')),
                	array('label' => 'Our Services', 'url' => array('/site/page', 'view'=>'services')),
                	array('label' => 'Contact', 'url' => '/demo/site/Contact'),
                	)),
                array('label' => 'Login', 'url' => '/demo/site/Login', 'visible'=>Yii::app()->user->isGuest),
                array('label' => 'Register', 'url' => '/demo/site/register', 'visible'=>Yii::app()->user->isGuest),
                array('label' => 'Logout ('. Yii::app()->user->name . ')' , 'url' => '/demo/site/Logout', 'visible'=>!Yii::app()->user->isGuest),
                TbHtml::navbarSearchForm('#'),
            ),
        ),
    ),
)); ?>
 </div> <!-- /container -->
 </div> <!--/header -->
<!-- === End Header === -->

<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

    <!-- Start Yii page content -->
	<?php echo $content; ?>
	<!-- End Yii Page Content -->


    <!-- Our Clients -->
    <div id="clients-flexslider" class="flexslider home clients">
        <h3 class="content-title">Our Clients</h3>
        <ul class="slides">
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/hp_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/hp.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/igneus_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/igneus.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/vadafone_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/vadafone.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/walmart_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/walmart.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/shell_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/natural_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/aztec_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/aztec.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/gamescast_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/cisco_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/cisco.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/everyday_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/cocacola_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/cocacola.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/spinworkx_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/shell_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/natural_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/gamescast_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/everyday_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/spinworkx_grey.png" alt="" />
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
        </ul>
    </div><!--/flexslider-->
    <!-- //End Our Clients -->
<!--=== Footer ===-->
<div class="footer">
    <div class="container widgets">
        <div class="row">
            <div class="col-md-3 col-sm-6 margin-bottom-45">
                <!-- About Us -->
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <!-- end About Us -->
            </div>
            <div class="col-md-3 col-sm-6 margin-bottom-45">
                <!-- Recent Posts -->
                <h3>Recent Posts</h3>
                <ul class="list-unstyled f-posts">
                    <li><a href="#">Some Post about something</a><span>Sept 13 2013</span></li>
                    <li><a href="#">Another Post about something</a><span>Sept 12 2013</span></li>
                    <li><a href="#">One more post about something else</a><span>Sept 11 2013</span></li>
                    <li><a href="#">Long header post here</a><span>Sept 10 2013</span></li>
                    <li><a href="#">Lorem Ipsum</a><span>Sept 10 2013</span></li>
                </ul>
                <!-- end Recent Posts -->
            </div>
            <div class="col-md-3 col-sm-6 margin-bottom-45">
            <!-- Tag cloud -->
                <h3>Tag cloud</h3>
                <ul class="list-unstyled list-inline blog-tags margin-bottom-45">
                    <li><a href="#"><i class="icon-tags"></i> Business</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Music</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Internet</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Money</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Google</a></li>
                    <li><a href="#"><i class="icon-tags"></i> TV Shows</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Education</a></li>
                    <li><a href="#"><i class="icon-tags"></i> People</a></li>
                    <li><a href="#"><i class="icon-tags"></i> People</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Math</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Photos</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Electronics</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Apple</a></li>
                </ul>

                <!-- end Tag cloud -->
            <!-- Socials -->
                <h3>Social links</h3>
                <ul class="list-inline socials-content">
                    <li>
                        <a class="rss" href="#">
                            <i class="icon-rss"></i>
                        </a>
                    </li>
                    <li>
                        <a class="fb" href="#">
                            <i class="icon-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="tw" href="#">
                            <i class="icon-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="gl" href="#">
                            <i class="icon-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a class="pt" href="#">
                            <i class="icon-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a class="lin" href="#">
                            <i class="icon-linkedin"></i>
                        </a>
                    </li>
                </ul>
            <!-- end Socials -->
            </div>
            <div class="col-md-3 col-sm-6 margin-bottom-45">
                <!-- Photo stream -->
                <h3>Photo Stream</h3>
                <ul class="list-unstyled blog-ads row">
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/5.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/6.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/8.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/10.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/11.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/1.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/2.jpg" alt="" /></a></li>
                    <li class="col-md-3 col-sm-4 col-xs-2"><a href="#" class="bwWrapper"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sliders/elastislide/7.jpg" alt="" /></a></li>
                </ul>
                <!-- end Photo stream -->
            </div>
        </div><!--/row-->
    </div><!--/container-->
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>2013 &copy; <a href="#">TSKMATRIX</a>. ALL Rights Reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="pull-right">Developed by <a href="http://design.tskmatrix.com/">TSKMATRIX</a></p>
            </div>
        </div><!--/row-->
    </div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/extensions/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/b_and_w/jquery.BlackAndWhite.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/jquery.sticky.js"></script>

<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/index.js"></script>
<script type="text/javascript">
    var ieversion = 0;
    if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
        ieversion=new Number(RegExp.$1); // capture x.x portion and store as a number
    }
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
        App.initBxSlider1();
		// make main menu sticky
		if (( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) && ((ieversion >= 10) || (ieversion == 0))) {
			$(".header").sticky({topSpacing: 0, stickyHeight: 70});
		} else {}
    });
    if (( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) && ((ieversion >= 10) || (ieversion == 0))) {
        $(window).load(function(){
            $('.bwWrapper').BlackAndWhite({
                hoverEffect : true, // default true
                // set the path to BnWWorker.js for a superfast implementation
                webworkerPath : false,
                // for the images with a fluid width and height
                responsive:true,
                // to invert the hover effect
                invertHoverEffect: false,
                // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
                intensity:1,
                speed: { //this property could also be just speed: value for both fadeIn and fadeOut
                    fadeIn: 200, // 200ms for fadeIn animations
                    fadeOut: 800 // 800ms for fadeOut animations
                },
                onImageReady:function(img) {
                    // this callback gets executed anytime an image is converted
                }
            });
        });
    } else {}
</script>
<!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.js"></script>
<![endif]-->
</body>
</html>
