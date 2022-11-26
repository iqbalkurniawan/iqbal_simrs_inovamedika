<?php
/* @var $this TindakanController */
/* @var $model MsTindakan */

$this->breadcrumbs=array(
	'Tindakan'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsTindakan', 'url'=>array('index')),
	array('label'=>'Create MsTindakan', 'url'=>array('create')),
	array('label'=>'Update MsTindakan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsTindakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsTindakan', 'url'=>array('*')),
);
?>

<h1>View MsTindakan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_tindakan',
		'harga',
		'created_at',
		'updated_at',
	),
)); ?>
