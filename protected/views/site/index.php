<div id="panelCont" class="col-md-12">		
	<?php if (Yii::app()->session['s_nick']!=''): ?>
		<div class="col-md-6">
		<h3>Bienvenidos</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore perferendis, quo delectus quidem nesciunt praesentium ut illo reiciendis, laboriosam sit nemo! Alias, maxime, atque! Nam sequi quia saepe cupiditate.
		</div>
		<div class="col-md-6">
		<h3>Nosotros</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore perferendis, quo delectus quidem nesciunt praesentium ut illo reiciendis, laboriosam sit nemo! Alias, maxime, atque! Nam sequi quia saepe cupiditate.
		</div>
		<div class="col-md-6">
		<h3>Misión</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore perferendis, quo delectus quidem nesciunt praesentium ut illo reiciendis, laboriosam sit nemo! Alias, maxime, atque! Nam sequi quia saepe cupiditate.
		</div>
		<div class="col-md-6">
		<h3>Visión</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore perferendis, quo delectus quidem nesciunt praesentium ut illo reiciendis, laboriosam sit nemo! Alias, maxime, atque! Nam sequi quia saepe cupiditate.
		</div>
		
	<?php else: ?>
		<div class="col-md-2"></div>
		<div class="col-md-10 logueo" id="step-1">
			<div class="subtitulo">
				login de Usuario
			</div>
			<div class="col-md-5">
				<form action="<?php echo Yii::app()->request->baseUrl; ?>/site/index" method="post">
					<div class="form-group">
				    	<label for="nick">Nick</label>
				    	<input type="text" class="form-control" id="nick" name="nick" required>
				  	</div>	
				  	<div class="form-group">
					    <label for="clave">Contraseña</label>
					    <input type="password" class="form-control" id="clave" name="clave" required>
				  	</div>
			  		<input type="submit" value="Iniciar Sesión" class="btn btn-warning btn_naranja">		  		
			  		<br>
			  		<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/recoverpass">olvidé mi Contraseña</a> | <a href="<?php echo Yii::app()->request->baseUrl; ?>/empleado/create">Registrarse</a>
				</form>
				<?php if(Yii::app()->user->hasFlash('registro_error')): ?>
					<p style="color:red">
						   <?php echo Yii::app()->user->getFlash('registro_error'); ?>
						</p> 
				<?php endif; ?>
				<div style="clear:both"></div>
			</div>			
		</div>
	<?php endif ?>

	
	<div id="logoFoot" class="col-md-12" >
	<div style="clear:both">&nbsp;</div>
		<img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="">
	</div>
</div>

<style>
	#step0
	{
		background-color:#CB3E3A!important;
	}
	#panelCont
	{
		min-height: 550px;
	}
</style>