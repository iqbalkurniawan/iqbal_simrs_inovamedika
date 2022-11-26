<!-- <div class="breadcrumbs">
	<a href="javascript:void(0)">Master Data</a> » <a href="/index.php?r=pegawai/index">Pegawai</a> » <span>Manage</span></div>
</div> -->
<?php
/* @var $this PegawaiController */
/* @var $model MsPegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	'Manage',
);
// echo '<span class="breadcrumbs">';
// echo '<a href="javascript:void(0)">Master Data</a> » <a href="/index.php?r=pegawai/index">Pegawai</a> » <span>Manage</span></div>';
// echo '</span>';
$this->menu=array(
	array('label'=>'List MsPegawai', 'url'=>array('index')),
	array('label'=>'Create MsPegawai', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ms-pegawai-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<!-- <div class="breadcrumbs">
	<a href="javascript:void(0)">Master Data</a> » <a href="/index.php?r=pegawai/index">Pegawai</a> » <span>Manage</span></div>
</div> -->
<h1>Data Pegawai</h1>

<?php echo CHtml::link('Cari','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ms-pegawai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nip',
		'nama_pegawai',
		'tanggal_lahir',
		'alamat',
		'unitkerja_id',
		/*
		'jabatan_id',
		'no_telepon',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
