<?php
/* @var $this TrRekammedisController */
/* @var $model TrRekammedis */

$this->breadcrumbs=array(
	'Registrasi Pasien'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrRekammedis', 'url'=>array('index')),
	array('label'=>'Create TrRekammedis', 'url'=>array('create')),
	array('label'=>'View TrRekammedis', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TrRekammedis', 'url'=>array('admin')),
);
?>

<h1>Update Registrasi Pasien <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>