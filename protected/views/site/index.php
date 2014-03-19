<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php echo TbHtml::carousel(array(
    array('image' => Yii::app()->request->baseUrl . '/images/areca-multi-purpose-responsive-magento-theme-magento1.png', 'label' => 'First Thumbnail lable', 'caption' => '...'),
    array('image' => Yii::app()->request->baseUrl . '/images/social-media-campaign-steps.png', 'label' => 'Second Thumbnail label', 'caption' => '...'),
    array('image' => Yii::app()->request->baseUrl . '/images/yii_hosting.png', 'label' => 'Third Thumbnail label', 'caption' => '...'),
)); ?>
