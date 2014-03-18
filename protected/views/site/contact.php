<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Contact Us</h1>
 <div class="row-fluid">
    <div class="span12">
        <div class="gmap">
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.4808993526203!2d-95.57218419999998!3d29.994345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640d262b2a8505f%3A0x4d70478f150d9b87!2s110+Vintage+Park+Blvd!5e0!3m2!1sen!2sus!4v1395088157914"
        	width="100%" height="300" frameborder="0" style="border:0"></iframe></div>
    </div>
</div>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
    'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
   ),
)); ?>

<?php //$form=$this->beginWidget('CActiveForm', array(
	//'id'=>'contact-form',
	//'enableClientValidation'=>true,
	//'clientOptions'=>array(
	//	'validateOnSubmit'=>true,
//	),
//)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model, 'name', array('prepend' => '')); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model, 'email', array('prepend' => '@')); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model, 'subject', array('prepend' => '✎', 'size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->textAreaControlGroup($model, 'body',
        array('span' => 60, 'rows' => 6, 'cols'=>60)); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo TbHtml::formActions(array(
		    TbHtml::submitButton('Send Message', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>