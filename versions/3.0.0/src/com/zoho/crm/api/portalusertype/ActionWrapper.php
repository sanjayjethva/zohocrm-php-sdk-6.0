<?php 
namespace com\zoho\crm\api\portalusertype;

use com\zoho\crm\api\util\Model;

class ActionWrapper implements Model, ActionHandler
{

	private  $userType;
	private  $keyModified=array();

	/**
	 * The method to get the userType
	 * @return array A array representing the userType
	 */
	public function getUserType()
	{
		return $this->userType; 

	}

	/**
	 * The method to set the value to userType
	 * @param array $userType A array
	 */
	public function setUserType(array $userType)
	{
		$this->userType=$userType; 
		$this->keyModified['user_type'] = 1; 

	}

	/**
	 * The method to check if the user has modified the given key
	 * @param string $key A string
	 * @return int A int representing the modification
	 */
	public function isKeyModified(string $key)
	{
		if(((array_key_exists($key, $this->keyModified))))
		{
			return $this->keyModified[$key]; 

		}
		return null; 

	}

	/**
	 * The method to mark the given key as modified
	 * @param string $key A string
	 * @param int $modification A int
	 */
	public function setKeyModified(string $key, int $modification)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
