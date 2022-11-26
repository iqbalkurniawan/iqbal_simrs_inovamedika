<?php
/* @var $this UserController */
/* @var $model MsUser */

$this->breadcrumbs=array(
	'Ms Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsUser', 'url'=>array('index')),
	array('label'=>'Create MsUser', 'url'=>array('create')),
	array('label'=>'View MsUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsUser', 'url'=>array('admin')),
);
?>

<h1>Update MsUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>