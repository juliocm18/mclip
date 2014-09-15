<?php

/**
 * This is the model class for table "visita".
 *
 * The followings are the available columns in table 'visita':
 * @property integer $id
 * @property string $motivo
 * @property string $descripcion_motivo
 * @property string $diagnostico
 * @property string $descripcion_diagnostico
 * @property string $receta
 * @property string $indicaciones
 * @property string $fecha
 * @property integer $Paciente_id
 *
 * The followings are the available model relations:
 * @property Paciente $paciente
 */
class Visita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('motivo, descripcion_motivo, diagnostico, descripcion_diagnostico, receta, indicaciones, fecha, Paciente_id', 'required'),
			array('Paciente_id', 'numerical', 'integerOnly'=>true),
			array('motivo, diagnostico', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('motivo, descripcion_motivo, diagnostico, descripcion_diagnostico, receta, indicaciones, fecha, Paciente_id', 'safe', 'on'=>'search'),
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
			'paciente' => array(self::BELONGS_TO, 'Paciente', 'Paciente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'motivo' => 'Anamnesis',
			'descripcion_motivo' => 'Síntomas',
			'diagnostico' => 'Diagnóstico',
			'descripcion_diagnostico' => 'Descripcion del Diagnóstico',
			'receta' => 'Receta',
			'indicaciones' => 'Indicaciones',
			'fecha' => 'Fecha',
			'Paciente_id' => 'Paciente',
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
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('descripcion_motivo',$this->descripcion_motivo,true);
		$criteria->compare('diagnostico',$this->diagnostico,true);
		$criteria->compare('descripcion_diagnostico',$this->descripcion_diagnostico,true);
		$criteria->compare('receta',$this->receta,true);
		$criteria->compare('indicaciones',$this->indicaciones,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('Paciente_id',$this->Paciente_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
