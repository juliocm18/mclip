<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $dni
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Usuario[] $usuarios
 */
class Empleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, apellidos, dni, email, cmp, Especialidad_id', 'required'),
			array('nombres, apellidos, email', 'length', 'max'=>100,'min'=>4),			
			array('dni', 'length', 'max'=>8, 'min'=>8),
			array('cmp, telefono, celular', 'length', 'max'=>10, 'min'=>5),
			array('direccion', 'length', 'max'=>100, 'min'=>5),
			array('dni, cmp, telefono,celular', 'numerical'),
			array('dni', 'unique', 'attributeName'=>'dni'),
			array('email', 'email'),
			array('email', 'unique', 'attributeName'=>'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombres, apellidos, dni, email', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function getListarEspecialidades(){
			 	// retrieve the models from db
		$models = Especialidad::model()->findAll();
		 
		// format models as $key=>$value with listData
		$list = CHtml::listData($models, 
		                'id', 'nombre');

	    return $list;
	}


	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'Empleado_id'),
			'especialidad' => array(self::BELONGS_TO, 'Especialidad', 'Especialidad_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'dni' => 'Dni',
			'email' => 'Email',
			'cmp' => 'CMP',
			'Especialidad_id' => 'Especialidad',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
