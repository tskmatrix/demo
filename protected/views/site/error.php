<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-red pull-left">ERROR</h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== Content Part ===-->
<div class="container">
	<div class="row page-404">
        <div class="col-md-6"><p><?php echo $code; ?></p></div>
        <div class="col-md-6">
            <p class="margin-top-20"><span><?php echo CHtml::encode($message); ?></span></p>
            <center><a href="<?php echo Yii::app()->homeURL; ?>" class="btn btn-lg btn-danger"><i class="icon-chevron-left"></i> Return to Home page</a></center>
        </div>
    </div><!--/row-->
</div><!--/container-->
<!--=== End Content Part ===-->