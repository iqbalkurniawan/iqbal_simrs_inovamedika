<?php
/* @var $this PasienController */
/* @var $model MsPasien */

$this->breadcrumbs=array(
	'Pasien'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsPasien', 'url'=>array('index')),
	array('label'=>'Create MsPasien', 'url'=>array('create')),
	array('label'=>'Update MsPasien', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsPasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsPasien', 'url'=>array('admin')),
);
?>

<h1>View Pasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'no_rekammedis',
		'nama_pasien',
		'tanggal_lahir',
		'alamat',
		'no_telepon',
		'created_at',
		'updated_at',
	),
)); ?>
