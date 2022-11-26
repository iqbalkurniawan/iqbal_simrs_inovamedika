<?php
/* @var $this TindakanController */
/* @var $model MsTindakan */

$this->breadcrumbs=array(
	'Tindakan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tindakan', 'url'=>array('index')),
	array('label'=>'Manage Tindakan', 'url'=>array('admin')),
);
?>

<h1>Tambah Tindakan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>