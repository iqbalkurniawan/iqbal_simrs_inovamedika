<?php
/* @var $this TrRekammedisController */
/* @var $model TrRekammedis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tr-rekammedis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pasien_id'); ?>
		<?php echo $form->textField($model,'pasien_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'pasien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_registrasi'); ?>
		<?php echo $form->textField($model,'status_registrasi',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'status_registrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosa'); ?>
		<?php echo $form->textArea($model,'diagnosa',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'diagnosa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_masuk'); ?>
		<?php echo $form->textField($model,'tanggal_masuk'); ?>
		<?php echo $form->error($model,'tanggal_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_keluar'); ?>
		<?php echo $form->textField($model,'tanggal_keluar'); ?>
		<?php echo $form->error($model,'tanggal_keluar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kamar_id'); ?>
		<?php echo $form->textField($model,'kamar_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kamar_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poli_id'); ?>
		<?php echo $form->textField($model,'poli_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'poli_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dokter_id'); ?>
		<?php echo $form->textField($model,'dokter_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'dokter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->