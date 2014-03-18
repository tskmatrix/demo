<?php /* @var $this DefaultController */ ?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-min.css" rel="stylesheet">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php Yii::app()->bootstrap->register(); ?>

<div class="container" id="page">
	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Demo',
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'display' => null, // default is static to top
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Home', 'url' => '/demo', 'active' => true),
                array('label' => 'Admin', 'url' => array('/administration')),
                array('label' => 'Users','url' => array('/administration/users')),
                array('label' => 'Roles', 'url' => array('/administration/roles')),
                array('label' => 'Login', 'url' => '/demo/site/Login', 'visible'=>Yii::app()->user->isGuest),
                array('label' => 'Register', 'url' => '/demo/site/register', 'visible'=>Yii::app()->user->isGuest),
                array('label' => 'Logout ('. Yii::app()->user->name . ')' , 'url' => '/demo/site/Logout', 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
)); ?>
	</div><!-- mainmenu -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
        Administration
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
