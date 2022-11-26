<?php
/* @var $this UserController */
/* @var $model MsUser */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsUser', 'url'=>array('index')),
	array('label'=>'Create MsUser', 'url'=>array('create')),
	array('label'=>'Update MsUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsUser', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'pegawai_id',
		'dokter_id',
		'role_id',
		'password',
		'created_at',
		'updated_at',
	),
)); ?>
