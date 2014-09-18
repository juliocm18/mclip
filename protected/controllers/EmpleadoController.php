<?php

class EmpleadoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('update'),
				'users'=>array('@'),
			),
			
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Empleado;
		$model_u=new Usuario;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Empleado']))
		{
			$model->attributes=$_POST['Empleado'];
			$model_u->attributes=$_POST['Usuario'];
			$model_u->Empleado_id=0;
			if($model_u->validate())
			{
				if($model->save())
				{
					$model_u->clave=md5($model_u->clave);
					$model_u->Empleado_id=$model->id;
					if($model_u->save())
					{
						Yii::app()->user->setFlash('registro_correcto','Se registraron los datos correctamente');
						if (@!empty($_FILES['Empleado']['name']['logo'])) 
						{											
							$uploadedFile = CUploadedFile::getInstance($model, 'logo'); 
							$fileName = "logo_"."$model->id".".".$uploadedFile->getExtensionName();
			            	$model->logo = $fileName; 
			            	$conexion = Yii::app()->db;
							$consulta="UPDATE empleado SET logo='".$fileName."'
							where id=".$model->id;
							$dataReader=$conexion->createCommand($consulta)->query();

			            	$uploadedFile->saveAs(Yii::getPathOfAlias('webroot')."/uploads/logos/".$fileName);   
						}
						$model=new Empleado;
						$model_u=new Usuario;
					}				
				}
				else
				{
					Yii::app()->user->setFlash('registro_error','Error en el registro, revise que los datos sean válidos');
				}
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
			'model_u'=>$model_u,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		if(Yii::app()->session['id_emp_s']>0)
		{
			$model=$this->loadModel(Yii::app()->session['id_emp_s']);

			if(isset($_POST['Empleado']))
			{
				
				
				$model->attributes=$_POST['Empleado'];

				if($model->save())
				{
					if (@!empty($_FILES['Empleado']['name']['logo'])) 
					{						
						  if ($model->validate(array('logo'))) {
		                    $uploadedFile = CUploadedFile::getInstance($model, 'logo');  
		                  //  $fileName = "nombre_"."{$prefnombre}".'.jpg';
		            		//$model->nombre = $fileName;   
		            		//echo "se subio algo";
		            		$fileName = "logo_"."$model->id".".".$uploadedFile->getExtensionName();
							$uploadedFile->saveAs(Yii::getPathOfAlias('webroot')."/uploads/logos/".$fileName);
							$model->logo=$fileName;
							$model->save();
		                } 								
					}
					Yii::app()->user->setFlash('registro_correcto','Se registraron los datos correctamente');
				}
				else{
					Yii::app()->user->setFlash('registro_error','Error en el registro, revise que los datos sean válidos');
				}		
			}

			$this->render('update',array(
				'model'=>$model,
			));
		}
		else
		{
			$this->redirect(Yii::app()->homeUrl);
		}		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		try{
			$this->loadModel($id)->delete();
		}
		catch(CDbException $e){
		    if(!isset($_GET['ajax']))
		        Yii::app()->user->setFlash('error','No se puede eliminar Empleado');
		    else
		        echo "<div class='flash-error'>No se puede eliminar Empleado </div>"; //for ajax
		}

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Empleado');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Empleado('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Empleado']))
			$model->attributes=$_GET['Empleado'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Empleado the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Empleado::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Empleado $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='empleado-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
