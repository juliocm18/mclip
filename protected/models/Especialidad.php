<?php
class Especialidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'especialidad';
	}
	
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'empleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_id'),
		);
	}
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
?>