<?php
/* @var $this PoliController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Poli',
);

$this->menu=array(
	array('label'=>'Tambah Poli', 'url'=>array('create')),
	array('label'=>'Manage Poli', 'url'=>array('admin')),
);
?>

<h1>Poli</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
