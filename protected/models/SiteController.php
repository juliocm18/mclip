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
	            		Yii::app()->user->setFlash('registro_correcto','Se creó una nueva visita correctamente para el paciente '.$model->nombres);			    
	            	}
	            else
	            {
	            	$model->save();	 
	            	Yii::app()->user->setFlash('registro_correcto','Se registró un nuevo paciente con su respectiva visita');			   
	            }

	            $model_v->Paciente_id=$model->id;           
	            $model_v->save();

	            $envmail= new EnviarEmail();
				$subject=utf8_decode('Detalle de su receta');
				$message=utf8_decode('Estimado '.$model->nombres.':<br>'.$model_v->receta);				
				$message.=utf8_decode($model_v->indicaciones);		
				$envmail->enviar(
				array('info@medicclip.com',Yii::app()->name),
				array($model->email, 1),
				$subject,
				$message
				);

				Yii::app()->session['buscopac']=0;
	          	$model= new Paciente;
				$model_v= new Visita;
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
			array('condition'=>'Paciente_id='.$id)
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
				$message=utf8_decode(' <br> Su usuario es ');
				$message.=utf8_decode('<b>'.$user.'</b>');			
				$message.=utf8_decode('<br>Su clave es: ');
				$message.=utf8_decode('<b>'.$password).'</b> ';
				$message.=utf8_decode("<br><a href='http://medicclip.com/mediclip/'>Click ingresar al Sistema</a>");		
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