<?php
/* @var $this VisitaController */
/* @var $model_v Visita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php /*echo $form->errorSummary($model_v);*/ ?>

	<div class="row">
		<?php echo $form->labelEx($model_v,'id'); ?>
		<?php echo $form->textField($model_v,'id'); ?>
		<?php echo $form->error($model_v,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'motivo'); ?>
		<?php echo $form->textField($model_v,'motivo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_v,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'descripcion_motivo'); ?>
		<?php echo $form->textArea($model_v,'descripcion_motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model_v,'descripcion_motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'diagnostico'); ?>
		<?php echo $form->textField($model_v,'diagnostico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model_v,'diagnostico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'descripcion_diagnostico'); ?>
		<?php echo $form->textArea($model_v,'descripcion_diagnostico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model_v,'descripcion_diagnostico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'receta'); ?>
		<?php echo $form->textArea($model_v,'receta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model_v,'receta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'indicaciones'); ?>
		<?php echo $form->textArea($model_v,'indicaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model_v,'indicaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'fecha'); ?>
		<?php echo $form->textField($model_v,'fecha'); ?>
		<?php echo $form->error($model_v,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_v,'Paciente_id'); ?>
		<?php echo $form->textField($model_v,'Paciente_id'); ?>
		<?php echo $form->error($model_v,'Paciente_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model_v->isNewRecord ? 'Guardar' : 'Create'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->