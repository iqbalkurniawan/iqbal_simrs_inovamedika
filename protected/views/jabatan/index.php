<?php
/* @var $this JabatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jabatan',
);

$this->menu=array(
	array('label'=>'Tambah Jabatan', 'url'=>array('create')),
	array('label'=>'Manage Jabatan', 'url'=>array('admin')),
);
?>

<h1>Jabatan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
