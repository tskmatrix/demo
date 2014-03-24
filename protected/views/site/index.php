<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--=== Slider ===-->
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2><i>CLEAN &amp; FRESH</i> <br /> <i>FULLY RESPONSIVE</i> <br /> <i>DESIGN</i></h2>
            <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
            <div class="da-img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/parallax-slider/img/1.png" alt="" /></div>
        </div>
        <div class="da-slide">
            <h2><i>RESPONSIVE VIDEO</i> <br /> <i>SUPPORT AND</i> <br /> <i>MANY MORE</i></h2>
            <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i></p>
            <div class="da-img col-md-6">
                <div class="col-md-6">
                    <iframe src="http://player.vimeo.com/video/47911018" width="100%" height="320" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div>
        </div>
        <div class="da-slide">
            <h2><i>USING BEST WEB</i> <br /> <i>SOLUTIONS WITH</i> <br /> <i>HTML5/CSS3</i></h2>
            <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
            <div class="da-img"><img src="<?php echo Yii::app()->request->baseUrl; ?>/plugins/parallax-slider/img/html5andcss3.png" alt="image01" /></div>
        </div>
        <div class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </div>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->

<!--=== Content Part ===-->
<div class="container">
    <h2 class="slogan">
        Responsive HTML5/CSS3/Yii is Simple to Use, Good-Looking,
        <br>
        Highly Functional. You Do Not Need Anything Else
    </h2>

<!-- Details block -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="detail-box defaultState">
                <div class="detail-entry">
                    <i class="icon-cogs"></i>
                    <h5>Unique & Clean</h5>
                    <p> Aliquam hendrit rutrum iaculis nullam ondimentum maluada velit beum donec sit amet </p>
                </div>
                <div class="transform"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="detail-box">
                <div class="detail-entry">
                    <i class="icon-adjust"></i>
                    <h5>Very Flexible</h5>
                    <p>Aliquam hendrit rutrum iaculis nullam ondimentum maluada velit beum donec sit amet</p>
                </div>
                <div class="transform"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="detail-box">
                <div class="detail-entry">
                    <i class="icon-magnet"></i>
                    <h5>Fully Responsive</h5>
                    <p>Desktop, Tablet or Phone - all get great content presentation<br/>(resize your browser)</p>
                </div>
                <div class="transform"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="detail-box">
                <div class="detail-entry">
                    <i class="icon-magic"></i>
                    <h5>Advanced SEO</h5>
                    <p>Aliquam hendrit rutrum iaculis nullam ondimentum maluada velit beum donec sit amet</p>
                </div>
                <div class="transform"></div>
            </div>
        </div>
    </div>
<!-- //Details block -->

    <hr class="lined-bottom"/>

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

    <div class="margin-bottom-40"></div>

    <!-- tabs & testimonials -->
    <div class="row">
        <div class="col-md-8 col-sm-6">
            <!--  Tabs -->
            <div class="row">
                <div class="col-md-12 tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                        <li><a href="#recent" data-toggle="tab">Recent</a></li>
                        <li><a href="#comments" data-toggle="tab">Comments</a></li>
                    </ul>
                    <!--/tabs-->

                    <div class="tab-content margin-bottom-40">
                        <div class="tab-pane active" id="popular">
                            <p>
                                orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            </p>
                            <p>
                                orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            </p>
                        </div>
                        <div class="tab-pane" id="recent">
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                            </p>
                            <p>
                                Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                            </p>
                        </div>
                        <div class="tab-pane" id="comments">
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                            </p>
                            <p>
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                            </p>
                        </div>
                    </div><!--/tab-content-->
                </div>
            </div>
            <!-- / Tabs-->
        </div>
        <div class="col-md-4 col-sm-6">
        <h3 class="content-title">Client testimonials</h3>
        <div id="testimonal_carousel" class="carousel slide">
            <!-- Carousel nav -->
            <div class="testimonal-arrow">
                <a class="icon-angle-right" href="#testimonal_carousel" data-slide="next"></a>
                <a class="icon-angle-left" href="#testimonal_carousel" data-slide="prev"></a>
            </div>

            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <div class="testimonial">
                        <div class="testimonial-body">
                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc.</p>
                        </div>
                        <div class="testimonial-author">
                            <span class="arrow"></span>
                            <span class="name">John Smith</span>, CEO, Pixel Ltd.
                        </div>
                    </div>
                </div><!--/carousel-inner-->

                <!-- Item -->
                <div class="item">
                    <div class="testimonial">
                        <div class="testimonial-body">
                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc.</p>
                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper.</p>
                        </div>
                        <div class="testimonial-author">
                            <span class="arrow"></span>
                            <span class="name">Lisa Cooper</span>, Art Director, Loop Inc.
                        </div>
                    </div>
                </div><!--/item-->
            </div><!--/testimonal_carousel-->


        </div>
    </div>
</div>
<!-- /tabs & testimonials -->

</div><!--/container-->
<!-- End Content Part -->

