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
                $this->username = strtolower($this->username);
                $connection=Yii::app()->db;
                $sql = "SELECT account,password FROM pins_user WHERE account = '".$this->username."'";
                $command = $connection->createCommand($sql);
                $row = $command->queryAll();
                foreach($row as $v) {
                        $users[$v['account']] = $v['password'];
                }
                if(!isset($users[$this->username])) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
                }
                elseif($users[$this->username]!==md5($this->password)) {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
                }
		else {
			$this->errorCode=self::ERROR_NONE;
                }
		return !$this->errorCode;
	}
}