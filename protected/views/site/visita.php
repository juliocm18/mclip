<div id="panelImg" class="col-md-2" >
	<br><br>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/1.jpg" alt="...">
	      <div class="carousel-caption">
	       
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/2.jpg" alt="...">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>

	<br>
	<div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/3.jpg" alt="...">
	      <div class="carousel-caption">
	       
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/4.jpg" alt="...">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>

	<br>
	<div id="carousel-example-generic_3" class="carousel slide" data-ride="carousel">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner">
	    <div class="item active">
	      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/5.jpg" alt="...">
	      <div class="carousel-caption">
	       
	      </div>
	    </div>
	    <div class="item">
	      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logos/6.jpg" alt="...">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic_3" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic_3" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
	
	

</div>
<div id="panelCont" class="col-md-10 padingcero">	
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paciente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableClientValidation'=>true,
	'clientOptions'=>array(
              'validateOnSubmit'=>true,
              'validateOnChange' => true,
              'afterValidate' => 'js:function(form, data, hasError) { 
                  if(hasError) {
                      for(var i in data) $("#"+i).addClass("error_input");
                      return false;


                  }
                  else {
                      form.children().removeClass("error_input");
                      return true;
                  }  
              }'
          ),
	/*'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),*/
	)); ?>
		<div class="col-md-9 setup-content step activeStepInfo" id="step-1">
			<div class="subtitulo">
				01. Ficha Técnica
			</div>
			<div id="ficha" class="col-md-12 fondoform">
				<div class="col-md-12 formCont">																
					<div class="col-md-6" style="padding-right: 0px; padding-left: 0px;">
						<div class="form-group">
							<?php echo $form->labelEx($model,'nombres'); ?>
							<?php echo $form->textField($model,'nombres',array('maxlength'=>150,'class'=>'form-control')); ?>
							<?php echo $form->error($model,'nombres'); ?>
					  	</div>					  
					  	
					  		<div class="form-group">
							    <?php echo $form->labelEx($model,'talla'); ?>
								<?php echo $form->textField($model,'talla',array('maxlength'=>15,'class'=>'form-control')); ?>
								<?php echo $form->error($model,'talla'); ?>
					  		</div>
					  	
					  		
					  
					  		<div class="form-group">
							    <?php echo $form->labelEx($model,'presion'); ?>
								<?php echo $form->textField($model,'presion',array('maxlength'=>10,'class'=>'form-control')); ?>
								<?php echo $form->error($model,'presion'); ?>
								
					  		</div>
					  
					  	<div class="form-group">
					  		<?php echo $form->labelEx($model,'alergias'); ?>
							<?php echo $form->textArea($model,'alergias',array('maxlength'=>350,'rows' => 6,'class'=>'form-control')); ?>
							<?php echo $form->error($model,'alergias'); ?>
					  	</div>
					  	<div class="form-group">
					  		<?php echo $form->labelEx($model,'observaciones'); ?>
							<?php echo $form->textArea($model,'observaciones',array('maxlength'=>350,'rows' => 6,'class'=>'form-control')); ?>
							<?php echo $form->error($model,'observaciones'); ?>
					  	</div>
					  	<div style="clear:both">&nbsp;</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<?php echo $form->labelEx($model,'sexo'); ?>
						<br>
						<?php
			                $accountStatus = array('Masculino'=>'Masculino', 'Femenino'=>'Femenino');
			                echo $form->radioButtonList($model,'sexo',$accountStatus,array('separator'=>'&nbsp; &nbsp; &nbsp; '));
				        ?>	
				        <?php echo $form->error($model,'sexo'); ?>
						</div>
						<div class="form-group">
					  		<?php echo $form->labelEx($model,'email'); ?>
							<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
							<?php echo $form->error($model,'email'); ?>
					  	</div>
					  	<div class="form-group">
							    <?php echo $form->labelEx($model,'sangre'); ?>
								<?php echo $form->textField($model,'sangre',array('maxlength'=>15,'class'=>'form-control')); ?>
								<?php echo $form->error($model,'sangre'); ?>
								
					  		</div>
					  		<div class="form-group">
							    <?php echo $form->labelEx($model,'peso'); ?>
								<?php echo $form->textField($model,'peso',array('maxlength'=>15,'class'=>'form-control')); ?>
								<?php echo $form->error($model,'peso'); ?>
					  		</div>
						<div class="form-group">
							<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
							<?php
								$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								    'model'=>$model,								    
					                'attribute'=>'fecha_nacimiento',
					                'value'=>date('yy-mm-dd'),   
								    'language' => 'es', 
								    'options'=>array(
								    	'dateFormat' => 'yy-mm-dd',
								        'showAnim'=>'fadeIn',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showButtonPanel'=>true,
								        'changeYear'=>true,
								        'changeMonth' => true, 
								        'yearRange'=>'1950:2099',
								        'minDate' => '1950-01-01',      // minimum date
								        'maxDate' => 'today-1',   // maximum date
								    ),
								    'htmlOptions'=>array(
								       'style'=>'',
								       'class'=>'form-control'
								    ),
								));
							?>
							<?php echo $form->error($model,'fecha_nacimiento'); ?>
						</div>
					</div>
					<div style="clear:both">&nbsp;</div>
					<?php if(Yii::app()->user->hasFlash('registro_correcto')):?>
							<p class="bg-success bg_estados">
							   <?php echo Yii::app()->user->getFlash('registro_correcto'); ?>
							</p> 	
					<?php endif; ?>
					<ul style="list-style:none; cursor:pointer;text-transform:uppercase;background-color:white;padding:10px;text-align:center;border:2px solid #D9D9D9;">
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-1');">
								<a class="step-1p breadpasos liste">Ficha Técnica</a></li> 
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-2');">
								<a class="step-2p liste">> Anamnesis</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 51, 'step-3');">
								<a class="step-3p liste">> Diagnóstico</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 68, 'step-4');">
								<a class="step-4p liste">> Receta</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 85, 'step-5');">
								<a class="step-5p liste">> Incicaciones</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 100, 'step-6');">
								<a class="step-6p liste">> Histórico</a>
						</li>
					</ul>
				</div>
				
				
			</div>
		</div>
		<div class="col-md-9 setup-content step hiddenStepInfo" id="step-2">
			<div class="subtitulo">
				02. Anamnesis
			</div>
			<div id="anamnesis" class="col-md-12 fondoform">
				<div class="col-md-12 formCont">																
					<div class="col-md-12">
						<div class="form-group">
						    <?php echo $form->labelEx($model_v,'motivo'); ?>
							<?php echo $form->textField($model_v,'motivo',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
							<?php echo $form->error($model_v,'motivo'); ?>
					  	</div>								  	
					  	<div class="form-group">
					  		<?php echo $form->labelEx($model_v,'descripcion_motivo'); ?>
							<?php echo $form->textArea($model_v,'descripcion_motivo',array('maxlength'=>350,'rows' => 16,'class'=>'form-control')); ?>
							<?php echo $form->error($model_v,'descripcion_motivo'); ?>
					  	</div>
					  	<div style="clear:both">&nbsp;</div>
					</div>
					<div style="clear:both">&nbsp;</div>
					<ul style="list-style:none; cursor:pointer;text-transform:uppercase;background-color:white;padding:10px;text-align:center;border:2px solid #D9D9D9;">
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-1');">
								<a class="step-1p breadpasos liste">Ficha Técnica</a></li> 
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-2');">
								<a class="step-2p liste">> Anamnesis</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 51, 'step-3');">
								<a class="step-3p liste">> Diagnóstico</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 68, 'step-4');">
								<a class="step-4p liste">> Receta</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 85, 'step-5');">
								<a class="step-5p liste">> Incicaciones</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 100, 'step-6');">
								<a class="step-6p liste">> Histórico</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9 setup-content step hiddenStepInfo" id="step-3">
			<div class="subtitulo">
				03. Diagnóstico
			</div>
			<div id="diagnostico" class="col-md-12 fondoform">
				<div class="col-md-12 formCont">																
					<div class="col-md-12">
						<div class="form-group">
							<?php echo $form->labelEx($model_v,'diagnostico'); ?>
							<?php echo $form->textField($model_v,'diagnostico',array('maxlength'=>100,'class'=>'form-control')); ?>
							<?php echo $form->error($model_v,'diagnostico'); ?>
					  	</div>								  	
					  	<div class="form-group">
						    <?php echo $form->labelEx($model_v,'descripcion_diagnostico'); ?>
							<?php echo $form->textArea($model_v,'descripcion_diagnostico',array('rows'=>16,'class'=>'form-control')); ?>
							<?php echo $form->error($model_v,'descripcion_diagnostico'); ?>
					  	</div>
					  	<div style="clear:both">&nbsp;</div>
					</div>
					<div style="clear:both">&nbsp;</div>
					<ul style="list-style:none; cursor:pointer;text-transform:uppercase;background-color:white;padding:10px;text-align:center;border:2px solid #D9D9D9;">
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-1');">
								<a class="step-1p breadpasos liste">Ficha Técnica</a></li> 
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-2');">
								<a class="step-2p liste">> Anamnesis</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 51, 'step-3');">
								<a class="step-3p liste">> Diagnóstico</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 68, 'step-4');">
								<a class="step-4p liste">> Receta</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 85, 'step-5');">
								<a class="step-5p liste">> Incicaciones</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 100, 'step-6');">
								<a class="step-6p liste">> Histórico</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9 setup-content step hiddenStepInfo" id="step-4">
			<div class="subtitulo">
				04. Receta
			</div>
			<div id="receta" class="col-md-12 fondoform">
				<div class="col-md-12 formCont">																
					<div class="col-md-12">						  	
					  	<div class="form-group">
					  		<?php echo $form->labelEx($model_v,'receta'); ?>
							<?php $this->widget('application.extensions.tinymce.ETinyMce',
								array(
								'model'=>$model_v,
								'attribute'=>'receta',
								'editorTemplate'=>'full',
								'htmlOptions'=>array('rows'=>19, 'class'=>'tinymce form-control'),
								'options' => array(
								'theme_advanced_buttons1' =>
								'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,cut,copy,paste,pastetext,pasteword,',
								'theme_advanced_buttons2' =>
								'fontsizeselect,|,forecolor,backcolor,|,bold,italic,underline,strikethrough,|,sub,sup,charmap,emotions,media,image,|,link,unlink,anchor,|,insertdate,inserttime,',
								'theme_advanced_buttons3'=>'',
								'theme_advanced_buttons4'=>'',
								
								),
							)); ?>
							<?php echo $form->error($model_v,'receta'); ?>
					  	</div>
					  	<div style="clear:both">&nbsp;</div>					  	
					</div>
					<div style="clear:both">&nbsp;</div>
					<ul style="list-style:none; cursor:pointer;text-transform:uppercase;background-color:white;padding:10px;text-align:center;border:2px solid #D9D9D9;">
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-1');">
								<a class="step-1p breadpasos liste">Ficha Técnica</a></li> 
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-2');">
								<a class="step-2p liste">> Anamnesis</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 51, 'step-3');">
								<a class="step-3p liste">> Diagnóstico</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 68, 'step-4');">
								<a class="step-4p liste">> Receta</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 85, 'step-5');">
								<a class="step-5p liste">> Incicaciones</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 100, 'step-6');">
								<a class="step-6p liste">> Histórico</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9 setup-content step hiddenStepInfo" id="step-5">
			<div class="subtitulo">
				05. indicaciones
			</div>
			<div id="indicaciones" class="col-md-12 fondoform">
				<div class="col-md-12 formCont">																
					<div class="col-md-12">						  	
					  	<div class="form-group">
						  	<?php echo $form->labelEx($model_v,'indicaciones'); ?>
						  	<?php $this->widget('application.extensions.tinymce.ETinyMce',
								array(
								'model'=>$model_v,
								'attribute'=>'indicaciones',
								'editorTemplate'=>'full',
								'htmlOptions'=>array('rows'=>19, 'class'=>'tinymce form-control'),
								'options' => array(
								'theme_advanced_buttons1' =>
								'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,sub,sup,|,bullist,numlist,|,cut,copy,paste,pastetext,pasteword,',
								'theme_advanced_buttons2' =>
								'fontsizeselect,|,forecolor,backcolor,|,bold,italic,underline,strikethrough,|,sub,sup,charmap,emotions,media,image,|,link,unlink,anchor,|,insertdate,inserttime,',
								'theme_advanced_buttons3'=>'',
								'theme_advanced_buttons4'=>'',
								),
							)); ?>
							<?php echo $form->error($model_v,'indicaciones'); ?>
							
							

					  	</div>
					  	<input type="submit" value="Guardar" class="btn btn-warning btn_naranja">
					  	<div style="clear:both">&nbsp;</div>
					  	
					</div>
						<div style="clear:both">&nbsp;</div>
					<div class="bg-danger bg_estados">
					  <?php echo $form->errorSummary($model); ?>
					  <?php echo $form->errorSummary($model_v); ?>
					</div> 
					<div style="clear:both">&nbsp;</div>
					<ul style="list-style:none; cursor:pointer;text-transform:uppercase;background-color:white;padding:10px;text-align:center;border:2px solid #D9D9D9;">
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-1');">
								<a class="step-1p breadpasos liste">Ficha Técnica</a></li> 
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-2');">
								<a class="step-2p liste">> Anamnesis</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 51, 'step-3');">
								<a class="step-3p liste">> Diagnóstico</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 68, 'step-4');">
								<a class="step-4p liste">> Receta</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 85, 'step-5');">
								<a class="step-5p liste">> Incicaciones</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 100, 'step-6');">
								<a class="step-6p liste">> Histórico</a>
						</li>
					</ul>
				</div>
			</div>


			
		</div>
	<?php $this->endWidget(); ?>
		<div class="col-md-9 setup-content step hiddenStepInfo" id="step-6">
			<div class="subtitulo">
				06. histórico
			</div>
			<div id="historico" class="col-md-12 fondoform">
				<div class="col-md-12 formCont">																
					<div class="col-md-12">	
						<?php if (!is_object($model_visitas)): 
							$i=0;?>							
							<table class="table table-bordered tablaClientes">	
								<?php foreach ($model_visitas as $data): ?>
									<?php if ($i==0): ?>
									<tr>
										<td colspan="2">
											<label >Paciente: </label>
											<label class="naranja"><?php echo $data->paciente->nombres; ?></label>
										</td>
									</tr>
								<?php endif ?>
									<tr>
										<td>
											<form action="<?php echo Yii::app()->request->baseUrl; ?>/visita/detalle" method="post">
												<label >Motivo de Visita: </label><br>
												<input type="hidden" name="id_detalle" value="<?php echo $data->id; ?>">
												<span class=""><?php echo $data->motivo; ?> <input type="submit" class="btn btn-warning btn-xs  btn_naranja" value="ir"></span>
											</form>
											
										</td>
										<td>
											<label >Fecha de Visita: </label>
										    <span class="help-block"><?php echo $data->fecha; ?> </span>
										</td>
									</tr>	
								<?php $i++; endforeach ?>				
							</table>
						<?php else: ?>
							<br><br>
							<label class="naranja">Debe seleccionar un cliente para poder ver el histórico.</label>
						<?php endif ?>
					  	
					  	<div style="clear:both">&nbsp;</div>
					</div>
					<div style="clear:both">&nbsp;</div>
					<ul style="list-style:none; cursor:pointer;text-transform:uppercase;background-color:white;padding:10px;text-align:center;border:2px solid #D9D9D9;">
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-1');">
								<a class="step-1p breadpasos liste">Ficha Técnica</a></li> 
						<li  style="display:inline;" onclick="javascript: resetActive(event, 34, 'step-2');">
								<a class="step-2p liste">> Anamnesis</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 51, 'step-3');">
								<a class="step-3p liste">> Diagnóstico</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 68, 'step-4');">
								<a class="step-4p liste">> Receta</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 85, 'step-5');">
								<a class="step-5p liste">> Incicaciones</a></li>
		                <li  style="display:inline;" onclick="javascript: resetActive(event, 100, 'step-6');">
								<a class="step-6p liste">> Histórico</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	
	<div class="col-md-3 logoculto" style="padding-right: 0px; padding-left: 0px;">
	<div style="clear:both">&nbsp;</div>
		<div class="col-md-12 fondoformDerecho">
			<div class="col-md-12 formContDerecho">
				<form action="<?php echo Yii::app()->request->baseUrl; ?>/site/visita" method="post">
					<div>
						<label for="">Buscar Paciente</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="txtbusca_paciente" required placeholder="BUSCAR...">
					</div>
					<input type="submit" value="Buscar" class="btn btn-warning btn_naranja">
				</form>				
					<?php if (!is_object($model_b_paciente)): ?>
						<table class="table table-bordered tablaClientes">
							<?php foreach ($model_b_paciente as $data): ?>							
								<tr>
									<td>
										<form action="<?php echo Yii::app()->request->baseUrl; ?>/site/visita" method="post">
											<input type="hidden" name="paciente_id" value="<?php echo $data->id; ?>">										
											<input type="submit" class="btn btn-link btntabla" value="<?php echo $data->nombres; ?>">	
										</form>			
									</td>
								</tr>
							<?php endforeach ?>
						</table>					
					<?php endif ?>					
				<input type="button" value="Registrar Cliente" class="btn btn-warning btn_naranja" onclick="location.href=('<?php echo Yii::app()->request->baseUrl;?>/site/visita');">
			</div>						
		</div>
	</div>
	<div style="clear:both"></div>
	<div id="logoFoot" class="col-md-12">
	<div style="clear:both">&nbsp;</div>
		<img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="">
	</div>
</div>
<style>
	input.error
	{
		background: #FEE;
		border-color: #C00;
	}
	.errorSummary
	{
		color: red;
	}
</style>
<script type="text/javascript">
function imprSelec(muestra)
{
	var ficha=document.getElementById(muestra);
	var ventimp=window.open(' ','popimpr');
	ventimp.document.write(ficha.innerHTML);
	ventimp.document.close();
	ventimp.print();
	ventimp.close();
}
</script>
<?php if (Yii::app()->session['s_hist']=='historico'): ?>
	
	<script>
	//holi
	$(document).on('ready',function(){
		$("#history").trigger('click');
	});
	</script>
<?php  Yii::app()->session['s_hist']='' ?>
<?php endif ?>