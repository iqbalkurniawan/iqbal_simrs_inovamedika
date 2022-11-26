<?php
/* @var $this DokterController */
/* @var $model MsDokter */

$this->breadcrumbs=array(
	'Ms Dokters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsDokter', 'url'=>array('index')),
	array('label'=>'Create MsDokter', 'url'=>array('create')),
	array('label'=>'View MsDokter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsDokter', 'url'=>array('admin')),
);
?>

<h1>Update MsDokter <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>