<?php
/* @var $this UnitkerjaController */
/* @var $model MsUnitKerja */

$this->breadcrumbs=array(
	'Ms Unit Kerjas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsUnitKerja', 'url'=>array('index')),
	array('label'=>'Create MsUnitKerja', 'url'=>array('create')),
	array('label'=>'View MsUnitKerja', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsUnitKerja', 'url'=>array('admin')),
);
?>

<h1>Update MsUnitKerja <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>