<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id, $_nameEmployee;
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
        // find() es para buscar en un solo registro, (db, InputUsuario)
		$employee= Employee::model()->find("LOWER(username)=?", array(strtolower($this->username)));
        
		if($employee===null)
			$this->errorCode = self::ERROR_USERNAME_INVALID;
        // encriptación sha1()
		elseif($this->password !== $employee->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
            $this->_id = $employee->idEmployee;
            //guardar en sesión
            $this->_nameEmployee = $employee->nameEmployee;
            //$this->setState("nameEmployee", $users->nameEmployee);
            // obtener el estado de sesion            
            // Yii::app()->user->email
            // Yii::app()->user->getState("email"):
			$this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
	}
    
    public function getName()
    {
        return $this->_nameEmployee;
    }
    
    public function isLogged(){
        echo "hola";
    }
    
}