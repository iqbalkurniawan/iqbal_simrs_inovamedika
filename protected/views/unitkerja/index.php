<?php
/* @var $this UnitkerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unit Kerja',
);

$this->menu=array(
	array('label'=>'Tambah Unit Kerja', 'url'=>array('create')),
	array('label'=>'Manage Unit Kerja', 'url'=>array('admin')),
);
?>

<h1>Unit Kerja</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
