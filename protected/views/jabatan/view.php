<?php
/* @var $this JabatanController */
/* @var $model MsJabatan */

$this->breadcrumbs=array(
	'Ms Jabatans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsJabatan', 'url'=>array('index')),
	array('label'=>'Create MsJabatan', 'url'=>array('create')),
	array('label'=>'Update MsJabatan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsJabatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsJabatan', 'url'=>array('*')),
);
?>

<h1>View Jabatan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jabatan',
		'created_at',
		'updated_at',
	),
)); ?>
