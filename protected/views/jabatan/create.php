<?php
/* @var $this JabatanController */
/* @var $model MsJabatan */

$this->breadcrumbs=array(
	'Ms Jabatans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jabatan', 'url'=>array('index')),
	array('label'=>'Manage Jabatan', 'url'=>array('admin')),
);
?>

<h1>Tambah Jabatan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>