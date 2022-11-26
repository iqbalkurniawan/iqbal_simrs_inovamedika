<?php
/* @var $this PegawaiController */
/* @var $model MsPegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsPegawai', 'url'=>array('index')),
	array('label'=>'Create MsPegawai', 'url'=>array('create')),
	array('label'=>'Update MsPegawai', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsPegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsPegawai', 'url'=>array('admin')),
);
?>

<h1>View MsPegawai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nip',
		'nama_pegawai',
		'tanggal_lahir',
		'alamat',
		'unitkerja_id',
		'jabatan_id',
		'no_telepon',
		'created_at',
		'updated_at',
	),
)); ?>
