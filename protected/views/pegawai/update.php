<?php
/* @var $this PegawaiController */
/* @var $model MsPegawai */

$this->breadcrumbs=array(
	'Ms Pegawais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsPegawai', 'url'=>array('index')),
	array('label'=>'Create MsPegawai', 'url'=>array('create')),
	array('label'=>'View MsPegawai', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsPegawai', 'url'=>array('admin')),
);
?>

<h1>Update MsPegawai <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>