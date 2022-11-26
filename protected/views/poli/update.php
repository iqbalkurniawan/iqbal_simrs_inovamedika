<?php
/* @var $this PoliController */
/* @var $model MsPoli */

$this->breadcrumbs=array(
	'Ms Polis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsPoli', 'url'=>array('index')),
	array('label'=>'Create MsPoli', 'url'=>array('create')),
	array('label'=>'View MsPoli', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsPoli', 'url'=>array('admin')),
);
?>

<h1>Update MsPoli <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>