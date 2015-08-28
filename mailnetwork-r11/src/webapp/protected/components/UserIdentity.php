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
	
	// Customer id after login
	private $_id;
	
	public function authenticate()
	{
		// Special case for admin account		
		if (($this->username == 'ccplus1')) 
		{
			$model = Meta::model()->findByAttributes(array('field'=>'adminpass'));
			if ($this->password == $model->value)
				$this->errorCode=self::ERROR_NONE;
			else
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else 
		{
			$user = Customer::model()->findByAttributes(array('billogin'=>$this->username));
			if ($user === null)
				$this->errorCode=self::ERROR_USERNAME_INVALID;
	        else if($user->bilpass !== $this->password)
	            $this->errorCode=self::ERROR_PASSWORD_INVALID;
	        else
	        {
	            $this->_id=$user->bilkey;
	            $this->errorCode=self::ERROR_NONE;
	        }        				
		}
		
		return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;	
	}
}