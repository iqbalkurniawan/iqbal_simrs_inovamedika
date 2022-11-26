<?php
/* @var $this TrRekammedisController */
/* @var $model TrRekammedis */

$this->breadcrumbs=array(
	'Tr Rekammedises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Registrasi Pasien', 'url'=>array('index')),
	array('label'=>'Manage Registrasi Pasien', 'url'=>array('admin')),
);
?>

<h1>Create Registrasi Pasien</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>