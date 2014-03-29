<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<div class="form">
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
    'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
   ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->textFieldControlGroup($model, 'username', array('prepend' => '<span class="input-group-addon"><i class="icon-user"></i></span>')); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordFieldControlGroup($model, 'password', array('prepend' => '<span class="input-group-addon"><i class="icon-lock"></i></span>')); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->inlineCheckBoxListControlGroup($model, 'rememberMe', array(' the next time I login.')); ?>
	</div>

	<div class="row buttons">
		<?php echo TbHtml::formActions(array(
		    TbHtml::submitButton('Login', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		    TbHtml::button('Cancel'),
)); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
