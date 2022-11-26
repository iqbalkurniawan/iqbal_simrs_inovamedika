<?php
/* @var $this UnitkerjaController */
/* @var $model MsUnitKerja */

$this->breadcrumbs=array(
	'Ms Unit Kerjas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MsUnitKerja', 'url'=>array('index')),
	array('label'=>'Manage MsUnitKerja', 'url'=>array('admin')),
);
?>

<h1>Create MsUnitKerja</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>