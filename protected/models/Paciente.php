<?php

/**
 * This is the model class for table "paciente".
 *
 * The followings are the available columns in table 'paciente':
 * @property integer $id
 * @property string $nombres
 * @property string $talla
 * @property string $peso
 * @property integer $sangre
 * @property string $presion
 * @property string $alergias
 * @property string $observaciones
 * @property string $sexo
 * @property string $fecha_nacimiento
 *
 * The followings are the available model relations:
 * @property Visita[] $visitas
 */
class Paciente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paciente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombres, talla, peso, presion, alergias, observaciones, sexo, fecha_nacimiento, sangre', 'required'),						
			array('nombres', 'length', 'max'=>150),
			array('talla', 'length', 'max'=>15),
			array('sangre', 'length', 'max'=>15),
			array('fecha_nacimiento','match', 'pattern'=>'/^\d{2,4}\-\d{1,2}\-\d{1,2}$/','message'=>'El formato debe ser Año-Mes-Día <br>Ejm: 2000-01-30'),			
			array('peso', 'length', 'max'=>15),
			array('presion, sexo', 'length', 'max'=>10),
			array('alergias, observaciones', 'length', 'max'=>350),
			array('email', 'email'),
			array('email', 'length', 'max'=>150),
			//array('email', 'unique', 'attributeName'=>'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombres, talla, peso, sangre, presion, alergias, observaciones, sexo, fecha_nacimiento', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'visitas' => array(self::HAS_MANY, 'Visita', 'Paciente_id'),
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
			'talla' => 'Talla',
			'peso' => 'Peso',
			'sangre' => 'Tipo de Sangre',
			'presion' => 'Presion',
			'alergias' => 'Alergias o Limitaciones',
			'observaciones' => 'Observaciones Médicas',
			'sexo' => 'Sexo',
			'fecha_nacimiento' => 'Fecha Nacimiento',
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
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('sangre',$this->sangre);
		$criteria->compare('presion',$this->presion,true);
		$criteria->compare('alergias',$this->alergias,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paciente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
