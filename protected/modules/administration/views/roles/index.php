<?php
/* @var $this RolesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Roles',
);

$this->menu=array(
	array('label'=>'Create Roles','url'=>array('create')),
	array('label'=>'Manage Roles','url'=>array('admin')),
);
?>

<h1>Roles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>