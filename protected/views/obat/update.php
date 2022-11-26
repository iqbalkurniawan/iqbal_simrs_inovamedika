<?php
/* @var $this ObatController */
/* @var $model MsObat */

$this->breadcrumbs=array(
	'Ms Obats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsObat', 'url'=>array('index')),
	array('label'=>'Create MsObat', 'url'=>array('create')),
	array('label'=>'View MsObat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsObat', 'url'=>array('admin')),
);
?>

<h1>Update MsObat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>