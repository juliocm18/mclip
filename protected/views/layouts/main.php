<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Julio Becerra Urbina">	
	<!-- Support for HTML5 -->
	  <!--[if lt IE 9]>
	    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  	  <![endif]-->
  	  
  	  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico">

  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
  	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


 
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container padingcero">
		<div class="col-md-12 padingcero">
			<div class="col-md-12 bannerTop">
				<div class="navbar navbar-default aparece" role="navigation">
		          <div class="container">
		          <a href="#"><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="" width="100px"></a>
		            <div class="navbar-header">
		              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>

		             
		              <a class="navbar-brand" href="#"> MENU</a>
		            </div>
		            <div class="navbar-collapse collapse in" style="">
		              <ul class="nav navbar-nav menu_invi">
		                <li><a href="http://medicclip.com/">Inicio</a></li>
		                <?php if (Yii::app()->session['s_nick']!=''): ?>
		                	<?php if ($_SERVER['REQUEST_URI']=='/mclip/site/visita'): ?>
		                		<li onclick="javascript: resetActive(event, 34, 'step-1');">
													<a >Ficha Técnica</a></li> 
								<li onclick="javascript: resetActive(event, 34, 'step-2');">
										<a >Anamnesis</a></li>
			                    <li onclick="javascript: resetActive(event, 51, 'step-3');">
											<a >Diagnóstico</a></li>
			                    <li onclick="javascript: resetActive(event, 68, 'step-4');">
											<a >Receta</a></li>
			                    <li onclick="javascript: resetActive(event, 85, 'step-5');">
											<a >Incicaciones</a></li>
			                    <li onclick="javascript: resetActive(event, 100, 'step-6');">
											<a >Histórico</a></li>
		                	<?php else: ?>
								<li  class="last" onclick="location.href=('<?php echo Yii::app()->request->baseUrl;?>/site/visita');">
											<a >Ficha Técnica</a></li>
		                	<?php endif ?>
		                   
						<?php endif ?>
		               
		              </ul>
		            </div>
		          </div>
		        </div>

				<div id="oculta" class="col-md-4">
					<img class="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="" >
				</div>
				<div id="oculta" class="col-md-8">
					<ul class="nav navbar-nav navbar-right menu">
						<li onclick="location.href=('http://medicclip.com/');">
							Inicio <div class="contenido_number"><span id="step0" class="number">00</span></div>
						</li>
						<?php if (Yii::app()->session['s_nick']!=''): ?>

							<?php if ($_SERVER['REQUEST_URI']=='/mclip/site/visita'): ?>
								<li onclick="javascript: resetActive(event, 34, 'step-1');">
									Ficha Técnica<div class="contenido_number"><span id="step-1n" class="number circulo_red">01</span></div>
								</li>
								<li onclick="javascript: resetActive(event, 34, 'step-2');">
									Anamnesis<div class="contenido_number"><span id="step-2n" class="number">02</span></div>
								</li>
								<li onclick="javascript: resetActive(event, 51, 'step-3');">
									Diagnóstico<div class="contenido_number"><span id="step-3n" class="number">03</span></div>
								</li>
								<li onclick="javascript: resetActive(event, 68, 'step-4');">
									Receta<div class="contenido_number"><span  id="step-4n" class="number">04</span></div>
								</li>
								<li onclick="javascript: resetActive(event, 85, 'step-5');">
									Incicaciones<div class="contenido_number"><span id="step-5n" class="number">05</span></div>
								</li>
								<li id="history" onclick="javascript: resetActive(event, 100, 'step-6');">
									Histórico<div class="contenido_number"><span id="step-6n" class="number">06</span></div>
								</li>	


							<?php else: ?>
								<li onclick="location.href=('<?php echo Yii::app()->request->baseUrl;?>/site/visita');">
									Ficha Técnica<div class="contenido_number"><span id="step-1n" class="number ">01</span></div>
								</li>
							<?php endif ?>						
							
						<?php endif ?>
											
					</ul>
				</div>
				
					<?php if (Yii::app()->session['s_nick']!=''): ?>
						<?php $model_u=Usuario::model()->findByPk(Yii::app()->session['s_iduser']);	
						Yii::app()->session['id_emp_s']=$model_u->empleado->id;?>
							<div class="col-md-12 usuarioTop" >								
								<div style="float:right">								
									<form action="<?php echo Yii::app()->request->baseUrl; ?>/site/logout" method="post">
									 	<input type="submit" class="btn  btn-danger" value="Cerrar Sesión">
									</form>
								</div>						
								<div style="float:right;padding-top:5px;padding-right:20px;"><?php  echo "Bienvenido: ".$model_u->empleado->nombres;?>	</div>																											
								<div style="float:right;padding-right:20px;">
									<form action="<?php echo Yii::app()->request->baseUrl; ?>/empleado/update" method="post">										
									 	<input type="submit" class="btn  btn-warning" value="Mi Perfil">
									</form>	
								</div>
							</div>
					<?php endif ?>
				<div style="clear:both"></div>

			</div>
		</div>
		<div class="col-md-12 padingcero">			
			<?php echo $content; ?>		

		</div>
			<div class="col-md-12  aparece" style="background-color:#F8F5E3;border-left: 3px #CDCDCD solid;">
				<ul class="fa-ul" style="margin-left: 2px;float:right">
				  <li style="display: inline;"><a  class="btn btn-lg" style="width: 50px; height:50px; background-color:#0054A6;margin:3px;color:white;"><i class="fa fa-facebook"></i></a></li>
				  <li style="display: inline;" ><a  class="btn btn-lg" style="width: 50px; height:50px; background-color:#00AEEF;margin:3px;color:white;"><i class="fa fa-twitter"></i></a></li>
				  <li style="display: inline;"><a  class="btn btn-lg" style="width: 50px; height:50px; background-color:#0085AE;margin:3px;color:white;"><i class="fa fa-linkedin"></i></a></li>
				  <li style="display: inline;"><a  class="btn btn-lg" style="width: 50px; height:50px; background-color:#FFAA16;margin:3px;color:white;"><i class="fa fa-google-plus"></i></a></li>
				</ul>	
				<div style="clear:both"></div>
		</div>		
		<div style="clear:both"></div>
		<div class="col-md-12 padingcero" style="background-color:#298DB1; padding:10px; text-align:center;color:white">		
		Sitio web optimizado para Google Chrome y Mozilla Firefox <br>
		Desarrollado por <img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/emedia.png" alt="">
		</div>
	</div>
<style>
	.circulo_red
	{
		background-color:#CB3E3A!important;
	}
</style>


<script type="text/javascript">
    function resetActive(event, percent, step) {
       /* $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");*/

        /*$("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }*/
        
        if (step=="step-5") 
    	{
    		var recetatxt=$("#Visita_receta").val();
    		$("#Visita_indicaciones").val(recetatxt);	
    		console.log(step);
    	};
        //

        hideSteps(step);
       
    }

   function hideSteps(step) {
        $(".setup-content").each(function () {
            if ($(this).hasClass("activeStepInfo")) {
                $(this).removeClass("activeStepInfo");               
                $(this).addClass("hiddenStepInfo");
                $(this).css("display","none");
            }             
        });

        $(".number").each(function () {
            if ($(this).hasClass("circulo_red")) {
                $(this).removeClass("circulo_red");
            } 
           
        });

         $(".liste").each(function () {
             if ($(this).hasClass("breadpasos")) {
                $(this).removeClass("breadpasos");
            }                    
        });


        showCurrentStepInfo(step);
         
    }

    function showCurrentStepInfo(step) {        
        var id = "#" + step;
        var idee="#" + step+'n';
        var ideee="." + step+'p';
        $(id).fadeIn( "slow" );
        $(id).addClass("activeStepInfo");
       
        $(idee).addClass("circulo_red");
        console.log(ideee);
        $(ideee).addClass("breadpasos");

    }
</script>
<div id="oculta" style="position:fixed; top:80px;">
<ul class="fa-ul" style="margin-left: 2px;">
  <li><a id="fb" class="btn btn-lg" style="width: 50px; height:50px; background-color:#0054A6;margin:3px;color:white;"><i class="fa fa-facebook"></i></a></li>
  <li ><a id="tw" class="btn btn-lg" style="width: 50px; height:50px; background-color:#00AEEF;margin:3px;color:white;"><i class="fa fa-twitter"></i></a></li>
  <li><a id="ln" class="btn btn-lg" style="width: 50px; height:50px; background-color:#0085AE;margin:3px;color:white;"><i class="fa fa-linkedin"></i></a></li>
  <li><a id="gg" class="btn btn-lg" style="width: 50px; height:50px; background-color:#FFAA16;margin:3px;color:white;"><i class="fa fa-google-plus"></i></a></li>
</ul>	
</div>

<script>

  $( "#fb" ).mouseenter(function() {
     $( "#fb" ).animate({
	    width: "100px",
	  }, 800 );
  })
  .mouseleave(function() {
     $( "#fb" ).animate({
	    width: "50px",
	  }, 800 );
  });

  /////////////////
  $( "#tw" ).mouseenter(function() {
     $( "#tw" ).animate({
	    width: "100px",
	  }, 800 );
  })
  .mouseleave(function() {
     $( "#tw" ).animate({
	    width: "50px",
	  }, 800 );
  });
  //////////////
  $( "#ln" ).mouseenter(function() {
     $( "#ln" ).animate({
	    width: "100px",
	  }, 800 );
  })
  .mouseleave(function() {
     $( "#ln" ).animate({
	    width: "50px",
	  }, 800 );
  });
  ///////////
   $( "#gg" ).mouseenter(function() {
     $( "#gg" ).animate({
	    width: "100px",
	  }, 800 );
  })
  .mouseleave(function() {
     $( "#gg" ).animate({
	    width: "50px",
	  }, 800 );
  });
 
</script>

<!--<script src="http://repository.chatwee.com/scripts/e9a7fde933ae79709dd1ccf8bfac46b6.js" type="text/javascript" charset="UTF-8"></script>-->
</body>
</html>
