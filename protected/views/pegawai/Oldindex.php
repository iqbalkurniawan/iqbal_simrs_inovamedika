<div class="breadcrumbs">
	<a href="javascript:void(0)">Master Data</a> » <span>Pegawai</span>
</div>
<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Pegawai',
// );

$this->menu=array(
	array('label'=>'Create MsPegawai', 'url'=>array('create')),
	array('label'=>'Manage MsPegawai', 'url'=>array('admin')),
);
?>

<h1>Data Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
