<?php
/* @var $this UserController */
/* @var $model MsUser */

$this->breadcrumbs=array(
	'Pengguna'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MsUser', 'url'=>array('index')),
	array('label'=>'Manage MsUser', 'url'=>array('admin')),
);
?>

<h1>Create MsUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>