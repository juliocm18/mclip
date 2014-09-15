<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
			// 'yiichat'=>array('class'=>'YiiChatAction'), // <- ADD THIS LINE
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		
		if(isset($_POST['nick']))
		{
			$model_us=new LoginForm;
			// validate user input and redirect to the previous page if valid
			$model_us->username=$_POST['nick'];
			$model_us->password=$_POST['clave'];
			if($model_us->login())
			{
				$this->redirect('visita');
			}
			else
			{
				Yii::app()->user->setFlash('registro_error','Los datos de autenticación son inválidos.');
			}
			
		}		

		$this->render('index');
	}
	public function actionVisita()
	{
		if (Yii::app()->session['s_nick']!='') {
			$model= new Paciente;
			$model_v= new Visita;
			$model_b_paciente= new Paciente;
			$model_visitas= new Visita;
			$modelUsuario= new Usuario;

			

			$model_user=Usuario::model()->findByPk(Yii::app()->session['s_iduser']);

			$cabecera="<p style='text-align: center;'><strong>Dr. ".$model_user->empleado->nombres.' '.$model_user->empleado->apellidos."</strong></p>
			<p style='text-align: center;'><strong>Especialidad ". $model_user->empleado->especialidad->nombre."</strong></p>
			<p style='text-align: center;'><strong>CMP ".$model_user->empleado->cmp."</strong></p>";

			$mensaje_direccion='';
			$mensaje_celular='';
			$mesaje_telefono='';


			if ($model_user->empleado->direccion!='') {
				$mensaje_direccion="<p style='text-align: center;'><strong>Dirección ".$model_user->empleado->direccion."</strong></p>";
			}
			if ($model_user->empleado->celular!='') {
				$mensaje_celular="<p style='text-align: center;'><strong>Celular ".$model_user->empleado->celular."</strong></p>";
			}
			if ($model_user->empleado->telefono!='') {
				$mesaje_telefono="<p style='text-align: center;'><strong>Teléfono ".$model_user->empleado->telefono."</strong></p>";			
			}			
			
			$mensaje_foot="<br><br><br><br><br><br><br><br><p style='color:red;'>Esta receta no es confiable sin el sello y la firma del doctor</p>";

			$mensaje=$cabecera.$mensaje_direccion.$mensaje_celular.$mesaje_telefono.$mensaje_foot;
			$model_v->receta=$mensaje;


		if(isset($_POST['nick']))
		{
			$model_us=new LoginForm;
			// validate user input and redirect to the previous page if valid
			$model_us->username=$_POST['nick'];
			$model_us->password=$_POST['clave'];
			$model_us->login();
			Yii::app()->session['buscopac']=0;
		}
		else if(isset($_POST['txtbusca_paciente']))
		{
			$match=$_POST['txtbusca_paciente'];
		    $match = addcslashes($match, '%_'); // escape LIKE's special characters
			$q = new CDbCriteria( array(
			    'condition' => "nombres LIKE :match",         // no quotes around :match
			    'params'    => array(':match' => "%$match%")  // Aha! Wildcards go here
			) );			 
			$model_b_paciente = Paciente::model()->findAll( $q ); 
			Yii::app()->session['buscopac']=0;
		}
		else if(isset($_POST['Paciente'],$_POST['Visita']))
		{

			$model->attributes=$_POST['Paciente'];
        	$model_v->attributes=$_POST['Visita'];

        	
			$model_v->Paciente_id=0;
			$model_v->fecha = new CDbExpression('NOW()');

        	$valid=$model_v->validate();

        	if (Yii::app()->session['buscopac']==0) {
        		$valid=$model->validate() && $valid;
        	}

        	if($valid)
	        {
	        	if(Yii::app()->session['buscopac']!=0)
	            	{	
	            		$ide=Yii::app()->session['buscopac'];
	            		$model = Paciente::model()->findByPk($ide);
	            		$model->attributes=$_POST['Paciente'];
	            		
	            		$model->update();	
	            		Yii::app()->user->setFlash('registro_correcto','Se creó una nueva visita correctamente para el paciente '.$model->nombres.
	            			"<br><a style='text-decoration:none' href="."javascript:imprSelec('muestra')".">Imprimir Receta <span class='glyphicon glyphicon-print'></span></a>".
							"<br><a style='text-decoration:none' href="."javascript:imprSelec('muestra_indica')".">Imprimir Indicaciones   <span class='glyphicon glyphicon-print'></span></a>".
	            			"<div id='muestra' style='display:none;'><div class='well well-large'>$model_v->receta</div></div>
	            			<div id='muestra_indica' style='display:none;'><div class='well well-large'>$model_v->indicaciones</div></div>"
							);			    
	            	}
	            else
	            {
	            	
	            	$model->save();	 
	            	Yii::app()->user->setFlash('registro_correcto','Se registró un nuevo paciente con su respectiva visita'.
	            			"<br><a style='text-decoration:none' href="."javascript:imprSelec('muestra')".">Imprimir Receta <span class='glyphicon glyphicon-print'></span></a>".
							"<br><a style='text-decoration:none' href="."javascript:imprSelec('muestra_indica')".">Imprimir Indicaciones   <span class='glyphicon glyphicon-print'></span></a>".
	            			"<div id='muestra' style='display:none;'><div class='well well-large'>$model_v->receta</div></div>
	            			<div id='muestra_indica' style='display:none;'><div class='well well-large'>$model_v->indicaciones</div></div>"
							);				   
	            }

	            $model_v->Paciente_id=$model->id;           
	            $model_v->save();

	            if($model->email!=null && $model->email!='')
	            {
	            	$envmail= new EnviarEmail();
	            	$subject=utf8_decode('Detalle de su receta médica');
					$message=utf8_decode("
						<table width='100%' border='0' cellspacing='0' cellpadding='0'>
						    <tr>
						      <td align='center' valign='top' bgcolor='#ababab' style='background-color:#ababab;'><br>
						      <br>
						      <table width='600' border='0' cellspacing='0' cellpadding='0'>
						        <tr>
						          <td align='left' valign='top'>

						          <img src='http://www.compuredsac.com/incidencias/images/images/maintop.png' width='600' height='17' style='display:block;'></td>
						        </tr>
						        <tr>
						          <td align='left' valign='top' bgcolor='#ffffff' style='background-color:#ffffff;'><table width='570' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:15px;'>
						            <tr>
						              <td align='left' valign='middle' style='padding:10px;'>
						              <img src='http://medicclip.com/images/logo.png' alt='' style='display:block;'>
						              </td>
						              </tr>
						            </table>
						            <table width='570' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:15px;'>
						              <tr>
						                <td width='360' align='left' valign='middle' style='font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;'>
						                <div style='font-size:24px;'>
						               Detalle de su receta.<br>
						                </div>				  
						                Estimado ".$model->nombres.":<br>".$model_v->receta."<br>".$model_v->indicaciones."              
						                </td>
						                <td align='right' valign='middle'><table width='210' border='0' cellspacing='0' cellpadding='0'>
						                  <tr>
						                    <td align='center' valign='top'></td>
						                  </tr>
						                  <tr>
						                    <td align='center' valign='top' bgcolor='#93C615' style='background-color:#93C615;'></td>
						                  </tr>
						                  <tr>
						                    <td align='center' valign='top'></td>
						                  </tr>
						                </table></td>
						              </tr>
						              </table>
						          
						           
						            <table width='570' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:15px;'>
						              <tr>
						                <td align='left' valign='middle'><img src='http://www.compuredsac.com/incidencias/images/images/top.png' width='570' height='16' style='display:block;'></td>
						                </tr>
						              <tr>
						                <td align='left' valign='middle' bgcolor='#1ba5db' style='padding:0px 20px 0px 20px; font-family:Arial, Helvetica, sans-serif; background-color:#1ba5db; color:#ffffff;'>
						                  <div style='font-size:20px;'></div>
						                  <div style='font-size:13px;'>
						                  Gracias por permitirnos la oportunidad de servirle.
						                  <br>Un cordial saludo,
						                  <br>Medicclip.
						                   </div>
						                  </td>
						                </tr>
						              <tr>
						                <td align='left' valign='middle'><img src='http://www.compuredsac.com/incidencias/images/images/bot.png' width='570' height='16' style='display:block;'></td>
						                </tr>
						              </table>
						            <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:20px;'>
						              
						            </table></td>
						        </tr>
						        </table>
						      <br>
						      <br></td>
						    </tr>
						  </table>
						");		
					$envmail->enviar(
					array('info@medicclip.com',Yii::app()->name),
					array($model->email, 1),
					$subject,
					$message
					);
	            }
	            

				Yii::app()->session['buscopac']=0;
	          	$model= new Paciente;
				$model_v= new Visita;

				$mensaje=$cabecera.$mensaje_direccion.$mensaje_celular.$mesaje_telefono.$mensaje_foot;
				$model_v->receta=$mensaje;
	        }
	        else
	        {
	        	Yii::app()->user->setFlash('registro_error','No se registraron datos, revise que los campos estén llenados correctamente.');
	        }
		}
		else if (isset($_POST['paciente_id'])) {
			$id=$_POST['paciente_id'];
			$model=Paciente::model()->findByPk($id);
			Yii::app()->session['buscopac']=$_POST['paciente_id'];

			$model_visitas=Visita::model()->findAll(
			array('condition'=>'Paciente_id='.$id,'order'=>'fecha DESC')
			);
		}

		$this->render('visita',array('model'=>$model,'model_v'=>$model_v,'model_b_paciente'=>$model_b_paciente,'model_visitas'=>$model_visitas));
		}
		else
		{
			$this->redirect('index');
		}
		
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionRecoverpass()
	{
		$model=new Usuario;
		if(isset($_POST['nick']))
		{
			$user=$_POST['nick'];
			$model=Usuario::model()->find(array("condition"=>"nick =  '$user'"));
						
			if ($model)
			{
				$length = 10;
				$chars = array_merge(range(0,9), range('a','z'), range('A','Z'));
				shuffle($chars);
				$password = implode(array_slice($chars, 0, $length));
				$model->clave=md5($password);				

				$conexion = Yii::app()->db;
				$consulta="UPDATE usuario SET clave='".$model->clave."'
				where nick='".$model->nick."'";
				$dataReader=$conexion->createCommand($consulta)->query();

				$envmail= new EnviarEmail();
				$subject=utf8_decode('Solicitud de reestablecer contraseña');
				$message=utf8_decode("
					<table width='100%' border='0' cellspacing='0' cellpadding='0'>
					    <tr>
					      <td align='center' valign='top' bgcolor='#ababab' style='background-color:#ababab;'><br>
					      <br>
					      <table width='600' border='0' cellspacing='0' cellpadding='0'>
					        <tr>
					          <td align='left' valign='top'>

					          <img src='http://www.compuredsac.com/incidencias/images/images/maintop.png' width='600' height='17' style='display:block;'></td>
					        </tr>
					        <tr>
					          <td align='left' valign='top' bgcolor='#ffffff' style='background-color:#ffffff;'><table width='570' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:15px;'>
					            <tr>
					              <td align='left' valign='middle' style='padding:10px;'>
					              <img src='http://medicclip.com/images/logo.png' alt='' style='display:block;'>
					              </td>
					              </tr>
					            </table>
					            <table width='570' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:15px;'>
					              <tr>
					                <td width='360' align='left' valign='middle' style='font-family:Arial, Helvetica, sans-serif; color:#4e4e4e; font-size:13px; padding-right:10px;'>
					                <div style='font-size:24px;'>
					               	Solicitud de reestablecer contraseña.<br>
					                </div>				  
					                Su usuario es: ".$user."<br>Su clave es:".$password."<br><a href='http://medicclip.com/'>Click ingresar al Sistema</a>      
					                </td>
					                <td align='right' valign='middle'><table width='210' border='0' cellspacing='0' cellpadding='0'>
					                  <tr>
					                    <td align='center' valign='top'></td>
					                  </tr>
					                  <tr>
					                    <td align='center' valign='top' bgcolor='#93C615' style='background-color:#93C615;'></td>
					                  </tr>
					                  <tr>
					                    <td align='center' valign='top'></td>
					                  </tr>
					                </table></td>
					              </tr>
					              </table>
					          
					           
					            <table width='570' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:15px;'>
					              <tr>
					                <td align='left' valign='middle'><img src='http://www.compuredsac.com/incidencias/images/images/top.png' width='570' height='16' style='display:block;'></td>
					                </tr>
					              <tr>
					                <td align='left' valign='middle' bgcolor='#1ba5db' style='padding:0px 20px 0px 20px; font-family:Arial, Helvetica, sans-serif; background-color:#1ba5db; color:#ffffff;'>
					                  <div style='font-size:20px;'></div>
					                  <div style='font-size:13px;'>
					                  Gracias por permitirnos la oportunidad de servirle.
					                  <br>Un cordial saludo,
					                  <br>Medicclip.
					                   </div>
					                  </td>
					                </tr>
					              <tr>
					                <td align='left' valign='middle'><img src='http://www.compuredsac.com/incidencias/images/images/bot.png' width='570' height='16' style='display:block;'></td>
					                </tr>
					              </table>
					            <table width='95%' border='0' align='center' cellpadding='0' cellspacing='0' style='margin-bottom:20px;'>
					              
					            </table></td>
					        </tr>
					        </table>
					      <br>
					      <br></td>
					    </tr>
					  </table>");		
				$envmail->enviar(
				array('info@medicclip.com',Yii::app()->name),
				array($model->empleado->email, 1),
				$subject,
				$message
				);
				 Yii::app()->user->setFlash('registro_correcto','Se restauró la contraseña, revise su correo electrónico');			   
			}				
			else
			{
			  Yii::app()->user->setFlash('registro_error','Error en la recuperación de la contraseña, el usuario no existe');
			}
			$model=new Usuario;
		}
		$this->render('recoverpass',array('model'=>$model));
	}

	public  function actionMediclipchat()
	{
		$this->render('mediclipchat');
	}
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */


	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		Yii::app()->session->destroy();
		$this->redirect(Yii::app()->homeUrl);
	}
}