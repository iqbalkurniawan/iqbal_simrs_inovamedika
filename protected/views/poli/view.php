<?php
/* @var $this PoliController */
/* @var $model MsPoli */

$this->breadcrumbs=array(
	'Poli'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MsPoli', 'url'=>array('index')),
	array('label'=>'Create MsPoli', 'url'=>array('create')),
	array('label'=>'Update MsPoli', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MsPoli', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MsPoli', 'url'=>array('*')),
);
?>

<h1>View MsPoli #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_poli',
		'created_at',
		'updated_at',
	),
)); ?>
