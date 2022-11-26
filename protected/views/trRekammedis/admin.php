<?php
/* @var $this TrRekammedisController */
/* @var $model TrRekammedis */

$this->breadcrumbs=array(
	'Registrasi Pasien'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Registrasi Pasien', 'url'=>array('index')),
	array('label'=>'Create Registrasi Pasien', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tr-rekammedis-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tr Rekammedises</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tr-rekammedis-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'pasien_id',
		'status_registrasi',
		'diagnosa',
		'tanggal_masuk',
		'tanggal_keluar',
		/*
		'kamar_id',
		'poli_id',
		'dokter_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
