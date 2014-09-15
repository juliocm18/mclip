<div  id="panelCont" class="col-md-12">
	<h1>Registrar Médico</h1>
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation'=>true,
	'clientOptions'=>array(
              'validateOnSubmit'=>true,
              'afterValidate' => 'js:function(form, data, hasError) { 
                  if(hasError) {
                      for(var i in data) $("#"+i).addClass("error_input");
                      return false;
                  }
                  else {
                      form.children().removeClass("error_input");
                      return true;
                  }
              }',
              'afterValidateAttribute' => 'js:function(form, attribute, data, hasError) {
                  if(hasError) $("#"+attribute.id).addClass("error_input");
                      else $("#"+attribute.id).removeClass("error_input"); 
              }'
          ),
	/*'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),*/
	)); ?>

	<p class="note">Los campos con <span class="span_req">*</span> son obligatorios.</p>

	<?php /*echo $form->errorSummary($model);*/ ?>

	<div class="col-md-6">
		<div class="form-group">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombres'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'apellidos'); ?>
			<?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'apellidos'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'dni'); ?>
			<?php echo $form->textField($model,'dni',array('size'=>60,'maxlength'=>8,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'dni'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model,'email'); ?>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>	
		<div class="form-group">
			<?php echo $form->labelEx($model,'Especialidad_id'); ?>
			<?php echo $form->dropDownList($model,'Especialidad_id',
				$model->ListarEspecialidades,array('class'=>'form-control'));?>
			<?php echo $form->error($model,'Especialidad_id'); ?>
		</div>	
		<div class="form-group">
			<?php echo $form->labelEx($model,'cmp'); ?>
			<?php echo $form->textField($model,'cmp',array('size'=>60,'maxlength'=>10,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'cmp'); ?>
		</div>	
	</div>
	<div class="col-md-6">
		
		<div class="form-group">
			<?php echo $form->labelEx($model,'direccion'); ?>
			<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'direccion'); ?>
		</div>	
		<div class="form-group">
			<?php echo $form->labelEx($model,'telefono'); ?>
			<?php echo $form->textField($model,'telefono',array('maxlength'=>10,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</div>	
		<div class="form-group">
			<?php echo $form->labelEx($model,'celular'); ?>
			<?php echo $form->textField($model,'celular',array('maxlength'=>10,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'celular'); ?>
		</div>	
		<div class="form-group">
			<?php echo $form->labelEx($model_u,'nick'); ?>
			<?php echo $form->textField($model_u,'nick',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
			<?php echo $form->error($model_u,'nick'); ?>
		</div>	
		<div class="form-group">
			<?php echo $form->labelEx($model_u,'clave'); ?>
			<?php echo $form->passwordField($model_u,'clave',array('class'=>'form-control')); ?>
			<?php echo $form->error($model_u,'clave'); ?>
		</div>	
		<input type="submit" value="Registrarme como Médico" class="btn btn-warning btn_naranja">
	<?php $this->endWidget(); ?>
	</div>
	<div style="clear:both"></div>
	<?php if(Yii::app()->user->hasFlash('registro_correcto')):?>
			<p class="bg-success bg_estados">
			   <?php echo Yii::app()->user->getFlash('registro_correcto'); ?>
			</p> 	
	<?php elseif(Yii::app()->user->hasFlash('registro_error')): ?>
		<p class="bg-danger bg_estados">
			   <?php echo Yii::app()->user->getFlash('registro_error'); ?>
			</p> 
	<?php endif; ?>
</div><!-- form -->	
<style>
	#panelCont
	{
		min-height: 600px;
	}
</style>