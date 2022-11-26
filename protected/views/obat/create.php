<?php
/* @var $this ObatController */
/* @var $model MsObat */

$this->breadcrumbs=array(
	'Obat'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Daftar Obat', 'url'=>array('index')),
	array('label'=>'Manage Obat', 'url'=>array('admin')),
);
?>

<h1>Tambah Obat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>