<?php
/* @var $this TrRekammedisController */
/* @var $model TrRekammedis */

$this->breadcrumbs=array(
	'Registrasi Pasien'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TrRekammedis', 'url'=>array('index')),
	array('label'=>'Create TrRekammedis', 'url'=>array('create')),
	array('label'=>'Update TrRekammedis', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TrRekammedis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrRekammedis', 'url'=>array('admin')),
);
?>

<h1>View Registrasi Pasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pasien_id',
		'status_registrasi',
		'diagnosa',
		'tanggal_masuk',
		'tanggal_keluar',
		'kamar_id',
		'poli_id',
		'dokter_id',
		'created_at',
		'updated_at',
	),
)); ?>
