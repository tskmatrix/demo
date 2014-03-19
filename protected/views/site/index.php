<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php echo TbHtml::carousel(array(
    array('image' => Yii::app()->request->baseUrl . '/images/areca-multi-purpose-responsive-magento-theme-magento1.png', 'label' => 'This site is built with', 'caption' => 'CSS3, HTML5, jQuery,and the YiiStrap Extension'),
    array('image' => Yii::app()->request->baseUrl . '/images/social-media-campaign-steps.png', 'label' => 'Social Media', 'caption' => 'Campaign steps'),
    array('image' => Yii::app()->request->baseUrl . '/images/yii_hosting.png', 'label' => 'Yii Framework', 'caption' => 'A PHP MVC programming framework'),
)); ?>
