<?php
/* @var $this TrRekammedisController */
/* @var $data TrRekammedis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pasien_id')); ?>:</b>
	<?php echo CHtml::encode($data->pasien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_registrasi')); ?>:</b>
	<?php echo CHtml::encode($data->status_registrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosa')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_keluar')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_keluar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kamar_id')); ?>:</b>
	<?php echo CHtml::encode($data->kamar_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('poli_id')); ?>:</b>
	<?php echo CHtml::encode($data->poli_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dokter_id')); ?>:</b>
	<?php echo CHtml::encode($data->dokter_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>