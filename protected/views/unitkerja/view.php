<?php
/* @var $this UnitkerjaController */
/* @var $model MsUnitKerja */

$this->breadcrumbs=array(
	'Unit Kerja'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsUnitKerja', 'url'=>array('index')),
	array('label'=>'Create MsUnitKerja', 'url'=>array('create')),
	array('label'=>'Update MsUnitKerja', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsUnitKerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsUnitKerja', 'url'=>array('admin')),
);
?>

<h1>View MsUnitKerja #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'unit',
		'created_at',
		'updated_at',
	),
)); ?>
