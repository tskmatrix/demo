<?php
/* @var $this LookupController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Lookups',
);

$this->menu=array(
	array('label'=>'Create Lookup','url'=>array('create')),
	array('label'=>'Manage Lookup','url'=>array('admin')),
);
?>

<h1>Lookups</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>