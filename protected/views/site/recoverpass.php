<div id="panelCont" class="col-md-12">
	<div class="col-md-8 col-md-offset-2">
		<h1>Reestablecer Contraseña</h1>		
		<p class="text-muted">Ingrese su nombre de usuario, luego se le enviará un correo electrónico reestableciendo su contraseña.</p>
		<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'usuario-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableClientValidation'=>true,
		'clientOptions'=>array(
	              'validateOnSubmit'=>true,
	          ),
		/*'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),*/
		)); ?>
		    <div class="form-group">	        
		        <?php echo $form->labelEx($model,'nick'); ?>
		        <input type="text" name="nick" class="form-control" required>			
				<?php echo $form->error($model,'nick'); ?>
		    </div> 	    	 
		    <input type="submit" value="Reestablecer mi contraseña" class="btn btn-warning btn_naranja">	 
		<?php $this->endWidget(); ?>

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
	</div>	
</div>
<div style="clear:both"></div>
	<div id="logoFoot" class="col-md-12" >
		<img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="">
	</div>
<style>
	#panelCont
	{
		min-height: 400px;
	}
</style>