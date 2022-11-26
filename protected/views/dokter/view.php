<?php
/* @var $this DokterController */
/* @var $model MsDokter */

$this->breadcrumbs=array(
	'Dokter'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsDokter', 'url'=>array('index')),
	array('label'=>'Create MsDokter', 'url'=>array('create')),
	array('label'=>'Update MsDokter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsDokter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsDokter', 'url'=>array('admin')),
);
?>

<h1>View Dokter<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomor_str',
		'nama_dokter',
		'poli_id',
		'created_at',
		'updated_at',
	),
)); ?>
