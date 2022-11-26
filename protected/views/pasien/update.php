<?php
/* @var $this PasienController */
/* @var $model MsPasien */

$this->breadcrumbs=array(
	'Ms Pasiens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsPasien', 'url'=>array('index')),
	array('label'=>'Create MsPasien', 'url'=>array('create')),
	array('label'=>'View MsPasien', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsPasien', 'url'=>array('admin')),
);
?>

<h1>Update MsPasien <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>