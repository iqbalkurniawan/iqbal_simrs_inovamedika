<?php
/* @var $this ObatController */
/* @var $model MsObat */

$this->breadcrumbs=array(
	'Obat'=>array('index'),
	
	$model->id,
);

$this->menu=array(
	array('label'=>'List Obat', 'url'=>array('index')),
	array('label'=>'Create Obat', 'url'=>array('create')),
	array('label'=>'Update Obat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Obat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obat', 'url'=>array('*')),
);
?>

<h1>View Obat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_obat',
		'satuan',
		'stok',
		'created_at',
		'updated_at',
	),
)); ?>
