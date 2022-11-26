<?php
/* @var $this TindakanController */
/* @var $model MsTindakan */

$this->breadcrumbs=array(
	'Ms Tindakans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsTindakan', 'url'=>array('index')),
	array('label'=>'Create MsTindakan', 'url'=>array('create')),
	array('label'=>'View MsTindakan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsTindakan', 'url'=>array('admin')),
);
?>

<h1>Update MsTindakan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>