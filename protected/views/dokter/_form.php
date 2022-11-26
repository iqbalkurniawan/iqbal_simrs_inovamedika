<?php
/* @var $this DokterController */
/* @var $model MsDokter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ms-dokter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_str'); ?>
		<?php echo $form->textField($model,'nomor_str',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'nomor_str'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_dokter'); ?>
		<?php echo $form->textField($model,'nama_dokter',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nama_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poli_id'); ?>
		<?php echo $form->textField($model,'poli_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'poli_id'); ?>
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