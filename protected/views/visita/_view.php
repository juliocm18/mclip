<?php
/* @var $this VisitaController */
/* @var $data Visita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_motivo')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion_diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion_diagnostico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receta')); ?>:</b>
	<?php echo CHtml::encode($data->receta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indicaciones')); ?>:</b>
	<?php echo CHtml::encode($data->indicaciones); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Paciente_id')); ?>:</b>
	<?php echo CHtml::encode($data->Paciente_id); ?>
	<br />

	*/ ?>

</div>