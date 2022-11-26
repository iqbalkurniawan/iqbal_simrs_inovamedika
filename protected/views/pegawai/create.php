<?php
/* @var $this PegawaiController */
/* @var $model MsPegawai */

$this->breadcrumbs=array(
	'Ms Pegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MsPegawai', 'url'=>array('index')),
	array('label'=>'Manage MsPegawai', 'url'=>array('admin')),
);
?>

<h1>Create MsPegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>