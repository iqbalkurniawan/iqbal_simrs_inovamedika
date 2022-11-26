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
		// $users=array(
		// 	// username => password
		// 	'demo'=>'demo',
		// 	'admin'=>'admin',
		// );
		if(($this->tingkatan < 5) ||($this->tingkatan == 6)){
				$user = Yii::app()->db->createCommand()
				->select('a.*, b.nip, b.nama_pegawai')
				->from('ms_user a')
				->join('ms_pegawai b', 'a.pegawai_id=b.id')
				->where('username=:username', array(':username'=>$this->username))
				->queryRow();

		}else{
				$user = Yii::app()->db->createCommand()
				->select('a.*, b.no_str, b.nama_dokter')
				->from('ms_user a')
				->join('ms_dokter c', 'a.dokter_id=c.id')
				->where('username=:username', array(':username'=>$this->username))
				->queryRow();
		}
		
		if($user){
				if($user['password'] == md5($this->password)){
					session_start();  
					$_SESSION['role']=$user['role_id'];
					$_SESSION['data_user'] = $user;
					$this->errorCode=self::ERROR_NONE;
				}else{
					$this->errorCode=self::ERROR_PASSWORD_INVALID;
				}
		}else{
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		return !$this->errorCode;
		// if(!isset($users[$this->username]))
		// 	$this->errorCode=self::ERROR_USERNAME_INVALID;
		// elseif($users[$this->username]!==$this->password)
		// 	$this->errorCode=self::ERROR_PASSWORD_INVALID;
		// else
		// 	$this->errorCode=self::ERROR_NONE;
		// return !$this->errorCode;
	}
}