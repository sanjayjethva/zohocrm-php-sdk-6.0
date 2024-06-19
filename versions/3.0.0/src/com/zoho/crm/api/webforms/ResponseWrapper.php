<?php 
namespace com\zoho\crm\api\webforms;

use com\zoho\crm\api\util\Model;

class ResponseWrapper implements Model, ResponseHandler
{

	private  $webforms;
	private  $keyModified=array();

	/**
	 * The method to get the webforms
	 * @return array A array representing the webforms
	 */
	public function getWebforms()
	{
		return $this->webforms; 

	}

	/**
	 * The method to set the value to webforms
	 * @param array $webforms A array
	 */
	public function setWebforms(array $webforms)
	{
		$this->webforms=$webforms; 
		$this->keyModified['webforms'] = 1; 

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
