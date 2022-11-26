<?php
/* @var $this TrRekammedisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registrasi Pasien',
);

$this->menu=array(
	array('label'=>'Create Registrasi pasien', 'url'=>array('create')),
	array('label'=>'Manage Registrasi Pasien', 'url'=>array('admin')),
);
?>

<h1>Registrasi Pasien</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
