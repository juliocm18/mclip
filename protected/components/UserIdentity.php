<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$conexion = Yii::app()->db;
		$consulta="SELECT id, nick from usuario 
		where nick='".$this->username."' and 
		  clave='".md5($this->password)."'";

		  $dataReader=$conexion->createCommand($consulta)->query();
		  $dataReader->bindColumn(1,$id);
		  $dataReader->bindColumn(2,$nick);		  		
		  while($dataReader->read()!==false)
		  {
		  	Yii::app()->session['s_iduser'] = $id;
		  	Yii::app()->session['s_nick'] = $nick;
		  	$this->errorCode=self::ERROR_NONE;
		  	return !$this->errorCode;
		  }
	}
}