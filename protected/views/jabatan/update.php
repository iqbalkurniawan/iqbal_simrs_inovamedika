<?php
/* @var $this JabatanController */
/* @var $model MsJabatan */

$this->breadcrumbs=array(
	'Ms Jabatans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MsJabatan', 'url'=>array('index')),
	array('label'=>'Create MsJabatan', 'url'=>array('create')),
	array('label'=>'View MsJabatan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MsJabatan', 'url'=>array('admin')),
);
?>

<h1>Update MsJabatan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>