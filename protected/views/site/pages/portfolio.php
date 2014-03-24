<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Portfolio';
$this->breadcrumbs=array(
	'Portfolio',
);
?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-red pull-left">Portfolio</h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->
<!--=== Content Part ===-->
<div class="container recent-work">
	<div class="row">
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="' . Yii::app()->request->baseUrl .'/images/carousel/1.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 1</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/site/page', 'view'=>'portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl . '/images/carousel/2.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
	                <span><strong>Portfolio Item 2</strong>
	                <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
	                </span>', array('/site/page', 'view'=>'portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'.Yii::app()->request->baseUrl . '/images/carousel/3.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 3</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/site/page', 'view'=>'portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
            	<em class="overflow-hidden bwWrapper">
                <?php echo CHtml::link('<img src="'. Yii::app()->request->baseUrl . '/images/carousel/4.jpg" alt="" /><div class="link-overlay">
                <i class="icon-search"></i>
                </div>
                </em>
                    <span>
                        <strong>Portfolio Item 4</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/site/page', 'view'=>'portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
            	<em class="overflow-hidden bwWrapper">
                <?php echo CHtml::link('<img src="'. Yii::app()->request->baseUrl . '/images/carousel/5.jpg" alt="" />',
                    array('/demo/portfolio_item'), array('class'=>'')); ?>
                    <div class="link-overlay">
                    	<i class="icon-search"></i>
                    </div>
                    </em>
                    <span>
                        <strong>Portfolio Item 5</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl .'/images/carousel/6.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 6</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="' . Yii::app()->request->baseUrl .'/images/carousel/7.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 7</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl . '/images/carousel/8.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 8</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl . '/images/carousel/9.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 9</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl . '/images/carousel/10.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 10</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl. '/images/carousel/4.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 11</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/portfolio_item'), array('')); ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="portfolio-img">
                <?php echo CHtml::link('<em class="overflow-hidden bwWrapper"><img src="'. Yii::app()->request->baseUrl . '/images/carousel/5.jpg" alt="" /><div class="link-overlay"><i class="icon-search"></i></div></em>
                    <span>
                        <strong>Portfolio Item 12</strong>
                        <em>At vero eos et accusamus et iusto odio dignissimos dolores et quas molestias excepturi sint occaecati</em>
                    </span>', array('/demo/protfilio_item'), array('')); ?>
            </div>
        </div>
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->

