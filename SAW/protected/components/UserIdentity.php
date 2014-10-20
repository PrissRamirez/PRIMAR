<?php

class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{
		$user=Users::model()->find("LOWER(username)=?",array(strtolower($this->username)));
	
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1($this->password)!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id;
			$this->setState("email",$user->email);
			$this->errorCode=self::ERROR_NONE;
		}
			
		return !$this->errorCode;
	}
	public function getId()
    {
        return $this->_id;
    }
}