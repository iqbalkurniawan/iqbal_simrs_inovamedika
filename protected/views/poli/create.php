<?php
/* @var $this PoliController */
/* @var $model MsPoli */

$this->breadcrumbs=array(
	'Ms Polis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Poli', 'url'=>array('index')),
	array('label'=>'Manage Poli', 'url'=>array('admin')),
);
?>

<h1>Tambah Poli</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>