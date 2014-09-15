<div  id="panelCont" class="col-md-12">

	<div class="col-md-12">
		<h1>Detalle de Visita del Paciente <?php echo $model->paciente->nombres ?></h1>
		<div class="col-md-6">
			<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('talla')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->talla); ?>
		<br />

		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('peso')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->peso); ?>
		<br />

		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('sangre')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->sangre); ?>
		<br />

		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('presion')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->presion); ?>
		<br />

		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('alergias')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->alergias); ?>
		<br />

		
		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('observaciones')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->observaciones); ?>
		<br />

		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('sexo')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->sexo); ?>
		<br />

		<label><?php echo CHtml::encode($model->paciente->getAttributeLabel('fecha_nacimiento')); ?>:</label>
		<?php echo CHtml::encode($model->paciente->fecha_nacimiento); ?>
		<br />

		<label><?php echo CHtml::encode($model->getAttributeLabel('motivo')); ?>:</label>
		<?php echo CHtml::encode($model->motivo); ?>
		<br />

		<label><?php echo CHtml::encode($model->getAttributeLabel('descripcion_motivo')); ?>:</label>
		<?php echo CHtml::encode($model->descripcion_motivo); ?>
		<br />

		<label><?php echo CHtml::encode($model->getAttributeLabel('diagnostico')); ?>:</label>
		<?php echo CHtml::encode($model->diagnostico); ?>
		<br />

		<label><?php echo CHtml::encode($model->getAttributeLabel('descripcion_diagnostico')); ?>:</label>
		<?php echo CHtml::encode($model->descripcion_diagnostico); ?>
		<br />
		</div>
		<div class="col-md-6">
			<div class="pull-right">
				<form action="<?php echo Yii::app()->request->baseUrl; ?>/site/visita" method="post">
					<input type="hidden" name="paciente_id" value="<?php echo $model->paciente->id; ?>">										
					<input type="submit" class="btn btn-warning btn_naranja" value="REGRESAR AL HISTORICO">	
				</form>	
			</div>
		</div>
		

		
	</div>
	

	
	<div class="col-md-6">
		<div class="panel panel-primary">
	      <div class="panel-heading">
	        <h3 class="panel-title"><?php echo CHtml::encode($model->getAttributeLabel('receta')); ?></h3>
	      </div>
	      <div class="panel-body">
	      <?php echo $model->receta; ?>
	      </div>
	    </div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-primary">
	      <div class="panel-heading">
	        <h3 class="panel-title"><?php echo CHtml::encode($model->getAttributeLabel('indicaciones')); ?></h3>
	      </div>
	      <div class="panel-body">
	      <?php echo $model->indicaciones; ?>
	      </div>
	    </div>
	</div>

	

	<div class="row"><br> </div>

	

	
	
</div>